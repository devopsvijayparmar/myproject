 @include('front.include.header')

 
  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section padd-top wow fadeInUp">

    <div class="container">
      <div class="section-title text-center" style="margin-bottom: 40px;">
        <h2>Customization  Support</h2>
        <p class="separator">We value your feedback and would greatly appreciate it if you could take a moment to share your thoughts on how we can improve websphare to better meet your needs and expectations</p>
      </div>
    </div>

    <div class="container">
	 @include('front.include.success_message')
      <div class="row justify-content-center">

        <div class="col-lg-7 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="customization_id" method="POST" action="{{url('/customization')}}" enctype="multipart/form-data" autocomplete="off">
			@method('POST')
			@csrf
			 <div class="form-group">
                <select name="site_name" class="form-control" id="site_name"/>
				    <option value="">Select Website</option>
					@foreach($sites as $site)
					<option @if(old('site_name') == $site->site_name) selected @endif  value="{{$site->site_name}}">{{$site->name}}</option>
					@endforeach
				<select>
                <span class="validation-error" id="site_name_error">{{$errors->register->first('site_name')}}</span>
              </div>
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
                <input type="text" class="form-control" name="subject" id="subject" placeholder="How can we improve?"/>
                <div class="validation"></div>
				<span class="validation-error" id="subject_error">{{$errors->contact_us_error->first('subject')}}</span>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" id="message" placeholder="Details"></textarea>
                <div class="validation"></div>
				<span class="validation-error" id="message_error">{{$errors->contact_us_error->first('message')}}</span>
              </div>
              <div class="text-center"><button class="btn" type="submit" style="width: 100%;">Send Message</button></div>
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
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! $validator->selector('#customization_id') !!}
<script>
$('#contacttab').addClass('menu-active');
</script>