@extends('admin.layouts.master')
@section('content')
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
			  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('landing-page.index')}}">Landing Page</a></li>
              <li class="breadcrumb-item active">Create Landing Page</li>
			  
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
                <h3 class="card-title">Create Landing Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('landing-page.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{ old('title') }}">
						   <span class="error" id="title_error">{{$errors->first('title')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL Name<span class="error">*</span></label>
						  <input type="text" class="form-control" onkeyup="geturlname(this.value);" id="url_name" placeholder="Enter URL Name" name="url_name" maxlength="50" value="{{ old('url_name') }}">
						  <span class="error" id="url_name_error">{{$errors->first('url_name')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">URL<span class="error">*</span></label>
						  <input type="text" class="form-control" id="url" name="url" readonly value="{{url('/')}}/{{$auth->title}}/landing-page/">
						  <span class="error" id="url_name">{{$errors->first('url')}}</span>
					</div>
					
					<iframe src="{{route('landing-page-editor')}}" style="width: 100%;height: 600px;border: none;" frameborder="0" scrolling="no" id="editoriframe" onload="resizeIframe(this)"></iframe>
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
                  <button type="button" id="submitform" class="btn btn-primary" onclick="validation();">Save</button>
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
  
@endsection
@section('script')
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
		$.ajax({
			async : false,
			url: "{{route('landing-page-check-exit-title')}}",
			type: "POST",
			data: {url_name: url_name, _token: "{{ csrf_token() }}"},
			success: function (response) {
				if(response == 1)
				{
					$('#url_name_error').html("{{__('messages.url_name_already_been_taken')}}");
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
@endsection  
