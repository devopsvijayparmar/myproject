@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Address Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('address-book.index')}}">Address Book</a></li>
              <li class="breadcrumb-item active">Edit </li>
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
                <h3 class="card-title">Edit</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('address-book.update',App\Helpers\CryptHelper::encryptstring($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{$data->name}}">
							   <span class="error" id='name_error'>{{$errors->first('name')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Email <span class="error">*</span></label>
							  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" maxlength="255" value="{{$data->email}}">
							  <span class="error" id='email_error'>{{$errors->first('email')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Mobile <span class="error">*</span></label>
							  <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" maxlength="10" value="{{$data->mobile}}">
							 <span class="error" id='mobile_error'>{{$errors->first('mobile')}}</span>
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
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#address-book-tab').addClass('active');
</script>
@endsection