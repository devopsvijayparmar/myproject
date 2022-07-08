 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3 class="card-title">Blog</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				 <a type="button" class="btn btn-primary float-right ml-2" href="<?php echo url('/admin/blog/create');?>">Add</a>
                  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Image</th>
					  <th>Title</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($blog as $retrieved_data)
						{ 
						$i++;
						?>
						<tr id="{{$i}}">
						  <td>{{$i}}</td>
						  <td><img class="rp-img" src="<?php echo url('/uploads/blog/'.$retrieved_data->image);?>"></td>
						  <td>{{$retrieved_data->title}}</td>
						  <td>
						  <a title="View" class="mr-2" href="<?php echo URL::to('/'); ?>/admin/blog/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}"><i class="fas fa-eye text-info font-16"></i></a>
						  
						  <a title="Edit" class="mr-2" href="<?php echo URL::to('/'); ?>/admin/blog/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}/edit"><i class="fas fa-edit text-info font-16"></i></a>
						  
						  <a title="Delete" href="#"  onclick="functiondelete('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','{{$i}}')"><i class="fas fa-trash-alt text-info font-16"></i></a>
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
$('#blogtab').addClass('active');

$(function () {
	$("#example1").DataTable({
      'ordering'    : false,
    });
});
  

function functiondelete(id,i)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: 'Blog Delete?',
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
				url: "<?php echo URL::to('/'); ?>/admin/blog/"+id,
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