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
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
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
			<div class="col-md-3">          
				<div class="card">
				<div class="card-body p-0">
				  <ul class="nav nav-pills flex-column vp-tab">
					<li class="nav-item">
					  <a style="color:#303e67!important;font-size: 14px;" href="{{route('user-settings')}}" class="nav-link">
						<i class="fas fa-sliders-h"></i> <strong>Home Slider</strong>
					  </a>
					</li>
					<li class="nav-item active">
					  <a style="color:#303e67!important;font-size: 14px;" href="{{route('change-password')}}" class="nav-link">
						<i class="fas fa-key"></i> <strong>Change Password</strong>
					  </a>
					</li>
					<li class="nav-item">
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
			 <div class="col-md-9">
            <div class="card card-primary card-outline">
            <div class="card-header" style="margin-bottom:10px">
              <h3 class="card-title"><strong>Change Password</strong></h3>
              <!-- /.card-tools -->
            </div>
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
             
              <div class="table-responsive mailbox-messages">
				<form id="main_id" method="POST" action="{{route('change-password.update')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
					
					<div class="form-group col-md-6">
					  <input type="password" class="form-control form-control-sm" name="current_password" id="current_password" placeholder="Current Password">
					  <span class="error">{{$errors->first('current_password')}}</span>
					</div>
					<div class="form-group col-md-6">
					 <input type="password" class="form-control form-control-sm" placeholder="New Password" name="new_password" id="new_password">
					  <span class="error">{{$errors->first('new_password')}}</span>
					</div>
					<div class="form-group col-md-6">
					  <input type="password" class="form-control form-control-sm" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm Password">
					  <span class="error" >{{$errors->first('confirm_new_password')}}</span>
					</div>
					  
					<div class="input-group mb-3 col-md-6">
						<button type="submit" class="btn btn-primary btn-sm">Change Password</button>
					</div>
				  </form>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            </div>
            <!-- /.card-body -->
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
$('#settings-tab').addClass('active');
</script>
@endsection