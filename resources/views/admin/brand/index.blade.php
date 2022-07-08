 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
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
                <h3 class="card-title">Brand</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				 <button type="button" class="btn btn-primary float-right ml-2" data-toggle="modal" data-target="#modal-default">Add</button>
                  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Name</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
					foreach($brand as $retrieved_data)
					{ 
					$i++;
					?>
					<tr id="{{$i}}">
					  <td>{{$i}}</td>
					  <td>{{$retrieved_data->name}}</td>
					  <td>
					  <a title="Edit" class="mr-2" href="javascript:void(0)" onclick="functionedit('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}')"><i class="fas fa-edit text-info font-16"></i></a>
					  
					  <a title="Delete" href="javascript:void(0)"  onclick="functiondelete('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','{{$i}}')"><i class="fas fa-trash-alt text-info font-16"></i></a>
					  </td>
					</tr>
					<?php } ?>
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
	  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Brand</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/brand" enctype="multipart/form-data">
			@method('POST')
			@csrf
            <div class="modal-body">
				<div class="form-group">
					<label for="exampleFormControlInput1">Brand <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
					<input maxlength="255" type="text" id="name" name="name" class="form-control" placeholder="Brand">
					<span style="color:red;" id="name_error"></span>
				</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  
	  <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" id="append">
		</div>
	 </div>

   @include('admin.include.footer')
<script>


function functiondelete(id,i)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: 'Brand Delete?',
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
				url: "<?php echo URL::to('/'); ?>/admin/brand/"+id,
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

$('#brandtab').addClass('active');

 $(function () {
	$("#example1").DataTable({
      'ordering'    : false,
    });
});
  
function functionedit(id) 
{ 
    
	$.ajax({
		url: "<?php echo URL::to('/'); ?>/admin/brand/"+id+"/edit",
		type: "GET",
		success: function (response) {
			$('#append').html(response);
			$('#exampleModaledit').modal('show');
		}
	});

}
  
   $('#main_id').submit(function (e) {
	   
	
	$(':input[type="submit"]').prop('disabled', true); 
	var name = $('#name').val();
	
	var cnt = 0;
	
	$('#name_error').html("");

	
	if (name.trim() == '') {
		$('#name_error').html("Please enter Brand");
		cnt = 1;
		$('#name').focus();
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false); 
		return false;
	} else {
		return true;
	}
});
</script>