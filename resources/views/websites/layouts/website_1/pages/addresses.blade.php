
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
                <li><a href="{{url('/')}}">Home</a></li>
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
               
				<form  method="POST" action="{{url('order')}}" enctype="multipart/form-data" id="main_id" class="form_contant">
			        @csrf
                  <fieldset>
                  <div class="row">
                    <input type="hidden" name="quantity" value="{{$quantity}}">
                    <input type="hidden" name="product_id" value="{{$product_id}}">
                    <input type="hidden" name="url" value="single-product">
					 @yield('addresses_product_type')
                    <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Full name" type="text" name="name" id="name" maxlength="255">
					  <span id="name_error" class="error-help-block">{{$errors->first('name')}}</span>
                    </div>
					
					<div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Mobile number" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile" maxlength="10">
					  <span id="mobile_error" class="error-help-block">{{$errors->first('mobile')}}</span>
                    </div>
					
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Email Address" type="text" name="email" id="email" maxlength="255">
					  <span id="email_error" class="error-help-block">{{$errors->first('email')}}</span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Pincode" type="text" name="pincode" id="pincode" maxlength="255">
					  <span id="pincode_error" class="error-help-block">{{$errors->first('pincode')}}</span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Flat, House no., Building, Company, Apartment" type="text" name="company" id="company" maxlength="255">
					  <span id="company_error" class="error-help-block">{{$errors->first('company')}}</span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Area, Street, Sector, Village" type="text" name="area" id="area" maxlength="255">
					  <span id="area_error" class="error-help-block">{{$errors->first('area')}}</span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Landmark" type="text" name="landmark" id="landmark" maxlength="255">
					  <span id="landmark_error" class="error-help-block">{{$errors->first('landmark')}}</span>
                    </div>
					
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Town/City" type="text" name="city" id="city" maxlength="255">
					  <span id="city_error" class="error-help-block">{{$errors->first('city')}}</span>
                    </div>
					 <div class="field col-lg-12 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="State" type="text" name="state" id="state" maxlength="255">
					  <span id="state_error" class="error-help-block">{{$errors->first('state')}}</span>
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

@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!!$validator->selector('#main_id')!!}
<script>
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

$('#products').addClass('active');
</script>
@endsection