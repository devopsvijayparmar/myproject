
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contact Us</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section pb-40">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>GET IN TOUCH</h2>
              </div>
            </div>
            <div class="contact_information">
              <div class="col-md-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                   
                    <p>@if(isset($contact_us->address)) {!! $contact_us->address !!} @endif</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <p>@if(isset($contact_us->contact_1)) {!! $contact_us->contact_1 !!} @endif</p>
                    <p>@if(isset($contact_us->contact_2)) {!! $contact_us->contact_2 !!} @endif</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    
                    <p>@if(isset($contact_us->email)) {!! $contact_us->email !!} @endif</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h2 class="text_align_center">SEND MESSAGE</h2>
              <div class="form_section">
               
				<form  method="POST" action="{{url('contact-us')}}" enctype="multipart/form-data" id="main_id" class="form_contant">
			        @csrf
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                      <input class="field_custom  mb-0" placeholder="Your Name" type="text" name="name" id="name">
					  <span id="name_error" class="error-help-block">{{$errors->first('name')}}</span>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                      <input class="field_custom  mb-0" placeholder="Email Address" type="text" name="email" id="email">
					  <span id="email_error" class="error-help-block">{{$errors->first('email')}}</span>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                      <input class="field_custom mb-0" placeholder="Phone Number" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile">
					  <span id="mobile_error" class="error-help-block">{{$errors->first('mobile')}}</span>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                      <textarea class="field_custom  mb-0" placeholder="Messager" name="message" id="message"></textarea>
					  <span id="message_error" class="error-help-block">{{$errors->first('message')}}</span>
                    </div>
                    <div class="center"><button type="submit" class="btn main_bt">SUBMIT NOW</button></div>
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
$('#contact-us').addClass('active');
</script>
@endsection