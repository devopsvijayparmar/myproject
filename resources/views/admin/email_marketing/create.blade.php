 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email Marketing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/email-marketing');?>">Email Marketing</a></li>
              <li class="breadcrumb-item active">Add Email</li>
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
                <h3 class="card-title">Add Email</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/email-marketing" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Subject <span class="error">*</span></label>
						  <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" maxlength="255" value="{{ old('subject') }}">
						  <span class="error" id='subject_error'>{{$errors->Email->first('subject')}}</span>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="email" name="email">	{{ old('email') }}</textarea>
						<span class="error" id='email_error'>{{$errors->Email->first('email')}}</span>
					</div>
					
					
				<div class="form-group">
				 <p>User Name: <?php echo "{{USER_NAME}}";?></p>
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
$('#emailtab').addClass('active');

CKEDITOR.replace('email');

$('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var subject = $('#subject').val();
	var email = CKEDITOR.instances.email.getData();
	
	var cnt = 0;
	var f = 0;
	
	$('#subject_error').html("");
	$('#email_error').html("");
	$('.note-frame').removeClass("autofocous");
	
	if (subject.trim() == '') {
		$('#subject_error').html("Please enter Subject");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#subject').focus();
		}
	}
	if (email.trim() == '') {
		$('#email_error').html("Please enter Description");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$(".note-frame").addClass("autofocous");
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