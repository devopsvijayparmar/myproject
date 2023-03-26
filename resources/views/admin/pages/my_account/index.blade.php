@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">My Account</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							
							
							<h5 style="margin-bottom:1px;"><strong>{{ Auth::user()->title }}</strong></h5>
							<p style="color:#303e67!important;margin-bottom:1px;font-size: 13px;"><strong>{{ Auth::user()->my_website }}</strong></p>
							<p style="font-size:13px;" class="text-muted"><strong>Domain</strong></p>
							<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
							<b><a target="_blank" style="color:#303e67!important;" href="{{route('user-settings')}}"><i class="nav-icon fas fa-sliders-h"></i> Settings</a></b> 
							</li>
							<li class="list-group-item">
							<b><a target="_blank" style="color:#303e67!important;" href="{{route('change-password')}}"><i class="fas fa-key"></i> Change Password</a></b>
							</li>
							<li class="list-group-item">
							<b><a target="_blank" style="color:#303e67!important;" href="{{ Auth::user()->my_website_link }}"><i class="fas fa-globe"></i> My Website</a></b>
							</li>
							<li class="list-group-item">
							<b><a target="_blank" style="color:#303e67!important;" href="{{url('/pricing')}}"><i class="fas fa-tags"></i> Pricing</a></b>
							</li>
							<li class="list-group-item">
							<b><a target="_blank" style="color:#303e67!important;" href="{{url('/')}}"><i class="fas fa-globe"></i> www.websphare.com</a></b>
							</li>
							</ul>
							
						</div>
					</div>
				</div>

				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							 <div class="table-responsive mailbox-messages">
								<form id="main_id" method="POST" action="{{route('my-account-update')}}" enctype="multipart/form-data">
								@method('POST')
								@csrf
									
									<div class="form-group col-md-8">
										<label for="exampleInputEmail1">Website</label>
										<input type="text" disabled class="form-control form-control-sm no-drop" value="{{ Auth::user()->site_name }}">
									</div>
									<div class="form-group col-md-8">
										<label for="exampleInputEmail1">Site Name / Domain </label>
										<input type="text" disabled class="form-control form-control-sm no-drop" value="{{ Auth::user()->title }}">
									</div>
									
									<div class="form-group col-md-8">
										<label for="exampleInputEmail1">Company Name <span class="error">*</span></label>
										<input type="text" class="form-control form-control-sm" name="name" value="{{ Auth::user()->name }}">
										<span class="error">{{$errors->first('name')}}</span>
									</div>
									
									<div class="form-group col-md-8">
										<label for="exampleInputEmail1">Company Email </label>
										<input type="text" disabled class="form-control form-control-sm no-drop" value="{{ Auth::user()->email }}">
									</div>
									  
									<div class="input-group mb-3 col-md-6">
										<button type="submit" class="btn btn-primary btn-sm">Update</button>
									</div>
								  </form>
								<!-- /.table -->
							  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  </div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script>

</script>
@endsection