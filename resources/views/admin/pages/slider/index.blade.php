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
                <li class="nav-item active">
                  <a style="color:#303e67!important;font-size: 14px;" href="{{route('user-settings')}}" class="nav-link">
                    <i class="fas fa-sliders-h"></i> <strong>Home Slider</strong>
                   
                  </a>
                </li>
                <li class="nav-item">
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
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Home Slider</h3>
             <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">Add</button>
            
              <!-- /.card-tools -->
            </div>
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="card-body table-responsive">
             
				@include('admin.include.table')
                
              </div>
              <!-- /.mail-box-messages -->
            </div>
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
  
  
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
			<form id="main_id" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
			@method('POST')
			@csrf
            <div class="modal-body">
				<div class="form-group">
					<label for="exampleInputFile">Image<span class="error">*</span></label>
					<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
					<img class="mar-top-10 rp-img100" id="blah"/ ></br>
					<span class="error" id='image_error'>{{$errors->Slider->first('image')}}</span>
				</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
	  
	<div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" id="append">
		</div>
	</div>
  
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
@include('admin.include.table_script')
<script>
$('#settings-tab').addClass('active');
function functionedit(id) 
{ 
	$.ajax({
		url: "<?php echo URL::to('/'); ?>/admin/slider/"+id+"/edit",
		type: "GET",
		success: function (response) {
			$('#append').html(response);
			$('#exampleModaledit').modal('show');
		}
	});
}
</script>
@endsection 