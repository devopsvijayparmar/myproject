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
              <li class="breadcrumb-item">Amazing Features</li>
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
				<div class="card-body table-responsive">
			 <a type="button" class="btn btn-primary float-right ml-2" href="{{ route('amazing-features.create') }}">Add</a>
			  <table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
				  <th>No.</th>
				  <th>Image</th>
				  <th>Title</th>
				  <th>Description</th>
				  <th>Action</th>
				</tr>
				</thead>
				<tbody>
					<?php
						$i=0;
						foreach($amazing_features as $retrieved_data)
						{ 
						$i++;
						?>
						<tr id="{{$i}}">
						  <td>{{$i}}</td>
						<td><img class="rp-img" src="{{$retrieved_data->image_url}}"></td>
						  <td>{{$retrieved_data->title}}</td>
						  <td>{!!$retrieved_data->description!!}</td>
						  <td>
						  <a title="View" class="mr-2" href="<?php echo URL::to('/'); ?>/super-admin/amazing-features/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}"><i class="fas fa-eye text-info font-16"></i></a>
						  
						  <a title="Edit" class="mr-2" href="<?php echo URL::to('/'); ?>/super-admin/amazing-features/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}/edit"><i class="fas fa-edit text-info font-16"></i></a>
						  
						  <a title="Delete" href="#"  onclick="functiondelete('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','{{$i}}')"><i class="fas fa-trash-alt text-info font-16"></i></a>
						  </td>
						</tr>
						<?php }
						?>
				</tfoot>
			  </table>
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
  
$(function () {
	$("#example1").DataTable({
	  'ordering'    : false,
	});
});
	
	
function functiondelete(id,i)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: 'Amazing Features Delete?',
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
				url: "<?php echo URL::to('/'); ?>/super-admin/amazing-features/"+id,
				type: "DELETE",
				data: {id: id, _token: "<?php echo csrf_token(); ?>"},
				success: function (response) {
					if(response)
					{
						$('#'+i).remove();
						toastr.success('Successfully Deleted', '', {timeOut: 5000});
					}
				}
			});
		
  } 
});
}
  </script>