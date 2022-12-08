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
              <li class="breadcrumb-item active">Add Event</li>
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
                <h3 class="card-title">Add Event</h3>
              </div>
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('event.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-12">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{old('title')}}">
							  <span class="error">{{$errors->first('title')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Start Date <span class="error">*</span></label>
							  <input type="date" class="form-control" id="start_date" placeholder="Enter start date" name="start_date" value="{{old('start_date')}}">
							  <span class="error">{{$errors->first('start_date')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">End Date <span class="error">*</span></label>
							  <input type="date" class="form-control" id="end_date" placeholder="Enter end date" name="end_date" value="{{old('end_date')}}">
							  <span class="error">{{$errors->first('end_date')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Location<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="location" name="location" placeholder="Enter Location">{{old('location')}}</textarea>
							<span class="error">{{$errors->first('location')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{{old('description')}}</textarea>
							<span class="error">{{$errors->first('description')}}</span>
						</div>
						<div class="form-group col-md-12">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" id="blah"/ ></br>
							<span class="error">{{$errors->first('image') }}</span>
						</div>
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
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#eventtab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection