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
				<li class="breadcrumb-item">Web Templates Show</li>
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
				<div class="card-body">
				<p class="lead">Details</p>
				<div class="col-md-10">
					<table class="table table-responsive">
                      <tbody>
					  
					  <tr>
                        <th style="width:50%">Image:</th>
                        <td><img class="rp-img" src="{{$data->image_url}}"></td>
                      </tr>
					   <tr>
                        <th>Title:</th>
                        <td>{{$data->title}}</td>
                      </tr>
					   <tr>
                        <th>URL:</th>
                        <td>{{$data->url}}</td>
						</tr>
					   <tr>
                        <th>Preview URL:</th>
                        <td>{{$data->preview}}</td>
						</tr>
					  <tr>
                        <th>Description:</th>
                        <td><?php echo $data->description; ?></td>
						</tr>
					 
                    </tbody>
					</table>
				</div>
				</div>
			</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('super_admin.include.footer')
<script>
$('#frontendetab').addClass('active');
</script>