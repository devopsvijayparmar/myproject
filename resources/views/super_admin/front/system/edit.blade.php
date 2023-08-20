@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> System </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/super-admin/web-templates') }}">System</a></li>
            <li class="breadcrumb-item">System Edit</li>
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
				<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/super-admin/system/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				 <div class="card-body">
					<div class="row">
					
						<div class="form-group  col-md-6">
							 <label for="exampleInputEmail1">Title <span class="error">*</span></label>
							  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" maxlength="255" value="{{ $data->title }}">
							  <span class="error" id='title_error'>{{$errors->System->first('title')}}</span>
						</div>
						
						<div class="col-md-4">
							<label for="exampleInputFile">Image<span class="error">*</span></label>
							<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
							<img class="mar-top-10 rp-img100" src="<?php echo url('/uploads/front/system/'.$data->image);?>" id="blah"/ ></br>
							<span class="error" id='image_error'>{{$errors->System->first('image')}}</span>
						</div>
						
						<div class="form-group  col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description"><?php echo $data->description;?></textarea>
							<span class="error" id='description_error'>{{$errors->System->first('description')}}</span>
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
</script>