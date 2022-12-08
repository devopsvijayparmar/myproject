@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('event.index')}}">Events</a></li>
              <li class="breadcrumb-item active">Edit Event</li>
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
                <h3 class="card-title">Edit Event</h3>
              </div>
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('event.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
				<div class="row">	
					<div class="form-group col-md-12">
						 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{$data->title}}">
						  <span class="error">{{$errors->first('title')}}</span>
					</div>
				
					<div class="form-group col-md-6">
						 <label for="exampleInputEmail1">Start Date <span class="error">*</span></label>
						  <input type="date" class="form-control" id="start_date" placeholder="Enter start date" name="start_date" maxlength="255" value="{{$data->start_date}}">
						  <span class="error">{{$errors->first('start_date')}}</span>
					</div>
					
					<div class="form-group col-md-6">
						 <label for="exampleInputEmail1">End Date <span class="error">*</span></label>
						  <input type="date" class="form-control" id="end_date" placeholder="Enter end date" name="end_date" maxlength="255" value="{{$data->end_date}}">
						   <span class="error">{{$errors->first('end_date')}}</span>
					</div>
					
					<div class="form-group col-md-12">
						<label for="exampleInputEmail1">Location<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="location" name="location" placeholder="Enter Location">{!!$data->location!!}</textarea>
						 <span class="error">{{$errors->first('location')}}</span>
					</div>
					
					<div class="form-group col-md-12">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{!!$data->description!!}</textarea>
						 <span class="error">{{$errors->first('description')}}</span>
					</div>
					
					<div class="col-md-4">
						<label for="exampleInputFile">Image<span class="error">*</span></label>
						<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
						<img class="mar-top-10 rp-img100" src="{{$data->image}}" id="blah"/ ></br>
						 <span class="error">{{$errors->first('image')}}</span>
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
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
{!!$validator->selector('#main_id')!!}
<script>
$('#eventtab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection 
 