@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Photo Shoots</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{route('photo-shoots.index')}}">Photo Shoots</a></li>
				<li class="breadcrumb-item active">Add Photos</li>
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
                <h3 class="card-title">Add Photos</h3>
              </div>
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('photo-shoots.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Category <span class="error">*</span></label>
							<select class="form-control" id="category" name="category_id" onchange="getType(this.value)">
								<option value="">select category</option>
								@foreach($category as $retrieved_data)
								<option value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
								@endforeach
							</select>
							<span class="error">{{$errors->first('category_id')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{ old('name') }}">
							  <span class="error">{{$errors->first('name')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Image<span class="error">*</span></label>
						<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
						<img class="mar-top-10 rp-img100" id="blah"/ ></br>
						<span class="error" id='image_error'>{{$errors->first('image')}}</span>
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
$('#photoshoottab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection  
