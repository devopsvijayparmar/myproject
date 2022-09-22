@extends('admin.layouts.master')
@section('content')

@section('css')
 <link href="{{asset('dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css">
 <style>
 .dz-image img {
    width: 131px!important;
    height: 123px!important;
	}
 </style>
 @endsection
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
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
                <h3 class="card-title">Gallery</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('gallery.update',0)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
				
					<div class="card-body">
					<i class="nav-icon fas fa-align-justify"></i> <a href="{{route('gallery.show',0)}}">List View</a></br>
					<strong class="error">Note:</strong> <small> The image must be a file of type: jpeg, jpg, png</small> | <strong class="error">Limits:</strong> <small> 24</small>
					<div class="dropzone" id="dZUpload">
						<div class="dz-default dz-message">
							<p>Drag files here to upload.</p>
						</div>
						<span id="imageaapend"></span>
					</div>
                </div>
					<span class="error" id="image_error" ></span>
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
  <input type="hidden" id="remove_hint_image" name="remove_hint_image">
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('dropzone/min/dropzone.min.js')}}"></script>
<script>
$('#gallery-tab').addClass('active');

/*Dropzone Code*/
var oldimages = {{count($galleryarray)}};
var removeimage = [];
var existingImages = <?php if(count($galleryarray) > 0){  echo json_encode($galleryarray); } else { echo json_encode(array());}?>;
Dropzone.autoDiscover = false;
$('document').ready(function(){
	$("#dZUpload").dropzone({
		url: '{{route("upload-gallary")}}',
		maxFilesize: 2,
		maxFiles:24,
		acceptedFiles: ".png, .jpeg, .jpg , .PNG",
		addRemoveLinks: true,
		params: {
			_token: '{{csrf_token()}}'
		},
		success: function (file, response) {
			
			if(response.status == false){
				location.reload();
			}
			
			var imgName = response;
			console.log(response.url);
			var filename = file.name.split('.').slice(0, -1).join('.');
			var remove_space = filename.replace(/ /g,'');
			remove_space=  remove_space.replace(/[^-\w\s]/gi, '');
			$('#imageaapend').append('<input type="hidden" name="image[]" value="'+response.url+'" id="'+remove_space+'">');
			file.previewElement.classList.add("dz-success");
			console.log("Successfully uploaded :" + imgName+'response:'+response);
			$(':input[type="submit"]').prop('disabled', false);   
		}, error: function(file, message, xhr) {
			$(file.previewElement).remove();
		},init: function() { 
			myDropzoneNeww = this;
			cbr=0;
			this.on("sending", function(file, xhr, formData){
				$(':input[type="submit"]').prop('disabled', true); 
				var nrew =myDropzoneNeww.getAcceptedFiles().length;
				formData.append('nrew',nrew);
				var toda =myDropzoneNeww.getQueuedFiles().length;
				console.log(toda);
				
				if(toda ==0){
				}
				
			});
			var thisDropzone = this;
			this.on("sending", function(file, xhr, formData){
				var nrew =thisDropzone.getAcceptedFiles().length;
				formData.append('nrew',nrew);
			
			});
			
			this.on("removedfile", function(file) {
					var server_file = $(file.previewTemplate).children('.dz-image').children('img').attr('dataid');
				});
				
				this.on("error", function (file, message) {
				$('#image_error').html(message);
				this.removeFile(file);
			});	
			
			$.each(existingImages,function(i,v){
				var path = "{{url('uploads/gallery')}}/"+v;
				var mockFile = {name:v}
				var filename = v.split('.').slice(0, -1).join('.');
				thisDropzone.options.addedfile.call(thisDropzone, mockFile);

				thisDropzone.options.thumbnail.call(thisDropzone, mockFile, path);
				thisDropzone.options.complete.call(thisDropzone, mockFile);
				$('#imageaapend').append('<input type="hidden" name="image[]" value="'+v+'" id="'+filename+'">');
				
			});
		},
		removedfile: function(file) {
			var name = file.name;   
			var filename = file.name.split('.').slice(0, -1).join('.');
			var remove_space = filename.replace(/ /g,'');
			remove_space=  remove_space.replace(/[^-\w\s]/gi, '');
			var fileurl = $('#'+remove_space).val();
			
			$.ajax({
			async: false,
			global: false,
			url: "{{route('remove-image')}}",
			type: "POST",
			data: {fileurl: fileurl, _token: "{{csrf_token()}}"},
			success: function (response) {
				
			}
			});
		
			$('#'+remove_space).remove();
			var _ref;
			return (ref = file.previewElement) != null ? ref.parentNode.removeChild(file.previewElement) : void 0;
		}
	});
});	

</script>
@endsection  
 