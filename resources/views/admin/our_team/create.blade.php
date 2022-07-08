 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Our Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/our-team');?>">Our Team</a></li>
              <li class="breadcrumb-item active">Add Team</li>
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
                <h3 class="card-title">Add Team</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/our-team" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255">
							  <span class="error" id='name_error'>{{$errors->Our_Team->first('name')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Email <span class="error">*</span></label>
							  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" maxlength="255">
							  <span class="error" id='email_error'>{{$errors->Our_Team->first('email')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Mobile <span class="error">*</span></label>
							  <input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" maxlength="10">
							  <span class="error" id='mobile_error'>{{$errors->Our_Team->first('mobile')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Address</label>
							  <textarea class="form-control" id="address" placeholder="Enter address" name="address"></textarea>
							  
						</div>
						<div class="form-group col-md-6">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->Our_Team->first('image')}}</span>
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
$('#our_teamtab').addClass('active');


function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

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


  $(function () {
	$('#example2').DataTable({
	  "paging": true,
	  "lengthChange": false,
	  "searching": false,
	  "ordering": true,
	  "info": true,
	  "autoWidth": false,
	});
  });


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
	var email = $('#email').val();
	var mobile = $('#mobile').val();
	var image = $('#image').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#email_error').html("");
	$('#mobile_error').html("");
	$('#image_error').html("");
	$('#image').removeClass("autofocous");

   if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
			
		}
	}
	if (email.trim() == '') {
		$('#email_error').html("Please enter Email");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		}
	}
	if (mobile.trim() == '') {
		$('#mobile_error').html("Please enter Mobile");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#mobile').focus();
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