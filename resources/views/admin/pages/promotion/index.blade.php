@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Promotion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Promotion</li>
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
              <!-- form start -->
			   <form id="form" method="POST" action="{{route('promotion.update',0)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="form-group">
						
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">@if(isset($data->description)){!!$data->description!!}@endif</textarea>
						<span class="error" id='description_error'>{{$errors->first('description')}}</span>
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
{!!$validator->selector('#form')!!}
<script>
$('#promotion-tab').addClass('active');


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