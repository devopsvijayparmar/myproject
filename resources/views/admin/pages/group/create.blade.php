 @include('admin.include.header')
 <style>
.select2-container--default .select2-search--inline .select2-search__field {
    background: transparent;
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield;
    font: 400 13.3333px Arial!important;
	color:#ced4da!important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 2px;
    padding-right: 5px;
    color: black!important;
}
 </style>
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
              <li class="breadcrumb-item active">Add Group</li>
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
                <h3 class="card-title">Add Group</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="<?php echo URL::to('/')?>/admin/group" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="form-group">
						 <label for="exampleInputEmail1">Group Name <span class="error">*</span></label>
						  <input type="text" class="form-control" id="name" placeholder="Group Name" name="name" maxlength="255" value="{{ old('name') }}">
						  <span class="error" id='name_error'>{{$errors->Group->first('name')}}</span>
					</div>
					
					<div class="form-group">
						 <label for="exampleInputEmail1">For <span class="error">*</span></label>
						   <input type="radio" name="for" value="1" checked onclick="changeuser();"> Custom
						  <input type="radio"  name="for" value="2" onclick="changeuser();"> All
						  <span class="error" id='for_error'>{{$errors->Group->first('for')}}</span>
					</div>
					
					<div class="form-group" id="userdiv">
						<label for="exampleInputEmail1">Contacts <span class="error">*</span></label>
					    <select class="select2 form-control" name="users[]" id="users" multiple="multiple" data-placeholder="Select Contacts">
						@foreach($address_book as $address_book_data)
							<option value="{{$address_book_data->id}}">{{$address_book_data->email}} ({{$address_book_data->name}}) ({{$address_book_data->mobile}})</option>
						@endforeach
						</select>
						<span class="error" id='users_error'>{{$errors->Group->first('name')}}</span>
					</div>
					
                </div>
				<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				</form>
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
   
   
   function changeuser()
   {
	   var fortype = $("input[name='for']:checked").val();
	   if(fortype == 2)
	   {
		   $('#userdiv').hide();
	   }
	   else{
		   $('#userdiv').show();
	   }
	   
   }
   
   
   $('.select2').select2({
	});

   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var name = $('#name').val();
	 var fortype = $("input[name='for']:checked").val();
	
	var users = [];
	$.each($("#users option:selected"), function(){            
		users.push($(this).val());
	}); 

	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#users_error').html("");

	if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
		}
	}
	
	if(fortype == 1)
	{
		if (users == '') {
			$('#users_error').html("Please enter Users");
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