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
              <li class="breadcrumb-item">Web Templates Add</li>
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
				<form id="main_id" method="POST" action="{{ route('web-templates.store') }}" enctype="multipart/form-data">
				@method('POST')
				@csrf
				<div class="card-body">
					<div class="row">
					
					
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Website Template <span class="error">*</span></label>
							<select name="site_name" class="form-control" id="site_name"/>
								<option value="">Select Website</option>
								@foreach($sites as $site)
								<option @if(old('site_name') == $site->site_name) selected @endif value="{{$site->site_name}}">{{$site->name}}</option>
								@endforeach
							<select>
						</div>
						
						<div class="form-group col-md-4">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" maxlength="255" value="{{ old('title') }}">
							  <span class="error" id='title_error'>{{$errors->WebTemplates->first('title')}}</span>
						</div>
						
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Type<span class="error">*</span></label>
							<select name="type" class="form-control" id="type"/>
								<option value="1">Website Template</option>
								<option value="2">Latest Web Template</option>
							<select>
						</div>
						
						<div class="form-group col-md-6">
							 <label for="exampleInputEmail1">Preview URL <span class="error">*</span></label>
							  <input type="text" class="form-control" id="preview" placeholder="Enter Preview URL" name="preview" maxlength="255" value="{{ old('preview') }}">
							  <span class="error" id='preview_error'>{{$errors->WebTemplates->first('preview')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->WebTemplates->first('image')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputFile">Image 1<span class="error">*</span></label>
							<input type="file" class="form-control" name="image_1" id="image_1">
							<img class="mar-top-10 rp-img100" id="blah_1"/ ></br>
							<span class="error" id='image_error'>{{$errors->WebTemplates->first('image_1')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">	{{ old('description') }}</textarea>
							<span class="error" id='description_error'>{{$errors->WebTemplates->first('description')}}</span>
						</div>
						
					</div>
				</div>
				<div class="card-footer">
				  <button type="submit" class="btn btn-primary">Submit</button>
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


function readURL1(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah_1').css({
			height: '100px',
			width: '100px'
		});
		$('#blah_1').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
}

$("#image_1").change(function() {
  readURL1(this);
});

</script>