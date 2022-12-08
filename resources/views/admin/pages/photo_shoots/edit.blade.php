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
				<li class="breadcrumb-item active">Edit Photos</li>
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
                <h3 class="card-title">Edit Photos</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('photo-shoots.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Category <span class="error">*</span></label>
							  <select onchange="getType(this.value);" class="form-control" id="category_id" name="category_id">
								<option value="">select category</option>
								@foreach($category as $retrieved_data)
								<option @if($retrieved_data->id == $data->category_id) selected @endif value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
								@endforeach
							  </select>
							  <span class="error">{{$errors->first('category_id')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{ $data->name }}">
							  <span class="error">{{$errors->first('name')}}</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-4">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" src="{{$data->image}}" id="blah"/ ></br>
							<span class="error">{{$errors->first('image') }}</span>
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
$('#photoshoottab').addClass('active');
CKEDITOR.replace( 'description' );
</script>
@endsection