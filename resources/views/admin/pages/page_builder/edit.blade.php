@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
			<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Page Builder</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{route('blog.index')}}">Page Builder</a></li>
						<li class="breadcrumb-item active">Edit Page</li>
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
                <h3 class="card-title">Edit Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('page-builder.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Page Title<span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter page title" name="title" maxlength="255" value="{{$data->title}}">
						  <span class="error">{{$errors->first('title')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Page Url Name <span class="error">*</span></label>
						  <input type="text" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" class="form-control" style='text-transform:lowercase' onkeypress="return onlyAlphabets(event, this);" onkeyup="geturlname(this.value);" id="url_name" placeholder="Enter Page URL Name" name="url_name" maxlength="255" value="{{$data->url_name}}">
						 <span class="error" id='url_name_error'>{{$errors->first('name')}}</span>
					</div>
					<div class="form-group">
						 <label for="exampleInputEmail1">URL<span class="error">*</span></label>
						  <input type="text" class="form-control" value="{{$data->url}}" id="url" readonly value="{{$auth->title}}.{{config('enum.website')}}/page/">
						  <span class="error" id="url">{{$errors->first('url')}}</span>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Content<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Content">{!!$data->description!!}</textarea>
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
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#pagebuildertab').addClass('active');

$('#description').summernote({
	height: ($(window).height() - 300),
	callbacks: {
		onImageUpload: function(image) {
			uploadImage(image[0]);
		}
	}
});
function geturlname(urlname)
{
	var url = '{{$auth->title}}.{{config('enum.website')}}/page/';
	$('#url').val(url+urlname);
}
$('#url_name').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
})


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