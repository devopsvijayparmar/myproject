 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/group');?>">Group</a></li>
              <li class="breadcrumb-item active">Show</li>
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
                <h3 class="card-title">Group</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Mobile</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($groupdata as $retrieved_data)
						{ 
						$i++;
						?>
						<tr id="{{$i}}">
						  <td>{{$i}}</td>
						  <td>{{$retrieved_data->name}}</td>
						  <td>{{$retrieved_data->email}}</td>
						  <td>{{$retrieved_data->mobile}}</td>
						</tr>
						<?php }
						?>
					</tfoot>
				  </table>
                </div>
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
$('#grouptab').addClass('active');

$(function () {
	$("#example1").DataTable({
      'ordering'    : false,
    });
});
</script>