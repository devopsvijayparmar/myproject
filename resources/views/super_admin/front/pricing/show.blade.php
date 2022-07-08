@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Pricing </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ url('/super-admin/pricing') }}">Pricing</a></li>
				<li class="breadcrumb-item">Pricing Show</li>
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
                        <th>Plan Name:</th>
                        <td>{{$data->plan_name}}</td>
                      </tr>
					   <tr>
                        <th>Price:</th>
                        <td>{{$data->price}}</td>
						</tr>
					  <tr>
                        <th>Description:</th>
                        <td><?php echo $data->description; ?></td>
						</tr>
						<tr>
                        <th>Duration:</th>
                        <td><?php echo $data->duration; ?></td>
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