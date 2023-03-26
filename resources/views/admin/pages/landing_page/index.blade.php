@extends('admin.layouts.master')
@section('content')
@section('css')
<style src="{{asset('vendor/multiselect/dist/js/bootstrap-multiselect.css')}}"></style>
 <style>
 .btn-group, .btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
    width: 100%;
}
.custom-select{
	text-align: left!important;
}
.dropdown-menu.show {
    max-height: 300px;
    overflow: auto;
    top: 100% !important;
	min-width: 100%!important;
}
 </style>
@endsection
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
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
				 <a type="button" class="btn btn-primary float-right ml-2" href="{{route('landing-page.create')}}">Create Landing Page</a>
                 @include('admin.include.table')
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
        <div class="modal-dialog modal-lg bd-example-modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Share Landing Page with People</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="main_id" method="POST" action="{{route('send-landing-page')}}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<input type="hidden" name="landing_page_id" id="landing_page_id">
            <div class="modal-body">
				<div class="form-group">
					 <label for="exampleInputEmail1">Send With <span class="error">*</span></label>
					   <input type="radio" name="for" value="1" checked onclick="changeuser(this.value);"> Group
					  <input type="radio"  name="for" value="2" onclick="changeuser(this.value);"> Contacts
					 <span class="error" id='for_error'>{{$errors->first('for') }}</span>
				</div>
				
				<div class="form-group" id="hidegroup">
					<label for="exampleInputEmail1">Groups <span class="error">*</span></label>
					<select class="form-control form-control-sm" name="group" id="group">
					<option value="">select group</option>
					@foreach($group as $data)
						<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
					</select>
					<span class="error" id='group_error'>{{$errors->first('group') }}</span>
				</div>
				
				
				<div class="form-group" id="hideusers" style="display:none">
					<label for="exampleInputEmail1">Contacts <span class="error">*</span></label></br>
					<select class="select2 form-control form-control-sm" name="users[]" id="users" multiple="multiple" data-placeholder="select contacts" style="display:none">
					@foreach($address_book as $address_book_data)
						<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
					@endforeach
					</select>
					<span class="error" id='users_error'>{{$errors->first('users') }}</span>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Subject <span class="error">*</span></label>
					<input type="text" class="form-control form-control-sm" maxlength="255" name="subject" id="subject" placeholder="Subject"> 
					<span class="error" id='subject_error'>{{$errors->first('subject') }}</span>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Description<span class="error">*</span></label>
					<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{!! $admin_site_setting->landing_page_email !!}</textarea>
					<span class="error" id='description_error'>{{$errors->first('description') }}</span>
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

@endsection
@section('script')
<script src="{{asset('vendor/multiselect/dist/js/bootstrap-multiselect.js')}}"></script>
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
@include('admin.include.table_script')
<script>
$('#landing-page-tab').addClass('active');
CKEDITOR.replace( 'description');
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

function sendLandingPage(id)
{

	$('#landing_page_id').val(id);   
	$('#users').multiselect({
		enableFiltering: true,
		includeSelectAllOption: true
	});
	$('#modal-default').modal('show');
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
@endsection  