@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Books</h1>
          </div>
          <div class="col-sm-6">
			 <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('books.index')}}">Books</a></li>
              <li class="breadcrumb-item active">Edit Book</li>
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
                <h3 class="card-title">Edit Book</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('books.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Category <span class="error">*</span></label>
							  <select class="form-control" id="category" name="category_id">
								<option value="">select category</option>
								@foreach($category as $retrieved_data)
								<option @if($retrieved_data->id == $data->category_id) selected @endif value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
								@endforeach
							  </select>
							  <span class="error" id='category_error'>{{$errors->first('category_id')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{$data->name}}">
							  <span class="error" id='name_error'>{{$errors->first('name')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Author <span class="error">*</span></label>
							  <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" maxlength="255" value="{{$data->author}}">
							  <span class="error" id='author_error'>{{$errors->first('author')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Date Released <span class="error">*</span></label>
							  <input type="date" class="form-control" id="date_released" placeholder="Enter date released" name="date_released" value="{{$data->date_released}}">
							  <span class="error" id='date_released_error'>{{$errors->first('date_released')}}</span>
						</div>
						
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{!!$data->description!!}</textarea>
						<span class="error" id='description_error'>{{$errors->first('description')}}</span>
					</div>
					<div class="form-group mb-0">
						<div class="row">
							<div class="col-md-4">
								<label for="exampleInputFile">Image 1<span class="error">*</span></label>
								<input type="file" onchange="ValidateSize(this)" class="form-control" name="image_1" id="image_1">
								<img class="mar-top-10 rp-img100" src="{{$data->image_1}}" id="blah_1"/ ></br>
								<span class="error" id='image_1_error'>{{$errors->first('image_1')}}</span>
							</div>
							<div class="col-md-4">
								<label for="exampleInputFile">Image 2</label>
								<input type="file" onchange="ValidateSize(this)" class="form-control" name="image_2" id="image_2">
								<img class="mar-top-10 rp-img100" @if($data->image_2) src="{{$data->image_2}}" @endif id="blah_2"/ ></br>
								<span class="error" id='image_2_error'>{{$errors->first('image_2')}}</span>
							</div>
							<div class="col-md-4">
								<label for="exampleInputFile">Image 3</label>
								<input type="file" onchange="ValidateSize(this)" class="form-control" name="image_3" id="image_3">
								<img class="mar-top-10 rp-img100" @if($data->image_3) src="{{$data->image_3}}" @endif id="blah_3"/ ></br>
								<span class="error" id='image_3_error'>{{$errors->first('image_3')}}</span>
							</div>
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
{!! $validator->selector('#main_id') !!}
<script>
$('#bookstab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection
