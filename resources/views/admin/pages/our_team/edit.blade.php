@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Our Teams</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{route('our-team.index')}}">Our Teams</a></li>
			<li class="breadcrumb-item active">Edit Employee</li>
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
                <h3 class="card-title">Edit Employee</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('our-team.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{ $data->name }}">
							  <span class="error">{{$errors->first('name')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Email <span class="error">*</span></label>
							  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" maxlength="255" value="{{ $data->email }}">
							   <span class="error">{{$errors->first('email')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Mobile <span class="error">*</span></label>
							  <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" maxlength="12" value="{{ $data->mobile }}">
							   <span class="error">{{$errors->first('mobile')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Address</label>
							  <textarea class="form-control" id="address" placeholder="Enter address" name="address">{{ $data->address }}</textarea>
							   <span class="error">{{$errors->first('address')}}</span>
						</div>
						<div class="col-md-4">
						<label for="exampleInputFile">Image<span class="error">*</span></label>
						<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
						<img class="mar-top-10 rp-img100" src="{{$data->image_url}}" id="blah"/ ></br>
						<span class="error">{{$errors->first('image') }}</span>
					</div>	
					</div>
                </div>
				<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#our_teamtab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection