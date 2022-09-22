@extends('admin.layouts.master')
@section('content')
 <style>
 .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100%!important;
	font-size: 1rem!important;
    font-weight: 400!important;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    outline: 0;
    border: 1px solid #ced4da!important;
}

 </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email Marketing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Email Marketing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Email Marketing</h3>
				<a type="button" class="btn btn-primary float-right ml-2" href="{{route('email-marketing.create')}}">Add</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				  <div class="row">
					@if(count($email) > 0)
					@php $i=0; @endphp
					
					@foreach($email as $retrieved_data)
					@php $i++; @endphp
					<div class="col-lg-6" id="{{$i}}">
					<div class="card">
						<div class="card-header border-0" style="background: linear-gradient(14deg , #344960 0%, rgb(52 73 96 / 0.6))!important;">
							<h3 class="card-title" style="color: white!important;">{{$retrieved_data->subject}}</h3>
							<div class="card-tools">
							   <a title="Edit" class="mr-2" href="{{route('email-marketing.edit',Crypt::encrypt($retrieved_data->id))}}"><i class="fas fa-edit text-info font-16 " style="color:white!important" ></i></a>
						  
							<a title="Delete" href="javascript:void(0)"  onclick="deleteRecordWithReload('{{route('email-marketing.destroy',Crypt::encrypt($retrieved_data->id))}}')"><i style="color:white!important"  class="fas fa-trash-alt text-info font-16"></i></a>
							</div>
						  </div>
					  <div class="card-body">
					  {!!$retrieved_data->email!!}
					  </div>
					  <div class="card-footer">
						 <button type="button" onclick="sendLandingPage('{{Crypt::encrypt($retrieved_data->id)}}');" class="btn btn-primary">Send</button>
					  </div>
					</div>
					</div>
					@endforeach
					@else 
						<strong>No data Available</strong>
					@endif
				</div>
                </div>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
   <div class="modal fade bd-example-modal-lg" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Share Emails with People</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="main_id" method="POST" action="{{route('send-email')}}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<input type="hidden" name="email_id" id="email_id">
            <div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Send With <span class="error">*</span></label>
					<input type="radio" name="for" value="1" checked onclick="changeUser(this.value);"> Group
					<input type="radio"  name="for" value="2" onclick="changeUser(this.value);"> Contacts
					<span class="error">{{$errors->first('for') }}</span>
				</div>
				
				<div class="form-group" id="hidegroup">
					<label for="exampleInputEmail1">Groups <span class="error">*</span></label>
					<select class="form-control form-control-sm" name="group" id="group">
					<option value="">select group</option>
					@foreach($group as $data)
						<option value="{{$data->id}}">{{$data->name}}</option>
					@endforeach
					</select>
					<span class="error">{{$errors->first('group')}}</span>
				</div>
				
				
				<div class="form-group" id="hideusers" style="display:none">
					<label for="exampleInputEmail1">Contacts <span class="error">*</span></label></br>
					<select class="select2 form-control form-control-sm" name="users[]" id="users" multiple="multiple" data-placeholder="select contacts">
					@foreach($address_book as $address_book_data)
						<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
					@endforeach
					</select>
					<span class="error">{{$errors->first('users')}}</span>
				</div>
				
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
	
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#emailtab').addClass('active');
CKEDITOR.replace( 'description' );

function changeUser(val){
	if(val == 1)
	{
		$('#hidegroup').show();
		$('#hideusers').hide();
	}
	else{
		$('#hidegroup').hide();
		$('#hideusers').show();
	}
}


function sendLandingPage(id)
{
	$('#email_id').val(id);   
	$('.select2').select2({
	});
	$('#modal-default').modal('show');
}
</script>
@endsection  
