 @extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Contact Us</li>
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
                <h3 class="card-title">Contact Us</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('contact-us.update',1)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Email <span class="error">*</span></label>
							<input type="text" class="form-control" maxlength="255" id="email" placeholder="Enter Email" name="email" maxlength="255" value="@if(isset($data->email)){{$data->email}}@endif">
							<span class="error">{{$errors->first('email')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Conact No 1<span class="error">*</span></label>
							<input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="contact_1" maxlength="10" placeholder="Enter Conact No" name="contact_1" maxlength="255" value="@if(isset($data->contact_1)){{ $data->contact_1}}@endif">
							<span class="error" id='contact_1_error'>{{$errors->first('contact_1')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Conact No 2<span class="error">*</span></label>
							<input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="contact_2" maxlength="10" placeholder="Enter Conact No" name="contact_2" maxlength="255" value="@if(isset($data->contact_2)){{$data->contact_2}}@endif">
							<span class="error">{{$errors->first('contact_2')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Address<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address">@if(isset($data->address)){{$data->address}}@endif</textarea>
							<span class="error" id='address_error'>{{$errors->first('address')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Facebook</label>
							<input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook" maxlength="600" value="@if(isset($data->facebook)){{$data->facebook}}@endif">
							{{$errors->first('facebook')}}
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Twitter</label>
							<input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter" maxlength="600" value="@if(isset($data->twitter)){{ $data->twitter}}@endif">
							{{$errors->first('twitter')}}
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Instagram</label>
							<input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram" maxlength="600" value="@if(isset($data->instagram)){{$data->instagram}}@endif">
							{{$errors->first('instagram')}}
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Linkedin</label>
							<input type="text" class="form-control" id="linkedin" placeholder="Linkedin" name="linkedin" maxlength="600" value="@if(isset($data->linkedin)){{$data->linkedin}}@endif">
							{{$errors->first('linkedin')}}
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
$('#contact-us-tab').addClass('active');
</script>
@endsection