 @include('front.include.header')

<section id="contact" class="padd-section padd-top wow fadeInUp">
    <div class="container">
      <div class="section-title padd-bottom text-center">
        <h2>Contact Support</h2>
         <p class="separator">If you're experiencing any issues or have any questions, please don't hesitate to contact support for assistance.</p>
      </div>
    </div>

    <div class="container">
	 @include('front.include.success_message')
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 p-0">
            <div class="">
              <p><img style="height: 34px;" src="{{asset('social/email.png')}}"> {{config('enum.support_email')}}</p>
            </div>
          <div class="">
            <a href="{{$contactus->facebook}}" target="_blank" class="mr-3"><img style="height: 32px;" src="{{asset('social/facebook.png')}}"></a>
            <a href="{{$contactus->instagram}}" target="_blank" class="mr-3"><img style="height: 32px;" src="{{asset('social/instagram.png')}}"></a>
            <a href="{{$contactus->linkedin}}" target="_blank" class="mr-3"><img style="height: 32px;" src="{{asset('social/linkedin.png')}}"></a>
          </div>
        </div>

        <div class="col-lg-7 col-md-8 p-0">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="contact_us_id" method="POST" action="{{url('/front-contact-us')}}" enctype="multipart/form-data" autocomplete="off">
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
			   <div class="text-center"><button class="btn" type="submit" style="width: 100%;">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 @include('front.include.footer')
  <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! $validator->selector('#contact_us_id') !!}
<script>
$('#contacttab').addClass('menu-active');
</script>