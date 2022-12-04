 @include('front.include.header')
<style>
a:hover {
    text-decoration: none!important;
}
.error-help-block{
	color:red;
}
</style>
 <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!--==========================
    Contact Section
  ============================-->
		<!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">
		<h2><strong style="color:#1a2b5f!important">We are here for your business</strong></h2>
        <p class="separator" style="color: #1a2b5f;">Connecting every dot from design to Web development or mobile app development is our claim to fame. We’re your digital partner for catering bespoke industry equipped solutions to strictly meet your business requirements.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

       
       
      </div>
    </div>

  </section>


 <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">
        <h2><strong style="color:#1647ad!important">Connect, Collaborate and Create</strong> </h2>
		 <p class="separator" style="color: #1a2b5f;">Partner with us to work with on-demand Agile product team. We are always committed to your growth.</p>
      </div>
    </div>

      <div class="container">
    <div class="row">

          <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="http://127.0.0.1:8000/uploads/front/system/20210801040911cloud.svg" alt="img" class="img-fluid">
            <h4>Web development</h4>
           <p>Let’s get your business set up in the digital space with a unique and intuitive website, a digital brand image for your physical business.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
                <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="http://127.0.0.1:8000/uploads/front/system/20210801041749planet.svg" alt="img" class="img-fluid">
            <h4>Mobile App Development</h4>
            <p>In the present world, mobile app is the biggest marketplace for every business, and we will help you create the biggest shop in this market.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
                <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="http://127.0.0.1:8000/uploads/front/system/20210801041820asteroid.svg" alt="img" class="img-fluid">
            <h4>UI/UX & Branding</h4>
            <p>The first thing that a user connects to is design, whether it’s a website, app, or software. Solidify user adoption with our UI/UX services.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
        </div>
        
    </div>

  </section>
  
  
 <section id="contact" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">

        <h2><strong style="color:#1a2b5f!important">Have a project you'd like to talk about?</strong></h2>

      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
          
            <div class="email">
              <i style="color:black!important" class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i style="color:black!important" class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>
        </div>

        <div class="col-lg-7 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
			
			@auth
			<a style="color: black;" href="{{url('/chat')}}" class="">
				<i style="font-size: 20px; font-weight: 600;" class="far fa-comments"></i> Click here to chat with us... @if($message) @if($message->is_read == 0)<span class="badge badge-danger">1</span>@endif @endif
			</a>
			@else
			<a style="color: black;" href="javascript:void(0)" class="" onclick="loginPopup('chat');" >
				<i style="font-size: 20px; font-weight: 600;" class="far fa-comments"></i> Click here to chat with us... 
			</a>
			@endauth
			
			</br>
			<p class="text-center m-0"><strong>Or</strong></p> 
			
			
            <div id="errormessage"></div>
            <form id="bussiness_form" method="POST" action="{{url('/bussiness')}}" class="mt-2" enctype="multipart/form-data" autocomplete="off">
			@method('POST')
			@csrf
			  <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" maxlength="255" placeholder="Name"/>
                <div class="validation"></div>
               <span class="validation-error" id="name_error">{{$errors->first('name')}}</span>
              </div>
			   <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" maxlength="255" placeholder="Email"/>
                <div class="validation"></div>
				<span class="validation-error" id="email_error">{{$errors->first('email')}}</span>
              </div>
              </div>
			  <div class="row">
			   <div class="form-group col-md-6">
                <input type="text" class="form-control" name="country" id="country" maxlength="255" placeholder="Country"/>
                <div class="validation"></div>
				<span class="validation-error" id="country_error">{{$errors->first('country')}}</span>
              </div>
			   <div class="form-group col-md-6">
                <input type="text" class="form-control"  onkeypress="return isNumberKey(event)" maxlength="10" name="phone" id="phone" placeholder="Phone"/>
                <div class="validation"></div>
				<span class="validation-error" id="phone_error">{{$errors->first('phone')}}</span>
              </div>
              </div>
			  
			   <div class="form-group">
                <textarea class="form-control" name="about" rows="5" id="about" placeholder="About you..." maxlength="1000"></textarea>
                <div class="validation"></div>
				<span class="validation-error" id="about_error">{{$errors->first('about')}}</span>
              </div>
             
              <div class="form-group">
                <textarea class="form-control" name="project_detail" rows="5" id="project_detail" placeholder="Project detail..." maxlength="10000"></textarea>
                <div class="validation"></div>
				<span class="validation-error" id="project_detail_error">{{$errors->first('project_detail')}}</span>
              </div>
              <div class="text-center"><button type="submit" style="width: 100%;background:#1a2b5f!important">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>

 @include('front.include.footer')
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!!$validator->selector('#bussiness_form')!!}
<script>
$('#bussinesstab').addClass('menu-active');

</script>