@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Pricing </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/web-templates') }}">Pricing</a></li>
              <li class="breadcrumb-item">Pricing Add</li>
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
				<form id="main_id" method="POST" action="{{ route('pricing.store') }}" enctype="multipart/form-data">
				@method('POST')
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="form-group col-md-12">
							 <input type="radio" name="plan_type" value="paid" checked><label for="exampleInputEmail1">Paid </label>&nbsp
							 <input type="radio" name="plan_type" value="free" ><label for="exampleInputEmail1">Free </label>
						</div>
						<div class="form-group col-md-4">
							 <label for="exampleInputEmail1">Plan Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="plan_name" placeholder="Enter Plan Name" name="plan_name" maxlength="255" value="{{ old('plan_name') }}">
							  <span class="error" id='plan_name_error'>{{$errors->Pricing->first('plan_name')}}</span>
						</div>
						
						<div class="form-group col-md-3">
							 <label for="exampleInputEmail1">Price <span class="error">*</span></label>
							  <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" maxlength="255" value="{{ old('price') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('price')}}</span>
						</div>
						
						<div class="form-group col-md-3">
							 <label for="exampleInputEmail1">Price In Text<span class="error">*</span></label>
							  <input type="text" class="form-control" id="price_text" placeholder="Enter Text Price" name="price_text" maxlength="255" value="{{ old('price_text') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('price_text')}}</span>
						</div>
						
						<div class="form-group col-md-2">
							 <label for="exampleInputEmail1">No. of Landing Page <span class="error">*</span></label>
							  <input type="text" class="form-control" id="no_of_landing_page" placeholder="Enter No. of landing page" name="no_of_landing_page" maxlength="255" value="{{ old('no_of_landing_page') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('no_of_landing_page')}}</span>
						</div>
						
					
						<div class="form-group col-md-3">
							 <label for="exampleInputEmail1"> <input type="checkbox" value="Yes" name="page_builder"> Page Builder? No. of Page Builder</label>
							  <input type="text" class="form-control" id="no_of_page_builder" placeholder="Enter No. of Page Builder" name="no_of_page_builder" maxlength="255" value="{{ old('no_of_page_builder') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('no_of_page_builder')}}</span>
						</div>
						
                        <div class="form-group col-md-2">
							 <label for="exampleInputEmail1">No. of Address Book <span class="error">*</span></label>
							  <input type="text" class="form-control" id="no_of_address_book" placeholder="Enter no of address book" name="no_of_address_book" maxlength="255" value="{{ old('no_of_address_book') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('no_of_address_book')}}</span>
						</div>
						
						<div class="form-group col-md-2">
							 <label for="exampleInputEmail1">Emails <span class="error">*</span></label>
							  <input type="text" class="form-control" id="emails" placeholder="Enter Emails" name="emails" maxlength="255" value="{{ old('emails') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('emails')}}</span>
						</div>
						
						<div class="form-group col-md-2">
							 <label for="exampleInputEmail1">Duration <span class="error">*</span></label>
							  <input type="text" class="form-control" id="duration" placeholder="Enter duration" name="duration" maxlength="255" value="{{ old('duration') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('duration')}}</span>
						</div>
						
						<div class="form-group col-md-2">
							 <label for="exampleInputEmail1">Duration In Days<span class="error">*</span></label>
							  <input type="text" class="form-control" id="duration_in_days" placeholder="Enter Duration In Days" name="duration_in_days" maxlength="255" value="{{ old('duration_in_days') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('duration_in_days')}}</span>
						</div>
						
						<div class="form-group col-md-3">
							 <label for="exampleInputEmail1">Button Name <span class="error">*</span></label>
							  <input type="text" class="form-control" id="button_name" placeholder="Enter button name" name="button_name" maxlength="255" value="{{ old('button_name') }}">
							  <span class="error" id='price_error'>{{$errors->Pricing->first('button_name')}}</span>
						</div>
						
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Description<span class="error">*</span></label>
							<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">	{{ old('description') }}</textarea>
							<span class="error" id='description_error'>{{$errors->Pricing->first('description')}}</span>
						</div>
					</div>
				</div>
				<div class="card-footer">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
				</form>
			</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('super_admin.include.footer')
  <script>
$('#frontendetab').addClass('active');

CKEDITOR.replace( 'description' );

   $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var plan_name = $('#plan_name').val();
	var price = $('#price').val();
	var description = CKEDITOR.instances.description.getData();
	
	var cnt = 0;
	var f = 0;
	
	$('#plan_error').html("");
	$('#price_error').html("");
	$('#description_error').html("");
	$('.note-frame').removeClass("autofocous");
	

  
	if (plan_name.trim() == '') {
		$('#plan_name_error').html("Please enter Plan Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#plan_name').focus();
		}
	}
	if (price.trim() == '') {
		$('#price_error').html("Please enter Price");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#price').focus();
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