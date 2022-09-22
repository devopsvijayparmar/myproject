 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/landing-page');?>">Landing Page</a></li>
              <li class="breadcrumb-item active">Edit Landing Page</li>
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
                <h3 class="card-title">Edit Landing Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/landing-page/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter title" value="{{$data->title}}" name="title" maxlength="255">
						  <span class="error" id='title_error'>{{$errors->LandingPage->first('title')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL Name<span class="error">*</span></label>
						  <input type="text" class="form-control" onkeyup="geturlname(this.value);" id="url_name" placeholder="Enter URL Name" name="url_name" maxlength="50" value="{{$data->url_name}}">
						  <span class="error" id='url_name_error'>{{$errors->LandingPage->first('url_name')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL<span class="error">*</span></label>
						  <input type="text" class="form-control" id="url" name="url" readonly value="{{$data->url}}">
						  <span class="error" id='url_error'>{{$errors->LandingPage->first('url')}}</span>
					</div>
					
					<iframe src="<?= URL::to("/"); ?>/admin/landing_page_edit_editor/{{$data->id}}" style="width: 100%;height: 600px;border: none;" frameborder="0" scrolling="no" id="editoriframe" onload="resizeIframe(this)"></iframe>
                        <script>
                            function resizeIframe(obj) {
                                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
                            }
                        
							function getcontent(){
								var cntn = document.getElementById("editoriframe").contentWindow.testGetc();
								$("#txtareaacontent").html(cntn);
								$("#dvstore").html(cntn);
								console.log(cntn,'log');
							}
							
							function geturlname(urlname)
							{
								var url = '{{url("/")}}/{{$auth->title}}/landing-page/';
								$('#url').val(url+urlname);
							}
						</script>
						<textarea style="display:none" id="txtareaacontent" name="description" ></textarea>
						<div id="dvstore" style="display:none;"></div>
					
                </div>
				<div class="card-footer">
                  <button type="button" id="submitform" class="btn btn-primary" onclick="validation();">Update</button>
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
$('#landing-page-tab').addClass('active');

  function validation(){
	getcontent();
	
	$('#submitform').prop('disabled', true);
	var title = $('#title').val();
	var url_name = $('#url_name').val();

	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
	$('#url_name_error').html("");
	
	if (title.trim() == '') {
		$('#title_error').html("Please enter Title");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	
	if (url_name.trim() == '') {
		$('#url_name_error').html("Please enter url name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#url_name').focus();
		}
	}
	
	if (url_name) {
		var id = '{{$data->id}}';
		$.ajax({
			async : false,
			url: "<?php echo URL::to('/'); ?>/admin/exit-title-edit",
			type: "POST",
			data: {url_name: url_name,id:id, _token: "<?php echo csrf_token(); ?>"},
			success: function (response) {
				if(response == 1)
				{
					$('#url_name_error').html("This url name is already been taken");
					cnt = 1;
					f++;
					if(f == 1)
					{
						$('#url_name').focus();
					}
				}
			}
		});
	}
	
	if (cnt == 1) {
		$('#submitform').prop('disabled', false);
		return false;
	} else {
		$('#main_id').submit();
	}
	
}
</script>
    