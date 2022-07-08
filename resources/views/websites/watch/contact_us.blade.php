 @include('websites.watch.include.header')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contact Us</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}/{{$title}}">Home</a></li>
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
<div class="section padding_layout_1">
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
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                   
                    <p>@if(isset($contact_us->address)) {!! $contact_us->address !!} @endif</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <p>@if(isset($contact_us->contact_1)) <i class="fa fa-phone"></i> {!! $contact_us->contact_1 !!} @endif</p>
                    <p>@if(isset($contact_us->contact_2)) <i class="fa fa-phone"></i> {!! $contact_us->contact_2 !!} @endif</p>
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
              <h2 class="text_align_center">SEND MESSAGER</h2>
              <div class="form_section">
               
				<form  method="POST" action="{{url('/')}}/{{$title}}/contact-us" enctype="multipart/form-data" id="main_id" class="form_contant">
			        @csrf
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-4 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Your Name" type="text" name="name" id="name">
					  <span id="name_error" style="color:red;"></span>
                    </div>
                    <div class="field col-lg-4 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom  mb-0" placeholder="Email Address" type="text" name="email" id="email">
					  <span id="email_error" style="color:red;"></span>
                    </div>
                    <div class="field col-lg-4 col-md-4 col-sm-8 col-xs-8 mb-2">
                      <input class="field_custom mb-0" placeholder="Phone Number" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile">
					  <span id="mobile_error" style="color:red;"></span>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                      <textarea class="field_custom  mb-0" placeholder="Messager" name="message" id="message"></textarea>
					  <span id="message_error" style="color:red;"></span>
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

<!-- footer -->
 @include('websites.watch.include.footer')
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
	var email = $('#email').val();
	var mobile = $('#mobile').val();
	var message = $('#message').val();
	
	
	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#email_error').html("");
	$('#mobile_error').html("");
	$('#message_error').html("");
	
    function ValidateEmail(email) {
		var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		return expr.test(email);
	};
  
	if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
		}
	}
	if (email.trim() == '') {
		$('#email_error').html("Please enter Email");
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
			$('#email_error').html("Please enter valid email");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#email').focus();
			}
		}
	}
	if (mobile.trim() == '') {
		$('#mobile_error').html("Please enter Mobile");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#mobile').focus();
		}
	}
	if (message.trim() == '') {
		$('#message_error').html("Please enter Message");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#message').focus();
		}
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
});

$('#contact-us').addClass('active');
</script>