 @include('admin.include.header')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-3">
          

          <div class="card">
            
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column vp-tab">
                <li class="nav-item active">
                  <a href="<?php echo URL::to('/')?>/admin/settings" class="nav-link">
                    <i class="fas fa-sliders-h"></i> Home Slider
                   
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo URL::to('/')?>/admin/change-password" class="nav-link">
                    <i class="fas fa-key"></i> Change Password
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo URL::to('/')?>/admin/site-settings" class="nav-link">
                    <i class="fas fa-cog"></i> Site Settings
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Home Slider</h3>
             <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">Add</button>
            
              <!-- /.card-tools -->
            </div>
			 <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body p-0">
             
              <div class="table-responsive mailbox-messages">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>#</th>
					  <th>Image</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
					foreach($slider as $retrieved_data)
					{ 
					$i++;
					?>
					<tr id="{{$i}}">
					  <td><i title="drag and drop" class="fas fa-arrows-alt-v"></i></td>
					  <td><img src="<?php echo URL::to('/'); ?>/uploads/slider/{{$retrieved_data->image}}" class="mr-3 rp-img100"></td>
					  <td>
					  <a title="Edit" class="mr-2" href="javascript:void(0)" onclick="functionedit('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}')"><i class="fas fa-edit text-info font-16"></i></a>
					  
					  <a title="Delete" href="javascript:void(0)"  onclick="functiondelete('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','{{$i}}')"><i class="fas fa-trash-alt text-info font-16"></i></a>
					  </td>
					</tr>
					<?php } ?>
					</tfoot>
				  </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
   <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
			<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/slider" enctype="multipart/form-data">
			@method('POST')
			@csrf
            <div class="modal-body">
				<div class="form-group">
					<label for="exampleInputFile">Image<span class="error">*</span></label>
					<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image">
					<img class="mar-top-10 rp-img100" id="blah"/ ></br>
					<span class="error" id='image_error'>{{$errors->Slider->first('image')}}</span>
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
  title: 'Slider Delete?',
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
				url: "<?php echo URL::to('/'); ?>/admin/slider/"+id,
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

  
function functionedit(id) 
{ 
    
	$.ajax({
		url: "<?php echo URL::to('/'); ?>/admin/slider/"+id+"/edit",
		type: "GET",
		success: function (response) {
			$('#append').html(response);
			$('#exampleModaledit').modal('show');
		}
	});

}

$('#settings-tab').addClass('active');
 $(function () {
	  $('#example1').DataTable({
      'paging'      : false,
	  "pageLength": 50,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    })
  });
  
  
   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var image = $('#image').val();
	
	var cnt = 0;
	
	$('#image_error').html("");

	
	if (image.trim() == '') {
		$('#image_error').html("Please select Image");
		cnt = 1;
		
	}
	
	regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
	if (image) {
		if (!(regex.test(image))) {
		   
		  $('#image_error').html("Only JPG, PNG and JPEG image are allowed");
			cnt = 1;
		}
	}
	
	if (image) {
		var file_size = $('#image')[0].files[0].size;
		if(file_size>2097152) {
			$("#image_error").html("File size exceeds 2 MB");
			cnt = 1;
		} 
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
});
  
</script>