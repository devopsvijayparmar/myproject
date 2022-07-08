@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Amazing Features </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/amazing-features') }}">Amazing Features</a></li>
            <li class="breadcrumb-item">Amazing Features Edit</li>
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
				<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/super-admin/amazing-features/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				 <div class="card-body">
					<div class="row">
					
						<div class="form-group  col-md-6">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" maxlength="255" value="{{ $data->title }}">
							  <span class="error" id='title_error'>{{$errors->AmazingFeatures->first('title')}}</span>
						</div>
						
						<div class="col-md-4">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" src="<?php echo url('/uploads/front/amazing_features/'.$data->image);?>" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->AmazingFeatures->first('image')}}</span>
						</div>
						
						<div class="form-group  col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea class="form-control" id="description" name="description" placeholder="Enter Description"><?php echo $data->description;?></textarea>
							<span class="error" id='description_error'>{{$errors->AmazingFeatures->first('description')}}</span>
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
	var title = $('#title').val();
	var image = $('#image').val();
	var description = $('#description').val();
	
	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
	$('#image_error').html("");
	$('#description_error').html("");
	$('.note-frame').removeClass("autofocous");
	
	if (title.trim() == '') {
		$('#title_error').html("Please enter Title");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
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