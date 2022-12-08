@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('service.index')}}">Service</a></li>
              <li class="breadcrumb-item active">Edit Service</li>
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
                <h3 class="card-title">Edit Service</h3>
              </div>
				<!-- /.card-header -->
			    <form id="main_id" method="POST" action="{{route('service.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Name <span class="error">*</span></label>
						<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{$data->name}}">
						<span class="error">{{$errors->first('name')}}</span>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{!!$data->description!!}</textarea>
						 <span class="error">{{$errors->first('description')}}</span>
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
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#servicetab').addClass('active');
CKEDITOR.replace('description');
</script>
@endsection