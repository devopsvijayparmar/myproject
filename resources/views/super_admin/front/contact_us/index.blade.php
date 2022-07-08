@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Contact us </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item">Contact Us</li>
             
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
				<form id="main_id" method="POST" action="{{ url('super-admin/contact-us/0') }}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Email <span class="error">*</span></label>
							<input type="text" class="form-control" maxlength="100" id="email" placeholder="Enter Email" name="email" maxlength="255" value="<?php if(isset($data->email)) { echo $data->email;} ?>">
							<span class="error" id='email_error'>{{$errors->ConactUs->first('email')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Conact No 1<span class="error">*</span></label>
							<input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="contact_1" maxlength="10" placeholder="Enter Conact No" name="contact_1" maxlength="255" value="<?php if(isset($data->contact_1)) { echo $data->contact_1;} ?>">
							<span class="error" id='contact_1_error'>{{$errors->ConactUs->first('contact_1')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Conact No 2<span class="error">*</span></label>
							<input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="contact_2" maxlength="10" placeholder="Enter Conact No" name="contact_2" maxlength="255" value="<?php if(isset($data->contact_2)) { echo $data->contact_2;} ?>">
							<span class="error" id='contact_2_error'>{{$errors->ConactUs->first('contact_2')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Address<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address"><?php if(isset($data->address)) { echo $data->address;} ?></textarea>
							<span class="error" id='address_error'>{{$errors->ConactUs->first('address')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Facebook</label>
							<input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook" maxlength="600" value="<?php if(isset($data->facebook)) { echo $data->facebook;} ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Twitter</label>
							<input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter" maxlength="600" value="<?php if(isset($data->twitter)) { echo $data->twitter;} ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Instagram</label>
							<input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram" maxlength="600" value="<?php if(isset($data->instagram)) { echo $data->instagram;} ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Linkedin</label>
							<input type="text" class="form-control" id="linkedin" placeholder="Linkedin" name="linkedin" maxlength="600" value="<?php if(isset($data->linkedin)) { echo $data->linkedin;} ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Youtube</label>
							<input type="text" class="form-control" id="youtube" placeholder="Youtube" name="youtube" maxlength="600" value="<?php if(isset($data->youtube)) { echo $data->youtube;} ?>">
						</div>
						
					</div>
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

  $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var email = $('#email').val();
	var contact_1 = $('#contact_1').val();
	var contact_2 = $('#contact_2').val();
	var address = $('#address').val();
	
	
	var cnt = 0;
	var f = 0;
	
	
	$('#email_error').html("");
	$('#contact_1_error').html("");
	$('#contact_2_error').html("");
	$('#address_error').html("");
	
   function ValidateEmail(email) {
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	return expr.test(email);
	};
   
	if (email.trim() == '') {
		$('#email_error').html("Please enter Email");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		}
	}
	if(email)
	{
		if (!ValidateEmail(email)) {
			$('#email_error').html("Please enter Valid Email");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#email').focus();
			}
		}
	}
	if (contact_1.trim() == '') {
		$('#contact_1_error').html("Please enter Contact");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#contact_1').focus();
		}
	}
	if (contact_2.trim() == '') {
		$('#contact_2_error').html("Please enter Contact");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#contact_2').focus();
		}
		
	}
	if (address.trim() == '') {
		$('#address_error').html("Please enter Address");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#address').focus();
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