 @include('admin.include.header')
  <style>
  .timeline::before {
    border-radius: none!important;
    background: none!important;
    bottom: 0;
    left: 31px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 4px;
}
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-3">
          

          <div class="card">
            
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column vp-tab">
                <li class="nav-item">
                  <a href="<?php echo URL::to('/')?>/admin/settings" class="nav-link">
                    <i class="fas fa-sliders-h"></i> Home Slider
                   
                  </a>
                </li>
                <li class="nav-item active">
                  <a href="<?php echo URL::to('/')?>/admin/change-password" class="nav-link">
                    <i class="fas fa-key"></i> Change Password
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo URL::to('/')?>/admin/site-settings" class="nav-link">
                    <i class="fas fa-cog"></i> Site Settings
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
            <div class="card-header" style="margin-bottom:10px">
              <h3 class="card-title">Change Password</h3>
              <!-- /.card-tools -->
            </div>
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
             
              <div class="table-responsive mailbox-messages">
				  <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/change-password" enctype="multipart/form-data">
				@method('POST')
				@csrf
					
					<div class="form-group col-md-6">
					  <input type="password" class="form-control form-control-sm" name="old_password" id="old_password" placeholder="Old Password">
					  <span class="error" id='old_password_error'>{{$errors->Changepassword->first('old_password')}}{{ Session::get('notmatchpassword') }}</span>
					</div>
					<div class="form-group col-md-6">
					 <input type="password" class="form-control form-control-sm" placeholder="New Password" name="new_password" id="new_password">
					  <span class="error" id='new_password_error'>{{$errors->Changepassword->first('new_password')}}</span>
					</div>
					<div class="form-group col-md-6">
					  <input type="password" class="form-control form-control-sm" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
					  <span class="error" id='confirm_password_error'>{{$errors->Changepassword->first('confirm_password')}}</span>
					</div>
					  
					<div class="input-group mb-3 col-md-6">
						<button type="button" id="submitform" onclick="checkvalidation();" class="btn btn-primary btn-sm">Change Password</button>
					</div>
				  </form>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  @include('admin.include.footer')

<script>
$('#settings-tab').addClass('active');

function checkvalidation()
{
		var password = $('#old_password').val();
	    var new_password = $('#new_password').val();
        var confirm_password = $('#confirm_password').val();
		
		$('#new_password_error').html('');
		$('#confirm_password_error').html('');
		$('#old_password_error').html('');
		
		var cnt = 0;
		
		if (password.trim() == '') {
			$('#old_password_error').html("Please enter old Password");
			$('#submitform').prop('disabled', false);
			return false;
		}
		
		$.ajax({
			async: false,
			global: false,
			url: "<?php echo URL::to('/'); ?>/admin/checkoldpassword",
			type: "POST",
			data: {password: password, _token: "<?php echo csrf_token(); ?>"},
			success: function (response) {
				if(response == 1)
				{
					$('#old_password').removeClass('border-error');
					$('#old_password').addClass('success-error');
				}
				else{
					$('#old_password').addClass('border-error');
					$('#submitform').prop('disabled', false);
					$('#old_password_error').html("Old Password does not Match");
					cnt = 1;
				}
			}
		});
		
		if (new_password.trim() == '') {
            $('#new_password_error').html("Please enter new Password");
            cnt = 1;
        }
        if (new_password != '') {
            if (new_password.length < 8) {
                $('#new_password_error').html("Password atleast 8 character allowed");
                cnt = 1;
            }
        }
        if (confirm_password.trim() == '') {
            $('#confirm_password_error').html("Please enter Confirm Password");
            cnt = 1;
        }
        if (new_password != confirm_password) {
            $('#confirm_password_error').html("New password and Confirm Password does not Match");
            cnt = 1;
        } 
		
		if (cnt == 1) {
			$('#submitform').prop('disabled', false);
            return false;
        } else {
			$('#main_id').submit();
        }
		
}
 
</script>