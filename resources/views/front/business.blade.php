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

<section id="about-us" class="about-us padd-top padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Business</h2>
        <p class="separator">Welcome to our Agile product team, where we foster a culture of connection, collaboration, and creativity. Partnering with us means gaining access to a dynamic and on-demand team dedicated to driving your growth and success.</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-6">
          <img class="" src="{{asset('uploads/front/business/business.png')}}" alt="About">
        </div>

        <div class="col-md-6">
          <div class="about-content">

            <h2><span>{{config('enum.site_title')}}</span>Your Ultimate Business Startup Solution </h2>
            <p>Welcome to our digital agency, where we pride ourselves on delivering tailored industry solutions that are perfectly aligned with your unique business needs. With our wealth of expertise and cutting-edge technology, we are your trusted partner in harnessing the power of the digital world to drive your success..
            </p>
			
			<p>At our agency, we understand that every industry has its own set of challenges and requirements. That's why we take the time to deeply understand your business, industry dynamics, and target audience. This allows us to develop customized digital solutions that address your specific pain points and help you achieve your goals.
            </p>
			
			<p>Whether you need a custom software solution to streamline your internal processes, an intuitive user interface to enhance customer experiences, or advanced data analytics to gain valuable insights, our team of skilled professionals is here to make it happen. We combine our technical expertise with a deep understanding of your industry to deliver exceptional results.
            </p>
			

          </div>
        </div>

      </div>
    </div>
  </section>
  
  <section id="screenshots" class="text-center padd-top wow fadeInUp" style="padding-bottom:0px!important">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('uploads/front/business/web-development.png')}}" alt="img" class="img-fluid">
            <h4>Web Development</h4>
           <p>Create a digital brand image for your physical business with a unique and intuitive website.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
                <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('uploads/front/business/app-settings.png')}}" alt="img" class="img-fluid">
            <h4>Mobile App Development</h4>
            <p>In the present world, mobile app is the biggest marketplace for every business, and we will help you create the biggest shop in this market.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
                <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('uploads/front/business/ui.png')}}" alt="img" class="img-fluid">
            <h4>UI/UX & Branding</h4>
            <p>The first thing that a user connects to is design, whether it’s a website, app, or software. Solidify user adoption with our UI/UX services.</p>
            <!--<a href="#">read more</a>-->

          </div>
        </div>
        </div>
        
    </div>

  </section>
  
  <section id="testimonials" class="padd-section padd-top text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">
                    <h2>Our Users Speack volumes us</h2>
                    <p>Welcome to our website builder platform, where our users speak volumes about our exceptional services. With our user-friendly interface and powerful features, we empower individuals and businesses to create stunning websites with ease.</p>
                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">
				    <h2>Our Users Speack volumes us</h2>
                    <p>Don't just take our word for it—our satisfied users are our best advocates. They have experienced firsthand the impact our website builder has had on their online presence. From entrepreneurs and small businesses to creative professionals and bloggers, our platform has helped them showcase their unique offerings and reach their target audience effectively.</p>
                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">
				    <h2>Our Users Speack volumes us</h2>
                    <p>Our intuitive drag-and-drop editor allows you to unleash your creativity and design a website that truly represents your brand. With a wide range of customizable templates and design elements, you can create a visually stunning website that captures the essence of your business.</p>
                  </div>
                </div>
				
				 <div class="carousel-item ">
                  <div class="top-top">
				    <h2>Our Users Speack volumes us</h2>
                    <p>But it's not just about looks. Our websites are built with performance in mind. We ensure fast loading times, mobile responsiveness, and search engine optimization, so your website not only looks great but also performs exceptionally well in the digital realm.</p>
                  </div>
                </div>
				
				 <div class="carousel-item ">
                  <div class="top-top">
				    <h2>Our Users Speack volumes us</h2>
                    <p>Our dedicated support team is always ready to assist you on your website-building journey. Whether you have questions, need guidance, or want to explore advanced features, we are here to help you every step of the way.</p>
                  </div>
                </div>
				
				 <div class="carousel-item ">
                  <div class="top-top">
					<h2>Our Users Speack volumes us</h2>
                    <p>Join our community of satisfied users and let your website speak volumes about your brand. Start building your online presence today with our website builder and unleash your business's full potential.</p>
                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
   <section id="contact" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
		 <h2 style="text-transform: none;">Have a project you'd like to talk about?</h2>
		  <p class="separator">Got a project in mind? Let's discuss your vision, requirements, and goals to bring it to life.Our team of experts is ready to collaborate, brainstorm, and provide valuable insights to make your project a success.Contact us today for a consultation and let's turn your ideas into reality.</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

         <div class="col-lg-4 col-md-4 p-0">
            <div class="">
              <p><img style="height: 34px;" src="{{asset('social/email.png')}}"> {{config('enum.support_email')}}</p>
            </div>
          <div class="">
            <a href="#" class="mr-3"><img style="height: 32px;" src="{{asset('social/facebook.png')}}"></a>
            <a href="#" class="mr-3"><img style="height: 32px;" src="{{asset('social/instagram.png')}}"></a>
            <a href="#" class="mr-3"><img style="height: 32px;" src="{{asset('social/linkedin.png')}}"></a>
          </div>
        </div>

        <div class="col-lg-7 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="business_form" method="POST" action="{{url('/business')}}" class="mt-2" enctype="multipart/form-data" autocomplete="off">
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
              <div class="text-center"><button class="btn" type="submit" style="width: 100%;">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>


 @include('front.include.footer')
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!!$validator->selector('#business_form')!!}
<script>
$('#businesstab').addClass('menu-active');

</script>