@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> {{$data->title}} </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item">{{$data->title}}</li>
             
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
				<form id="main_id" method="POST" action="{{ route('cms',$data->id) }}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description"><?php if(isset($data->description)) { echo $data->description;} ?></textarea>
						<span class="error" id='description_error'>{{$errors->AboutUS->first('description')}}</span>
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