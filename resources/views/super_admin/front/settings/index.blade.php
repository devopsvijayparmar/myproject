@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Settings </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item">Settings</li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
			<div class="card">
				<form id="main_id" method="POST" action="{{ url('super-admin/settings/0') }}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="card-body">
					<div class="form-group col-md-6">
						<label for="exampleInputEmail1">Title</label>
						<input type="text" class="form-control" id="title" placeholder="Title" name="title" maxlength="600" value="<?php if(isset($data->title)) { echo $data->title;} ?>">
						<span class="error" id='title_error'>{{$errors->ConactUs->first('title')}}</span>
					</div>
					 <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
				   
					<li style="width: 254px!important;">
					  <span class="mailbox-attachment-icon has-img"><img id="blah" src="@if(isset($data->site_logo)) {{ $data->site_logo }}@endif" class="rp-img-setting"></span>

					  <div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Site Logo</a>
							<span class="mailbox-attachment-size clearfix mt-1">
							<div class="btn btn-default btn-file">
							<i class="fas fa-camera"></i> Choose File
							<input type="file" onchange="ValidateSize(this)" name="site_logo" id="site_logo" >
							</div>
							</span>
					  </div>
					   <span class="error" id="site_logo_error"></span>
					</li>
					<li style="width: 254px!important;">
					  <span class="mailbox-attachment-icon has-img"><img id="blah1" src="@if(isset($data->fav_icon)) {{ $data->fav_icon }}@endif"  class="rp-img-setting"></span>

					  <div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Fav Icon</a>
							<span class="mailbox-attachment-size clearfix mt-1">
							
							 <div class="btn btn-default btn-file">
							<i class="fas fa-camera"></i> Choose File
							 <input type="file" onchange="ValidateSize(this)" name="fav_icon" id="fav_icon">
							</div>
							</span>
					  </div>
					    <span class="error" id="fav_icon_error"></span>
					</li>
				  </ul>
					
				</div>
				<div class="card-footer">
				  <button type="submit" class="btn btn-primary">Update</button>
				</div>
				</form>
			</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('super_admin.include.footer')
  <script>
$('#frontendetab').addClass('active');

 CKEDITOR.replace( 'description' );


function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#site_logo").change(function() {
  readURL(this);
});


function readURL1(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah1').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#fav_icon").change(function() {
  readURL1(this);
});


   $('#main_id').submit(function (e) {
	   
	
	$(':input[type="submit"]').prop('disabled', true); 
	var title_error = $('#title');
	var logo = $('#logo').val();
	
	var cnt = 0;
	
	
	$('#title_error').html("");
	$('#logo_error').html("");
	
   
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
		cnt = 1;
	}
	
	regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
	if (logo) {
		if (!(regex.test(logo))) {
		   
		  $('#logo_error').html("Only JPG, PNG and JPEG image are allowed");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$("#logo").addClass("autofocous");
			}
		}
	}
	
	if (logo) {
		var file_size = $('#logo')[0].files[0].size;
		if(file_size>2097152) {
			$("#logo_error").html("File size exceeds 2 MB");
			$("#logo").addClass("autofocous");
			cnt = 1;
		} 
	}
	
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false); 
		return false;
	} else {
		return true;
	}
});
</script>