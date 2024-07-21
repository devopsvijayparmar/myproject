@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('landing-page.index')}}">Landing Page</a></li>
              <li class="breadcrumb-item active">Create Landing Page</li>
			  
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
                <h3 class="card-title">Create Landing Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('landing-page.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{ old('title') }}">
						   <span class="error" id="title_error">{{$errors->first('title')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL Name<span class="error">*</span></label>
						  <input type="text" class="url_name form-control" onkeyup="geturlname(this.value);" id="url_name" placeholder="Enter URL Name" name="url_name" maxlength="50" value="{{ old('url_name') }}">
						  <span class="error" id="url_name_error">{{$errors->first('url_name')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL<span class="error">*</span></label>
						  <input type="text" class="form-control" id="url" readonly value="{{$auth->title}}.{{config('enum.website')}}/landing-page/">
						  <span class="error" id="url_error">{{$errors->first('url')}}</span>
					</div>
					
					<div class="form-group">
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
						<span class="error" id='description_error'>{{$errors->first('description')}}</span>
					</div>	
					
                </div>
				<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
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
{!!$validator->selector('#main_id')!!}
<script>
$('#landing-page-tab').addClass('active');

function geturlname(urlname)
{
	var url = '{{$auth->title}}.{{config('enum.website')}}/landing-page/';
	$('#url').val(url+urlname);
}

$('#description').summernote({
	height: ($(window).height() - 300),
	callbacks: {
		onImageUpload: function(image) {
			uploadImage(image[0]);
		}
	}
});

function uploadImage(image) {
	var data = new FormData();
	data.append("image", image);
	data.append("_token", '{{csrf_token()}}');
	$.ajax({
		url: "{{route('upload-image')}}",
		cache: false,
		contentType: false,
		processData: false,
		data: data,
		type: "POST",
		success: function(url) {
			var image = $('<img>').attr('src', url);
			$('#description').summernote("insertNode", image[0]);
		},
		error: function(data) {
			console.log(data);
		}
	});
}
</script>
@endsection  
