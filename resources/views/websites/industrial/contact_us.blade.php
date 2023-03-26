 @include('websites.industrial.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Contact Us</h2>
					<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Contact Us</a>
                </div>
              
            </div>
        </div>
    </section><!--/#cta-->
    
	<section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contact Us</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Email</h4>
                                <p>@if(isset($contact_us->email)) {{ $contact_us->email }} @endif</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Address</h4>
                                <p>@if(isset($contact_us->address)) {{$contact_us->address }} @endif</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Contact No.</h4>
                                <p>@if(isset($contact_us->contact_1)) <i class="fa fa-phone"></i> {{ $contact_us->contact_1 }} @endif</p>
                                <p>@if(isset($contact_us->contact_2)) <i class="fa fa-phone"></i> {{ $contact_us->contact_2 }} @endif</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
								<form  method="POST" action="{{url('/contact-us')}}" enctype="multipart/form-data" id="main_id" class="form_contant">
								@csrf
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name">
									<span id="name_error" style="color:red;"></span>
								</div>
								<div class="form-group">
									<input type="text" name="email" id="email" class="form-control" placeholder="Email">
									<span id="email_error" style="color:red;"></span>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Mobile" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile">
									<span id="mobile_error" style="color:red;"></span>
								</div>
							
								<div class="form-group">
									<textarea class="form-control" rows="8" placeholder="Message"  name="message" id="message"></textarea>
									<span id="message_error" style="color:red;"></span>
								</div>
								<button type="submit" class="btn btn-primary">Send Message</button>
							</form>
					    </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
  @include('websites.industrial.include.footer')
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

$('#contact-us-tab').addClass('active');
</script>