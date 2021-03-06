<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\AddressBook;
use Auth;
use Hash;
use Crypt;


class AddressBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:address_book', ['only' => ['index','create','store','edit','update','destroy','show','import']]);
		$this->data['title'] = 'AddressBook';
    }
	
	public function index(Request $request)
    {    
        $this->data['address_book'] = AddressBook::addressbookList();	
		return view('admin.address_book.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.address_book.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|max:255|email',
			'mobile' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'address_book')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$addressbook = AddressBook::create($input);
		
		if($addressbook){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/address-book');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = AddressBook::getRecordById($id);
		 return view('admin.address_book.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|max:255|email',
			'mobile' => 'required|digits:10',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'address_book')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
     
		$address_book = AddressBook::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($address_book){
			$address_book->update($input);
		}
		else{
			abort(401);
		}
		
		if($address_book){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/address-book');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = AddressBook::getRecordById($id);
        return view('admin.address_book.show',$this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $delete = AddressBook::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
	public function import (Request $request)
    {
		$validator = Validator::make($request->all(), [
			'file'=>'required|mimes:csv'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'address_book')
                            ->withInput();
        } else {
		
		    $auth = Auth::user();
            $file = $request->file('file');
            // File Details 
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if (in_array(strtolower($extension), $valid_extension)) {
                // Check file size
                if ($fileSize <= $maxFileSize) {

                    // File upload location
                    $location = 'uploads/address_book';
                    $location1 = 'uploads/address_book';

                    $file->move($location, $filename);
                    // Import CSV to Database
                    $filepath = public_path($location1 . "/" . $filename);

                    // Reading file

                    $file = fopen($filepath, "r");

                    $importData_arr = array();
                    $importData_arr1 = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 10000, ",")) !== FALSE) {
                        $num = count($filedata);

                        // Skip first row (Remove below comment if you want to skip the first row)
                        if ($i == 0) {
                            for ($c = 0; $c < $num; $c++) {
                                $importData_arr1[$i][] = $filedata[$c];
                                $i++;
                            }
                            continue;
                        }
                        for ($c = 0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata[$c];
                        }
                        $i++;
                    }
                    fclose($file);
                    
				   
                    if ($importData_arr1[0][0] != 'Name' || $importData_arr1[1][0] != 'Email' || $importData_arr1[2][0] != 'Mobile') {
                        Session::flash('error', 'Imported file format is not proper. Please check sample file.');
                        return redirect()->back();
                    }
                     
                    $insert = "0";
                    $i = 0;
                    $m = 0;
                    $cellcount = 1;
                    $insertData = array();
                    foreach ($importData_arr as $importData) {
                        $cellcount++;
                        
                        if (empty(trim($importData[0]))) {
                            Session::flash('error', 'Data is not imported. Cell A' . $cellcount . ': Name is empty.');
                            return redirect()->back();
                        }
                       
                        if (empty(trim($importData[1]))) {
                            Session::flash('error', 'Data is not imported. Cell B' . $cellcount . ': Email is empty.');
                             return redirect()->back();
                        }
                        if (empty(trim($importData[2]))) {
                            Session::flash('error', 'Data is not imported. Cell C' . $cellcount . ': Mobile is empty.');
                             return redirect()->back();
                        }
                       
						  if (!empty($importData[0]) && !empty($importData[1]) && !empty($importData[2])) 
						   {
                            $i++;
                                $insertData[] = array(
                                    'name' => $importData[0],
                                    'email' => $importData[1],
                                    'mobile' => $importData[2],
                                    'created_at' => date('Y-m-d H:i:s'),
                                    'created_by' => $auth->id,
                                );
								
                        } else {
                            Session::flash('error', 'Data is not imported. Row ' . $cellcount . ' is empty.');
                             return redirect()->back();
                        }
                    }
					if (!empty($insertData)) {
						$newary = array_chunk($insertData, 500);
						foreach ($newary as $inskey) {
							$insert = AddressBook::insert($inskey);
						}
						
						if ($insertData) {
							Session::flash('success', 'Data Successfully Imported');
							 return redirect()->back();
						} else {
							Session::flash('error', 'Something went wrong data not Imported');
							 return redirect()->back();
						}
					} else {
						Session::flash('error', 'Something went wrong data not Imported');
						 return redirect()->back();
					}
					 
                }
            }
		}
           
    }
	
}