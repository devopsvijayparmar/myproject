 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
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
                <h3 class="card-title">Orders</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Image</th>
					  <th>Product Name</th>
					  <th>Quantity</th>
					  <th>Customer Name</th>
					  <th>Customer Mobile</th>
					  <th>Customer Email</th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($orders as $retrieved_data)
						{ 
						$i++;
						  if($retrieved_data->status == 0)
						  {
							  $status = 'Pending';
							  $class = 'warning';
						  }
						  else if($retrieved_data->status == 1)
						  {
							  $status = 'Delivered';
							   $class = 'success';
						  }
						  else{
							  $status = 'Rejected'; 
							   $class = 'danger';
						  }
						  
						
						?>
						<tr id="{{$i}}">
						  <td>{{$i}}</td>
						  <td><img class="rp-img" src="<?php echo url('/uploads/products/'.$retrieved_data->image_1);?>"></td>
						  <td><a href="<?php echo URL::to('/'); ?>/admin/products/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->product_fk)}}" target="_blank">{{$retrieved_data->product_name}}</a></td>
						  <td>{{$retrieved_data->quantity}}</td>
						  <td>{{$retrieved_data->name}}</td>
						  <td>{{$retrieved_data->mobile}}</td>
						  <td>{{$retrieved_data->email}}</td>
						  <td>
						  <span class="badge badge-{{$class}}">{{$status}}</span>
						  </td>
						  <td>
						  
						  
						  <a title="View" class="mr-2" href="<?php echo URL::to('/'); ?>/admin/orders/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}"><i class="fas fa-eye text-info font-16"></i></a>
						  
							<?php if($retrieved_data->status == 0)
							 { 
								$delivered = 'Indicate as "Delivered"';
								$rejected = 'Indicate as "Rejected"';
								
								$smg = 'Delivered';
								$smg = 'Rejected';
							 
							 ?>
							 <a title="Deliver" class="mr-2" href="javascript:void(0)" onclick="changestatus('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','1','{{$delivered}}','{{$smg}}')"><i class="fas fa-check font-16 text-info "></i></a>
							 
							  <a href="javascript:void(0)" class="mr-2" onclick="changestatus('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','2','{{$rejected}}','{{$smg}}')" title="Reject"><i class="fas fa-times font-16 text-info "></i></a>
							 
							 
							 <?php 
							 } 
							 else
							 {
								  if($retrieved_data->status == 0)
								  {
									  $tooltip = 'Pending';
								  }
								  if($retrieved_data->status == 1)
								  {
									  $tooltip = 'Already Delivered';
								  }
								  if($retrieved_data->status == 2)
								  {
									  $tooltip = 'Already Rejected';
								  }
								 
							 ?>
							  <a style="cursor: no-drop;" title="{{$tooltip}}" class="mr-2" href="javascript:void(0)"><i class="fas fa-check font-16 text-info"></i></a>
							  
							   <a class="mr-2" style="cursor: no-drop;" title="{{$tooltip}}" ><i class="fas fa-times font-16 text-info"></i></a>
							  
							  
							 <?php 
							 } 
							 ?>
						  
						  </td>
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
$('#orderstab').addClass('active');

$(function () {
	$("#example1").DataTable({
      'ordering'    : false,
    });
});
  
function changestatus(id,status,message,smg)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: message,
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  cancelButtonText: "No",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
		$.ajax({
			url: "<?php echo URL::to('/'); ?>/admin/orders/"+id,
			type: "DELETE",
			data: {id: id,status:status,message:message,smg:smg, _token: "<?php echo csrf_token(); ?>"},
			success: function (response) {
				location.reload();
			}
		});
  } 
});
}  
  
</script>