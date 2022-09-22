 @include('admin.include.header')
 
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
                <li class="nav-item">
                  <a href="<?php echo URL::to('/')?>/admin/change-password" class="nav-link">
                    <i class="fas fa-key"></i> Change Password
                  </a>
                </li>
                <li class="nav-item active">
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
           
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="card-footer bg-white">
			  <form id="main_id"  method="POST" action="<?php echo URL::to('/')?>/admin/site-settings/0" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="form-group col-md-6" style="padding-left: 0;">
				 <label for="exampleInputEmail1">Site Title</label>
				  <input type="text" class="form-control form-control-sm" id="title" placeholder="Enter title" name="title" maxlength="255" value="<?php if(isset($data->title)) { echo $data->title;} ?>">
				  <span class="error" id="title_error"></span>
				</div>
				
				  <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
				   
					<li style="width: 254px!important;">
					  <span class="mailbox-attachment-icon has-img"><img id="blah" src="<?php echo URL::to('/'); ?>/uploads/site_settings/<?php if(isset($data->site_logo)) { echo $data->site_logo;} ?>" class="rp-img-setting"></span>

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
					  <span class="mailbox-attachment-icon has-img"><img id="blah1" src="<?php echo URL::to('/'); ?>/uploads/site_settings/<?php if(isset($data->fav_icon)) { echo $data->fav_icon;} ?>"  class="rp-img-setting"></span>

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
				  <div class="form-group col-md-6" style="padding-left: 0;">
						 <label for="exampleInputEmail1">Currency <span class="error">*</span></label>
						  <select class="form-control" id="currency_fk" name="currency_fk">
							<option value="">select currency</option>
							<?php foreach($currency as $retrieved_data) { ?>
							<option <?php if(isset($data->currency_fk)) { if($data->currency_fk == $retrieved_data->id) { echo "selected";}} ?> value="{{$retrieved_data->id}}">{{$retrieved_data->name}}({{$retrieved_data->code}})</option>
							<?php } ?>
						  </select>
						  <span class="error" id='currency_fk_error'>{{$errors->Products->first('name')}}</span>
					</div>
				   <button type="submit" class="btn btn-primary">Update</button>
				  </form>
				  
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
	var title = $('#title').val();
	var currency_fk = $('#currency_fk').val();
	var site_logo = $('#site_logo').val();
	var fav_icon = $('#fav_icon').val();
	
	var cnt = 0;
	
	$('#title_error').html("");
	$('#site_logo_error').html("");
	$('#fav_icon_error').html("");

	if (title.trim() == '') {
		$('#title_error').html("Please enter Title");
		cnt = 1;
		
	}
	if (currency_fk.trim() == '') {
		$('#currency_fk_error').html("Please select currency");
		cnt = 1;
		
	}
	
	
	if(site_logo)
	{
		regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
		if (site_logo) {
			if (!(regex.test(site_logo))) {
			   
			  $('#site_logo_error').html("Only JPG, PNG and JPEG image are allowed");
				cnt = 1;
			}
		}
		
		if (site_logo) {
			var file_size = $('#site_logo')[0].files[0].size;
			if(file_size>2097152) {
				$("#site_logo_error").html("File size exceeds 2 MB");
				cnt = 1;
			} 
		}
	}
	
	if(fav_icon)
	{
		regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
		if (fav_icon) {
			if (!(regex.test(fav_icon))) {
			   
			  $('#fav_icon_error').html("Only JPG, PNG and JPEG image are allowed");
				cnt = 1;
			}
		}
		
		if (fav_icon) {
			var file_size = $('#fav_icon')[0].files[0].size;
			if(file_size>2097152) {
				$("#fav_icon_error").html("File size exceeds 2 MB");
				cnt = 1;
			} 
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