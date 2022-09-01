 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Address Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/our-team') }}">Address Book</a></li>
              <li class="breadcrumb-item active">Edit Address </li>
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
                <h3 class="card-title">Edit Address </h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{url('/admin/address-book')}}/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" maxlength="255" value="{{ $data->name }}">
							  <span class="error" id='name_error'>{{$errors->address_book->first('name')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Email <span class="error">*</span></label>
							  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" maxlength="255" value="{{ $data->email }}">
							  <span class="error" id='email_error'>{{$errors->address_book->first('email')}}</span>
						</div>
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Mobile <span class="error">*</span></label>
							  <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" maxlength="10" value="{{ $data->mobile }}">
							  <span class="error" id='mobile_error'>{{$errors->address_book->first('mobile')}}</span>
						</div>
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
$('#address-book-tab').addClass('active');

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var name = $('#name').val();
	var email = $('#email').val();
	var mobile = $('#mobile').val();

	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#email_error').html("");
	$('#mobile_error').html("");
	
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
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
});
</script>