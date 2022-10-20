 @include('websites.bookstore.include.header')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Order</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}/{{$title}}">Home</a></li>
                <li class="active">Order</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>DELIVERY ADDRESS</h2>
              </div>
            </div>
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <div class="form_section">
               
				<form  method="POST" action="{{url('/')}}/{{$title}}/order" enctype="multipart/form-data" id="main_id" class="form_contant">
			        @csrf
                  <fieldset>
                  <div class="row">
                    <input type="hidden" name="quantity" value="{{$quantity}}">
                    <input type="hidden" name="product_id" value="{{$product_id}}">
                    <input type="hidden" name="url" value="single-product">
                    <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Full name" type="text" name="name" id="name" maxlength="255">
					  <span id="name_error" style="color:red;"></span>
                    </div>
					
					<div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Mobile number" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile" maxlength="10">
					  <span id="mobile_error" style="color:red;"></span>
                    </div>
					
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Email Address" type="text" name="email" id="email" maxlength="255">
					  <span id="email_error" style="color:red;"></span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Pincode" type="text" name="pincode" id="pincode" maxlength="255">
					  <span id="pincode_error" style="color:red;"></span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Flat, House no., Building, Company, Apartment" type="text" name="company" id="company" maxlength="255">
					  <span id="company_error" style="color:red;"></span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Area, Street, Sector, Village" type="text" name="area" id="area" maxlength="255">
					  <span id="area_error" style="color:red;"></span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Landmark" type="text" name="landmark" id="landmark" maxlength="255">
					  <span id="landmark_error" style="color:red;"></span>
                    </div>
					
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Town/City" type="text" name="city" id="city" maxlength="255">
					  <span id="city_error" style="color:red;"></span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="State" type="text" name="state" id="state" maxlength="255">
					  <span id="state_error" style="color:red;"></span>
                    </div>
                    <div class="center"><button type="submit" class="btn main_bt">ORDER NOW</button></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- footer -->
@include('websites.bookstore.include.footer')
<script>
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

 $('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	
	var name = $('#name').val();
	var mobile = $('#mobile').val();
	var email = $('#email').val();
	var pincode = $('#pincode').val();
	var company = $('#company').val();
	var area = $('#area').val();
	var landmark = $('#landmark').val();
	var city = $('#city').val();
	var state = $('#state').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#mobile_error').html("");
	$('#email_error').html("");
	$('#pincode_error').html("");
	$('#company_error').html("");
	$('#area_error').html("");
	$('#landmark_error').html("");
	$('#city_error').html("");
	$('#state_error').html("");
	
    function ValidateEmail(email) {
		var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		return expr.test(email);
	};
  
	if (name.trim() == '') {
		$('#name_error').html("Please enter Full name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
		}
	}
	
	if (mobile.trim() == '') {
		$('#mobile_error').html("Please enter Mobile number");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#mobile').focus();
		}
	}
	
	if (email.trim() == '') {
		$('#email_error').html("Please enter Email Address");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		}
	}
	 if(email)
	{
		if (!ValidateEmail(email)) {
			$('#email_error').html("Please enter valid Email Address");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#email').focus();
			}
		}
	}
	
	if (pincode.trim() == '') {
		$('#pincode_error').html("Please enter Pincode");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#pincode').focus();
		}
	}
	
	if (company.trim() == '') {
		$('#company_error').html("Please enter Flat, House no., Building, Company, Apartment");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#company').focus();
		}
	}
	
	if (area.trim() == '') {
		$('#area_error').html("Please enter Area, Street, Sector, Village");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#area').focus();
		}
	}
	
	if (landmark.trim() == '') {
		$('#landmark_error').html("Please enter Landmark");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#landmark').focus();
		}
	}
	
	if (city.trim() == '') {
		$('#city_error').html("Please enter Town/City");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#city').focus();
		}
	}
	
	if (state.trim() == '') {
		$('#state_error').html("Please enter State");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#state').focus();
		}
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
});

$('#products').addClass('active');
</script>