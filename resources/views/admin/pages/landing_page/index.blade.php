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
@media (min-width: 992px) {
  .modal-dialog {
    max-width: 50%!important;;
  }
}
 </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Landing Page</li>
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
                <h3 class="card-title">Landing Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				 <a type="button" class="btn btn-primary float-right ml-2" href="<?php echo url('/admin/landing-page/create');?>">Create</a>
                 <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>No.</th>
					  <th>Title</th>
					  <th>URL</th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($landing_page as $retrieved_data)
						{ 
						$i++;
						
						if($retrieved_data->status == 0)
						{
							$class = 'warning';
							$status = 'pending';
							$sendname = 'send';
						}
						else
						{
							$class = 'success';
							$status = 'sent';
							$sendname = 'send again';
						}
						
						?>
						<tr id="{{$i}}">
						  <td>{{$i}}</td>
						  <td>{{$retrieved_data->title}}</td>
						  <td><a href="{{$retrieved_data->url}}" target="_blank">{{$retrieved_data->url}}</a></td>
						  <td> <span class="badge badge-{{$class}}">{{$status}}</span></td>
						  <td>
						  
						  <a href="javascript:void(0)" onclick="sendlandingpage('{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}');"><span class="badge badge-info mr-2">{{$sendname}}</span></a>
						  
						  <a title="View" target="_blank" class="mr-2" href="<?php echo URL::to('/'); ?>/{{$auth->title}}/landing-page/{{$retrieved_data->url_name}}"><i class="fas fa-eye text-info font-16"></i></a>
						  
						  <a title="Edit" class="mr-2" href="<?php echo URL::to('/'); ?>/admin/landing-page/{{App\Helpers\CryptHelper::encryptstring($retrieved_data->id)}}/edit"><i class="fas fa-edit text-info font-16"></i></a>
						  
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
  
   <div class="modal fade bd-example-modal-lg" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Share Landing Page with People</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/send-landing-page" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<input type="hidden" name="landing_page_id" id="landing_page_id">
            <div class="modal-body">
				<div class="form-group">
					 <label for="exampleInputEmail1">Send With <span class="error">*</span></label>
					   <input type="radio" name="for" value="1" checked onclick="changeuser(this.value);"> Group
					  <input type="radio"  name="for" value="2" onclick="changeuser(this.value);"> Contacts
					  <span class="error" id='for_error'>{{$errors->LandingPage->first('for')}}</span>
				</div>
				
				<div class="form-group" id="hidegroup">
					<label for="exampleInputEmail1">Groups <span class="error">*</span></label>
					<select class="form-control form-control-sm" name="group" id="group">
					<option value="">select group</option>
					@foreach($group as $data)
						<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
					</select>
					<span class="error" id='group_error'>{{$errors->LandingPage->first('name')}}</span>
				</div>
				
				
				<div class="form-group" id="hideusers" style="display:none">
					<label for="exampleInputEmail1">Contacts <span class="error">*</span></label></br>
					<select class="select2 form-control form-control-sm" name="users[]" id="users" multiple="multiple" data-placeholder="select contacts">
					@foreach($address_book as $address_book_data)
						<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
					@endforeach
					</select>
					<span class="error" id='users_error'>{{$errors->LandingPage->first('name')}}</span>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Subject <span class="error">*</span></label>
					<input type="text" class="form-control form-control-sm" maxlength="255" name="subject" id="subject" placeholder="Subject"> 
					<span class="error" id='subject_error'>{{$errors->LandingPage->first('subject')}}</span>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Description<span class="error">*</span></label>
					<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{!! $admin_site_setting->landing_page_email !!}</textarea>
					<span class="error" id='description_error'>{{$errors->LandingPage->first('description')}}</span>
				</div>
				
				<div class="form-group">
				 <p>User Name: <?php echo "{{USER_NAME}}";?></p>
				 <p>Landing Page Link here to share with your contacts: <?php echo "{{LANDING_PAGE_LINK}}";?></p>
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
$('#landing-page-tab').addClass('active');

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
	$('#landing_page_id').val(id);   
	$('.select2').select2({
	});
		$('#modal-default').modal('show');
	}

$(function () {
	$("#example1").DataTable({
      'ordering'    : false,
    });
});

function functiondelete(id,i)  {
	
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: 'Landing Page Delete?',
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
				url: "<?php echo URL::to('/'); ?>/admin/landing-page/"+id,
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
	var description = CKEDITOR.instances.description.getData();
	var group = $('#group').val();
	var subject = $('#subject').val();
	var users = [];
	$.each($("#users option:selected"), function(){            
		users.push($(this).val());
	}); 
	
	var cnt = 0;
	var f = 0;
	
	$('#group_error').html("");
	$('#description_error').html("");
	$('#users_error').html("");
	$('.note-frame').removeClass("autofocous");

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
	
	if (subject.trim() == '') {
		$('#subject_error').html("Please select Subject");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#subject').focus();
		}
	}
	
	if (description.trim() == '') {
		$('#description_error').html("Please enter Description");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$(".note-frame").addClass("autofocous");
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