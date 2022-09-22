 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/projects');?>">Projects</a></li>
              <li class="breadcrumb-item active">Add Project</li>
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
                <h3 class="card-title">Add Project</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/projects" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-4">
							 <label for="exampleInputEmail1">Project Type <span class="error">*</span></label>
							  <select class="form-control" id="project_type" name="project_type_fk">
								<option value="">select project type</option>
								<?php foreach($project_types as $retrieved_data) { ?>
								<option value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
								<?php } ?>
							  </select>
							  <span class="error" id='category_error'>{{$errors->projects->first('name')}}</span>
						</div>
						<div class="form-group col-md-4">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{ old('name') }}">
							  <span class="error" id='name_error'>{{$errors->projects->first('name')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">	{{ old('description') }}</textarea>
						<span class="error" id='description_error'>{{$errors->projects->first('description')}}</span>
					</div>
					<div class="form-group mb-0">
						<div class="row">
							<div class="col-md-4">
								<label for="exampleInputFile">Image 1<span class="error">*</span></label>
								<input type="file" onchange="ValidateSize(this)" class="form-control" name="image_1" id="image_1">
								<img class="mar-top-10 rp-img100" id="blah_1"/ ></br>
								<span class="error" id='image_1_error'>{{$errors->projects->first('image_1')}}</span>
							</div>
							<div class="col-md-4">
								<label for="exampleInputFile">Image 2</label>
								<input type="file" class="form-control" name="image_2" id="image_2">
								<img class="mar-top-10 rp-img100" id="blah_2"/ ></br>
								<span class="error" id='image_2_error'>{{$errors->projects->first('image_2')}}</span>
							</div>
							<div class="col-md-4">
								<label for="exampleInputFile">Image 3</label>
								<input type="file" class="form-control" name="image_3" id="image_3">
								<img class="mar-top-10 rp-img100" id="blah_3"/ ></br>
								<span class="error" id='image_3_error'>{{$errors->projects->first('image_3')}}</span>
							</div>
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
$('#projecttab').addClass('active');

CKEDITOR.replace( 'description' );
/*Image 1 read url*/
function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah_1').css({
			height: '100px',
			width: '100px'
		});
		$('#blah_1').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image_1").change(function() {
  readURL(this);
});
/*Image 1 read url*/


/*Image 2 read url*/

function readURL_2(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah_2').css({
			height: '100px',
			width: '100px'
		});
		$('#blah_2').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image_2").change(function() {
  readURL_2(this);
});
/*Image 2 read url*/

/*Image 3 read url*/
function readURL_3(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah_3').css({
			height: '100px',
			width: '100px'
		});
		$('#blah_3').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image_3").change(function() {
  readURL_3(this);
});
/*Image 3 read url*/


  function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB

        if (FileSize > 2) {
            alert('File size exceeds 2 MB');
        } else {

        }
    }
  
   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var name = $('#name').val();
	var project_type = $('#project_type').val();
	var description = CKEDITOR.instances.description.getData();
	var image_1 = $('#image_1').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#project_type_error').html("");
	$('#description_error').html("");
	$('#image_1_error').html("");
	$('#project_type').removeClass("autofocous");
	$('.note-frame').removeClass("autofocous");
	$('#image_1').removeClass("autofocous");

   if (project_type.trim() == '') {
		$('#project_type_error').html("Please select Project Type");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$("#project_type").addClass("autofocous");
			
		}
	}
	if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
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
	if (image_1.trim() == '') {
		$('#image_1_error').html("Please select Image");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$("#image_1").addClass("autofocous");
		}
	}
	
	regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
	if (image_1) {
		if (!(regex.test(image_1))) {
		   
		  $('#image_1_error').html("Only JPG, PNG and JPEG image are allowed");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$("#image_1").addClass("autofocous");
			}
		}
	}
	
	if (image_1) {
		var file_size = $('#image_1')[0].files[0].size;
		if(file_size>2097152) {
			$("#image_1_error").html("File size exceeds 2 MB");
			$("#image_1").addClass("autofocous");
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