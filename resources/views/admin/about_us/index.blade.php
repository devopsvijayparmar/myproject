 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}">Home</a></li>
              <li class="breadcrumb-item active">About Us</li>
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
                <h3 class="card-title">About Us</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{url('/admin/about-us/0')}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                <div class="card-body">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">@if(isset($data->description)) {!!$data->description!!} @endif</textarea>
						<span class="error" id='description_error'>{{$errors->AboutUS->first('description')}}</span>
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
$('#about-us-tab').addClass('active');
 
   CKEDITOR.replace( 'description' );

   $('#main_id').submit(function (e) {
	   
	
	$(':input[type="submit"]').prop('disabled', true); 
	 var description = CKEDITOR.instances.description.getData();
	
	
	var cnt = 0;
	
	
	$('#description_error').html("");
	
   
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
		cnt = 1;
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false); 
		return false;
	} else {
		return true;
	}
});
</script>