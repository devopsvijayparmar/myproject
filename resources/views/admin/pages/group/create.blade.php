@extends('admin.layouts.master')
@section('content')
@section('css')
<style src="{{asset('vendor/multiselect/dist/js/bootstrap-multiselect.css')}}"></style>
 <style>
   .btn-group, .btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
    width: 100%;
}
.custom-select{
	text-align: left!important;
}
.dropdown-menu.show {
    max-height: 300px;
    overflow: auto;
    top: 100% !important;
	min-width: 100%!important;
}
 </style>
@endsection
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
			  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('group.index')}}">Group</a></li>
              <li class="breadcrumb-item active">Create Group</li>
			  
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
                <h3 class="card-title">Create Group</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('group.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="form-group col-md-6">
						 <label for="exampleInputEmail1">Group Name <span class="error">*</span></label>
						  <input type="text" class="form-control" id="name" placeholder="Group Name" name="name" maxlength="255" value="{{ old('name') }}">
						  <span class="error">{{$errors->first('name')}}</span>
					</div>
					
					<div class="form-group col-md-6">
						 <label for="exampleInputEmail1">For <span class="error">*</span></label>
						   <input type="radio" name="for" value="1" checked onclick="changeuser();"> Custom
						  <input type="radio"  name="for" value="2" onclick="changeuser();"> All
						  <span class="error">{{$errors->first('for')}}</span>
					</div>
					
					<div class="form-group col-md-6" id="userdiv">
						<label for="exampleInputEmail1">Contacts <span class="error">*</span></label>
					    <select class="form-control" name="users[]" id="users" multiple="multiple" data-placeholder="Select Contacts" style="display:none;">
						@foreach($address_book as $address_book_data)
							<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
						@endforeach
						</select>
						<span class="error">{{$errors->first('users')}}</span>
					</div>
					
                </div>
				<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				</form>
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
  <!-- /.content-wrapper -->
  
@endsection
@section('script')
<script src="{{asset('vendor/multiselect/dist/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#grouptab').addClass('active');

function changeuser()
{
   var fortype = $("input[name='for']:checked").val();
   if(fortype == 2)
   {
	   $('#userdiv').hide();
   }
   else{
	   $('#userdiv').show();
   }
}

$('#users').multiselect({
enableFiltering: true,
includeSelectAllOption: true
});
</script>
@endsection  
