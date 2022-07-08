 @include('admin.include.header')
 <style>
 .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100%!important;
	font-size: 1rem!important;
    font-weight: 400!important;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    outline: 0;
    border: 1px solid #ced4da!important;
}

 </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email Marketing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Email Marketing</li>
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
                <h3 class="card-title">Email Marketing</h3>
				<a type="button" class="btn btn-primary float-right ml-2" href="<?php echo url('/admin/email-marketing/create');?>">Add</a>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   
                <div class="card-body table-responsive">
				  <div class="row">
						<?php
						if(count($email) > 0){
						$i=0;
						foreach($email as $retrieved_data)
						{ 
						$i++;
						?>
						<div class="col-lg-6" id="{{$i}}">
						<div class="card">
						    <div class="card-header border-0" style="background: linear-gradient(14deg , #344960 0%, rgb(52 73 96 / 0.6))!important;">
								<h3 class="card-title" style="color: white!important;">{{$retrieved_data->subject}}</h3>
								<div class="card-tools">
								   <a title="Edit" class="mr-2" href="<?php echo URL::to('/'); ?>/admin/email-marketing/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}/edit"><i class="fas fa-edit text-info font-16 " style="color:white!important" ></i></a>
							  
							    <a title="Delete" href="#"  onclick="functiondelete('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}','{{$i}}')"><i style="color:white!important"  class="fas fa-trash-alt text-info font-16"></i></a>
								</div>
							  </div>
						  <div class="card-body">
						  {!! $retrieved_data->email !!}
						  </div>
						  <div class="card-footer">
							 <button type="button" onclick="sendlandingpage('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}');" class="btn btn-primary">Send</button>
						  </div>
						</div>
						</div>
						<?php } }
						else { ?>
							<strong>No data Available</strong>
						<?php
						}
						?>
					
				</div>
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
  
   <div class="modal fade bd-example-modal-lg" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Share Emails with People</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/send-email" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<input type="hidden" name="email_id" id="email_id">
            <div class="modal-body">
				<div class="form-group">
					 <label for="exampleInputEmail1">Send With <span class="error">*</span></label>
					   <input type="radio" name="for" value="1" checked onclick="changeuser(this.value);"> Group
					  <input type="radio"  name="for" value="2" onclick="changeuser(this.value);"> Contacts
					  <span class="error" id='for_error'>{{$errors->Email->first('for')}}</span>
				</div>
				
				<div class="form-group" id="hidegroup">
					<label for="exampleInputEmail1">Groups <span class="error">*</span></label>
					<select class="form-control form-control-sm" name="group" id="group">
					<option value="">select group</option>
					@foreach($group as $data)
						<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
					</select>
					<span class="error" id='group_error'>{{$errors->Email->first('name')}}</span>
				</div>
				
				
				<div class="form-group" id="hideusers" style="display:none">
					<label for="exampleInputEmail1">Contacts <span class="error">*</span></label></br>
					<select class="select2 form-control form-control-sm" name="users[]" id="users" multiple="multiple" data-placeholder="select contacts">
					@foreach($address_book as $address_book_data)
						<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
					@endforeach
					</select>
					<span class="error" id='users_error'>{{$errors->Email->first('name')}}</span>
				</div>
				
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  
  
  <!-- /.content-wrapper -->
  @include('admin.include.footer')
<script>
$('#emailtab').addClass('active');

CKEDITOR.replace( 'description' );

function changeuser(val){
	if(val == 1)
	{
		$('#hidegroup').show();
		$('#hideusers').hide();
	}
	else{
		$('#hidegroup').hide();
		$('#hideusers').show();
	}
}

function sendlandingpage(id)
{
	$('#email_id').val(id);   
	$('.select2').select2({
	});
		$('#modal-default').modal('show');
	}

function functiondelete(id,i)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: 'Email Delete?',
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
				url: "<?php echo URL::to('/'); ?>/admin/email-marketing/"+id,
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


 $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);

    var fortype = $("input[name='for']:checked").val();
	var group = $('#group').val();
	var users = [];
	$.each($("#users option:selected"), function(){            
		users.push($(this).val());
	}); 
	
	var cnt = 0;
	var f = 0;
	
	$('#group_error').html("");
	$('#users_error').html("");

    if(fortype == 1)
	{
		if (group.trim() == '') {
			$('#group_error').html("Please select Group");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#group').focus();
			}
		}
	}
	if(fortype == 2)
	{
		if (users == '') {
			$('#users_error').html("Please enter Contacts");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#users').focus();
			}
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