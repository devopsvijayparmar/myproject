<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use DB;
use Validator;
use App\Models\AddressBook;
use App\Traits\PurchasePlan;
use Auth;
use JsValidator;
use Hash;
use Crypt;
use DataTables;


class AddressBookController extends Controller
{
	use PurchasePlan;
	
	 protected $validationRules = [
        'name' => 'required|string|max:255',
        'email' => 'required|max:255|email',
		'mobile' => 'required|digits:10'
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:address_book', ['only' => ['index','create','store','edit','update','destroy','show','import']]);
    }
	
	public function index(Request $request)
    {    
       
		if ($request->ajax()) {
		  
			$data = AddressBook::getAddressBookList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('address-book.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('address-book.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   return $btn;
			})
			->rawColumns(['action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'email','name' => 'email', 'title' => __("Email"),'searchable'=>true,'orderable' => true],
				['data' => 'mobile','name' => 'mobile', 'title' => __("Mobile"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('address-book.index');
			$data['dateTableTitle'] = "Address Book";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('address-book.create');
			return view('admin.pages.address_book.index',$data);
		
		}
		
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin..pages.address_book.create',$data);
    }
	
	public function store(Request $request)
    {
		$addressbook_count = AddressBook::getAddressBookCount(); 
		if($addressbook_count >= $this->userPurchasePlan()->no_of_address_book){
			return redirect()->route('address-book.index')->with('error', Lang::get('messages.limit'));
		}
		 
		$auth = Auth::user(); 
		$input = $request->all();
        $validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
			
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$addressbook = AddressBook::create($input);
		
		$count = AddressBook::getAddressBookCount();
		$this->updatePurchasePlan('used_address_book',$count);
		
		if($addressbook){
			return redirect()->route('address-book.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
    }
	
	public function edit($id)
    { 	
	    $id = Crypt::decrypt($id);
		$data['data'] = AddressBook::find($id);
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.address_book.edit',$data);
    }
	
	public function update(Request $request,$id)
    {
		$input = $request->all();
        $validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
		 
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
		
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
     
	    $address_book = AddressBook::where('created_by', $auth->id)->where('id',$id)->first();
		$address_book->update($input);
		
		if($address_book){
			return redirect()->route('address-book.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = AddressBook::find($id);
        return view('admin.pages.address_book.show',$data);
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
		$auth = Auth::user(); 	
	    $delete = AddressBook::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
	public function import (Request $request)
    {
		
		$addressbook_count = AddressBook::getAddressBookCount(); 
		if($addressbook_count >= $this->userPurchasePlan()->no_of_address_book){
			return redirect()->route('address-book.index')->with('error', Lang::get('messages.limit'));
		}
		
		$validator = Validator::make($request->all(), [
			'file'=>'required|mimes:csv'
        ]);

         if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }

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
						return redirect()->back()->with('error', 'Data is not imported. Cell A' . $cellcount . ': Name is empty.');
					}
				   
					if (empty(trim($importData[1]))) {
						return redirect()->back()->with('error', 'Data is not imported. Cell B' . $cellcount . ': Email is empty.');
					}
					if (empty(trim($importData[2]))) {
						return redirect()->back()->with('error', 'Data is not imported. Cell C' . $cellcount . ': Mobile is empty.');
					}
					if(!empty($importData[0]) && !empty($importData[1]) && !empty($importData[2])) 
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
						return redirect()->back()->with('error', 'Data is not imported. Row ' . $cellcount . ' is empty.');
					}
				}
				if (!empty($insertData)) {
					
					$addressbook_count = AddressBook::getAddressBookCount(); 
					if($addressbook_count + count($insertData) >= $this->userPurchasePlan()->no_of_address_book){
						return redirect()->route('address-book.index')->with('error', Lang::get('messages.limit'));
					}
					
					$newary = array_chunk($insertData, 500);
					foreach ($newary as $inskey) {
						$insert = AddressBook::insert($inskey);
					}
					
					if ($insertData) {
						return redirect()->back()->with('success', Lang::get('messages.imported'));
					} else {
						return redirect()->back()->with('error', Lang::get('messages.error'));
					}
				} else {
					return redirect()->back()->with('error', Lang::get('messages.error'));
				}
				 
			}
		}
    }
	
}