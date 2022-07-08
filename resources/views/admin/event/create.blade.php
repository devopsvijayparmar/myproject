 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/event');?>">Event</a></li>
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
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/event" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-12">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{ old('title') }}">
							  <span class="error" id='title_error'>{{$errors->Event->first('title')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Start Date <span class="error">*</span></label>
							  <input type="date" class="form-control" id="start_date" placeholder="Enter start date" name="start_date" maxlength="255" value="{{ old('start_date') }}">
							  <span class="error" id='start_date_error'>{{$errors->Event->first('start_date')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">End Date <span class="error">*</span></label>
							  <input type="date" class="form-control" id="end_date" placeholder="Enter end date" name="end_date" maxlength="255" value="{{ old('end_date') }}">
							  <span class="error" id='end_date_error'>{{$errors->Event->first('end_date')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Location<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="location" name="location" placeholder="Enter Location">	{{ old('location') }}</textarea>
							<span class="error" id='location_error'>{{$errors->Event->first('location')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">	{{ old('description') }}</textarea>
							<span class="error" id='description_error'>{{$errors->Event->first('description')}}</span>
						</div>
						<div class="form-group col-md-12">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->Event->first('image')}}</span>
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
  <!-- /.content-wrapper -->
  @include('admin.include.footer')
<script>
$('#eventtab').addClass('active');

CKEDITOR.replace( 'description' );
/*Image 1 read url*/
function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah').css({
			height: '100px',
			width: '100px'
		});
		$('#blah').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image").change(function() {
  readURL(this);
});
/*Image 1 read url*/

  function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB

        if (FileSize > 2) {
            alert('File size exceeds 2 MB');
        } else {

        }
    }
  
   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var title = $('#title').val();
	var start_date = $('#start_date').val();
	var end_date = $('#end_date').val();
	var location = $('#location').val();
	var description = CKEDITOR.instances.description.getData();
	var image = $('#image').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
	$('#start_date_error').html("");
	$('#end_date_error').html("");
	$('#location_error').html("");
	$('#description_error').html("");
	$('#image_error').html("");
	$('.note-frame').removeClass("autofocous");
	$('#image').removeClass("autofocous");

  
	if (title.trim() == '') {
		$('#title_error').html("Please enter Title");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	if (start_date.trim() == '') {
		$('#start_date_error').html("Please select Start Date");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#start_date').focus();
		}
	}
	if (end_date.trim() == '') {
		$('#end_date_error').html("Please select end Date");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#end_date').focus();
		}
	}
	if (location.trim() == '') {
		$('#location_error').html("Please enter Location");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#location').focus();
		}
	}
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$(".note-frame").addClass("autofocous");
		}
	}
	if (image.trim() == '') {
		$('#image_error').html("Please select Image");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$("#image").addClass("autofocous");
		}
	}
	
	regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
	if (image) {
		if (!(regex.test(image))) {
		   
		  $('#image_error').html("Only JPG, PNG and JPEG image are allowed");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$("#image").addClass("autofocous");
			}
		}
	}
	
	if (image) {
		var file_size = $('#image')[0].files[0].size;
		if(file_size>2097152) {
			$("#image_error").html("File size exceeds 2 MB");
			$("#image").addClass("autofocous");
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