 @include('front.include.header')

 
  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact Support</h2>
      
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="main_id12" method="POST" action="{{url('/front-contact-us')}}" enctype="multipart/form-data" autocomplete="off">
			@method('POST')
			@csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                <div class="validation"></div>
               <span class="validation-error" id="name_error">{{$errors->contact_us_error->first('name')}}</span>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                <div class="validation"></div>
				<span class="validation-error" id="email_error">{{$errors->contact_us_error->first('email')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                <div class="validation"></div>
				<span class="validation-error" id="subject_error">{{$errors->contact_us_error->first('subject')}}</span>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" id="message"></textarea>
                <div class="validation"></div>
				<span class="validation-error" id="message_error">{{$errors->contact_us_error->first('message')}}</span>
              </div>
              <div class="text-center"><button type="submit" style="width: 100%;">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
 @include('front.include.footer')
<script>
$('#contacttab').addClass('menu-active');

$('#main_id12').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	
	var name = $('#name').val();
	var email = $('#email').val();
	var subject = $('#subject').val();
	var message = $('#message').val();
	
	var cnt = 0;
	var f = 0;
	
	$('#name_error').html("");
	$('#email_error').html("");
	$('#subject_error').html("");
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
			$('#title').focus();
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
	
	if(subject.trim() ==''){
		$('#subject_error').html("Please enter Subject");
		cnt =1;
		f++;
		if(f == 1)
		{
			$('#subject').focus();
		}
	
	}
	
	if(message.trim() ==''){
		$('#message_error').html("Please enter Message");
		cnt =1;
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
 

</script>