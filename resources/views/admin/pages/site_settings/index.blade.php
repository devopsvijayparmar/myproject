@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
		   <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-3">
          

          <div class="card">
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column vp-tab">
                <li class="nav-item">
                  <a style="color:#303e67!important;font-size: 14px;" href="{{route('user-settings')}}" class="nav-link">
                    <i class="fas fa-sliders-h"></i> <strong>Home Slider</strong>
                  </a>
                </li>
                <li class="nav-item">
                  <a style="color:#303e67!important;font-size: 14px;" href="{{route('change-password')}}" class="nav-link">
                    <i class="fas fa-key"></i> <strong>Change Password</strong>
                  </a>
                </li>
                <li class="nav-item active">
                  <a style="color:#303e67!important;font-size: 14px;" href="{{route('site-settings.index')}}" class="nav-link">
                    <i class="fas fa-cog"></i> <strong>Site Settings</strong>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
           
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="card-footer bg-white">
			 
			  <form id="main_id" method="POST" action="{{route('site-settings.update',0)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="form-group col-md-6" style="padding-left: 0;">
				 <label for="exampleInputEmail1">Site Title</label>
				  <input type="text" class="form-control form-control-sm" id="title" placeholder="Enter title" name="title" maxlength="255" value="@if(isset($data->title)) {{ $data->title }}@endif">
				  <span class="error" id="title_error"></span>
				</div>
				
				  <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
				   
					<li style="width: 210px!important;">
					  <span class="mailbox-attachment-icon has-img"><img id="blah" src="@if(isset($data->site_logo)) {{ $data->site_logo }}@endif" class="rp-img-setting"></span>

					  <div class="mailbox-attachment-info">
						<a style="font-size: 14px;" href="javascript:void(0)"  class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Site Logo</a>
							<span class="mailbox-attachment-size clearfix mt-1">
							<div class="btn btn-default btn-file">
							<i class="fas fa-camera"></i> Choose File
							<input type="file" onchange="ValidateSize(this)" name="site_logo" id="site_logo" >
							</div>
							</span>
					  </div>
					   <span class="error" id="site_logo_error"></span>
					</li>
					<li style="width: 210px!important;">
					  <span class="mailbox-attachment-icon has-img"><img id="blah1" src="@if(isset($data->fav_icon)) {{ $data->fav_icon }}@endif"  class="rp-img-setting"></span>

					  <div class="mailbox-attachment-info">
						<a style="font-size: 14px;" href="javascript:void(0)" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Fav Icon</a>
							<span class="mailbox-attachment-size clearfix mt-1">
							
							 <div class="btn btn-default btn-file">
							<i class="fas fa-camera"></i> Choose File
							 <input type="file" onchange="ValidateSize(this)" name="fav_icon" id="fav_icon">
							</div>
							</span>
					  </div>
					    <span class="error" id="fav_icon_error"></span>
					</li>
				  </ul>
				  <div class="form-group col-md-6" style="padding-left: 0;">
						 <label for="exampleInputEmail1">Preferred Currency <span class="error">*</span></label>
						  <select class="form-control" id="currency_id" name="currency_id">
							<option value="">Select Currency</option>
							@foreach($currency as $retrieved_data)
							<option @if(isset($data->currency_id)) @if($data->currency_id == $retrieved_data->id) selected @endif @endif value="{{$retrieved_data->id}}">{{$retrieved_data->name}}({{$retrieved_data->code}})</option>
							@endforeach
						  </select>
						  <span class="error" id='category_id_error'>{{$errors->Products->first('name')}}</span>
					</div>
				   <button type="submit" class="btn btn-primary">Update</button>
				  </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#settings-tab').addClass('active');

function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#site_logo").change(function() {
  readURL(this);
});


function readURL1(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah1').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#fav_icon").change(function() {
  readURL1(this);
});

</script>
@endsection 
 