 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/blog');?>">Blogs</a></li>
              <li class="breadcrumb-item active">Edit Blog</li>
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
                <h3 class="card-title">Edit Blog</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/blog/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{ $data->title }}">
						  <span class="error" id='title_error'>{{$errors->Blog->first('title')}}</span>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description"><?php echo $data->description;?></textarea>
						<span class="error" id='description_error'>{{$errors->Blog->first('description')}}</span>
					</div>
					
					<div class="col-md-4">
						<label for="exampleInputFile">Image<span class="error">*</span></label>
						<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
						<img class="mar-top-10 rp-img100" src="<?php echo url('/uploads/blog/'.$data->image);?>" id="blah"/ ></br>
						<span class="error" id='image_error'>{{$errors->Blog->first('image')}}</span>
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
  @include('admin.include.footer')
<script>
$('#blogtab').addClass('active');
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
	var description = CKEDITOR.instances.description.getData();
	var image = $('#image').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
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
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$(".note-frame").addClass("autofocous");
		}
	}
	
	
	regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
	if (image) {
		if (!(regex.test(image_1))) {
		   
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