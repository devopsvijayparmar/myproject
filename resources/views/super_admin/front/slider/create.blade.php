@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Slider </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/slider') }}">Slider</a></li>
              <li class="breadcrumb-item">Slider Add</li>
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
				<form id="main_id" method="POST" action="{{ route('admin-slider.store') }}" enctype="multipart/form-data">
				@method('POST')
				@csrf
				<div class="card-body">
					<div class="row">
					
						<div class="form-group col-md-6">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->Slider->first('image')}}</span>
						</div>
						
						<div class="form-group col-md-6">
							<select name="title" class="form-control" id="title"/>
								<option value="">Select Website</option>
								@foreach($sites as $site)
								<option @if(old('title') == $site->name) selected @endif value="{{$site->name}}">{{$site->name}}</option>
								@endforeach
							<select>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Desc"></textarea>
							<span class="error" id='address_error'></span>
						</div> 
						
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">URL <span class="error">*</span></label>
							<input type="text" class="form-control" id="url" placeholder="Enter url" name="url" maxlength="255" value="">
							
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

CKEDITOR.replace( 'description' );

</script>