@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Web Templates </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/web-templates') }}">Web Templates</a></li>
            <li class="breadcrumb-item">Web Templates Edit</li>
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
				<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/super-admin/web-templates/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				 <div class="card-body">
					<div class="row">
						<div class="form-group  col-md-6">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" maxlength="255" value="{{ $data->title }}">
							  <span class="error" id='title_error'>{{$errors->WebTemplates->first('title')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">URL <span class="error">*</span></label>
							  <input type="text" class="form-control" id="url" placeholder="Enter URL" name="url" maxlength="255" value="{{ $data->url }}">
							  <span class="error" id='url_error'>{{$errors->WebTemplates->first('url')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Preview URL <span class="error">*</span></label>
							  <input type="text" class="form-control" id="preview" placeholder="Enter Preview URL" name="preview" maxlength="255" value="{{ $data->preview }}">
							  <span class="error" id='preview_error'>{{$errors->WebTemplates->first('preview')}}</span>
						</div>
						
						<div class="form-group  col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description"><?php echo $data->description;?></textarea>
							<span class="error" id='description_error'>{{$errors->WebTemplates->first('description')}}</span>
						</div>
						
						<div class="col-md-4">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" src="<?php echo url('/uploads/front/web_templates/'.$data->image);?>" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->WebTemplates->first('image')}}</span>
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
  
CKEDITOR.replace( 'description' );
/*Image 1 read url*/
function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah').css({
			height: '100px',
			width: '100px'
		});
		$('#blah').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image").change(function() {
  readURL(this);
});
/*Image 1 read url*/

  function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB

        if (FileSize > 2) {
            alert('File size exceeds 2 MB');
        } else {

        }
    }
  
   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var title = $('#title').val();
	var url = $('#url').val();
	var preview = $('#preview').val();
	var description = CKEDITOR.instances.description.getData();
	var image = $('#image').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
	$('#url_error').html("");
	$('#preview_error').html("");
	$('#description_error').html("");
	$('#image_error').html("");
	$('.note-frame').removeClass("autofocous");
	$('#image').removeClass("autofocous");

   
	if (title.trim() == '') {
		$('#title_error').html("Please enter Title");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	if (url.trim() == '') {
		$('#url_error').html("Please enter URL");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#url').focus();
		}
	}
	if (preview.trim() == '') {
		$('#preview_error').html("Please enter Preview");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#preview').focus();
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