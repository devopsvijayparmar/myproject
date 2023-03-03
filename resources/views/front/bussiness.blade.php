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
  
  <section class="about-area1 bottom-padding">
	<div class="container">
	<div class="row align-items-center ">
	<div class="col-xl-6 col-lg-7 col-md-8">

	<div class="about-img about-img1  ">
	<img src="https://preview.colorlib.com/theme/olla/assets/img/gallery/about1.jpg.webp" alt="">
	</div>
	</div>
	<div class="offset-xl-1 col-xxl-4 col-xl-5 col-lg-5 col-md-9">
	<div class="about-caption about-caption1">

	<div class="section-tittle mb-30">
	<h2>All the features<br> you’d expect.</h2>
	</div>
	<div class="single-about">
	<h5>Tons of pre-made sections</h5>
	<p>Combine sections from Olla's vast component library and create beautiful.</p>
	</div>
	<div class="single-about">
	<h5>Complete CMS integration</h5>
	<p>Facilisis ac eget mauris nulla enim a diam. Posuere vel eleifend augue laoreet non praesent ultrices..</p>
	</div>
	<div class="single-about b-0">
	<h5>Stellar after-sales support</h5>
	<p>Facilisis ac eget mauris nulla enim a diam. Posuere vel eleifend augue laoreet non praesent ultrices..</p>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>

<div class="whole-wrap">
<div class="container box_1170">
<div class="section-top-border">
<h3 class="mb-30">Left Aligned</h3>
<div class="row">
<div class="col-md-3">
<img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
</div>
<div class="col-md-9 mt-sm-20">
<p>Recently, the US Federal government banned online casinos from operating in America by making
it illegal to
transfer money to them through any US bank or payment system. As a result of this law, most
of the popular
online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
online casino
players found themselves being chased by the Federal government. But, after a fortnight, the
online casino
industry came up with a solution and new online casinos started taking root. These began to
operate under a
different business umbrella, and by doing that, rendered the transfer of money to and from
them legal. A major
part of this was enlisting electronic banking systems that would accept this new
clarification and start doing
business with me. Listed in this article are the electronic banking systems that accept
players from the United
States that wish to play in online casinos.</p>
</div>
</div>
</div>
<div class="section-top-border text-right">
<h3 class="mb-30">Right Aligned</h3>
<div class="row">
<div class="col-md-9">
<p class="text-right">Over time, even the most sophisticated, memory packed computer can begin
to run slow if we
don’t do something to prevent it. The reason why has less to do with how computers are made
and how they age and
more to do with the way we use them. You see, all of the daily tasks that we do on our PC
from running programs
to downloading and deleting software can make our computer sluggish. To keep this from
happening, you need to
understand the reasons why your PC is getting slower and do something to keep your PC
running at its best. You
can do this through regular maintenance and PC performance optimization programs</p>
<p class="text-right">Before we discuss all of the things that could be affecting your PC’s
performance, let’s
talk a little about what symptoms</p>
</div>
<div class="col-md-3">
<img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
</div>
</div>
</div>
<div class="section-top-border">
<h3 class="mb-30">Definition</h3>
<div class="row">
<div class="col-md-4">
<div class="single-defination">
<h4 class="mb-20">Definition 01</h4>
<p>Recently, the US Federal government banned online casinos from operating in America by
making it illegal to
transfer money to them through any US bank or payment system. As a result of this law,
most of the popular
online casino networks</p>
</div>
</div>
<div class="col-md-4">
<div class="single-defination">
<h4 class="mb-20">Definition 02</h4>
<p>Recently, the US Federal government banned online casinos from operating in America by
making it illegal to
transfer money to them through any US bank or payment system. As a result of this law,
most of the popular
online casino networks</p>
</div>
</div>
<div class="col-md-4">
<div class="single-defination">
<h4 class="mb-20">Definition 03</h4>
<p>Recently, the US Federal government banned online casinos from operating in America by
making it illegal to
transfer money to them through any US bank or payment system. As a result of this law,
most of the popular
online casino networks</p>
</div>
</div>
</div>
</div>
<div class="section-top-border">
<h3 class="mb-30">Block Quotes</h3>
<div class="row">
<div class="col-lg-12">
<blockquote class="generic-blockquote">
“Recently, the US Federal government banned online casinos from operating in America by
making it illegal to
transfer money to them through any US bank or payment system. As a result of this law, most
of the popular
online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
online casino
players found themselves being chased by the Federal government. But, after a fortnight, the
online casino
industry came up with a solution and new online casinos started taking root. These began to
operate under a
different business umbrella, and by doing that, rendered the transfer of money to and from
them legal. A major
part of this was enlisting electronic banking systems that would accept this new
clarification and start doing
business with me. Listed in this article are the electronic banking”
</blockquote>
</div>
</div>
</div>
<div class="section-top-border">
<h3 class="mb-30">Table</h3>
<div class="progress-table-wrap">
<div class="progress-table">
<div class="table-head">
<div class="serial">#</div>
<div class="country">Countries</div>
<div class="visit">Visits</div>
<div class="percentage">Percentages</div>
</div>
<div class="table-row">
<div class="serial">01</div>
<div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">02</div>
<div class="country"> <img src="assets/img/elements/f2.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">03</div>
<div class="country"> <img src="assets/img/elements/f3.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">04</div>
<div class="country"> <img src="assets/img/elements/f4.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">05</div>
<div class="country"> <img src="assets/img/elements/f5.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">06</div>
<div class="country"> <img src="assets/img/elements/f6.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">07</div>
<div class="country"> <img src="assets/img/elements/f7.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="table-row">
<div class="serial">08</div>
<div class="country"> <img src="assets/img/elements/f8.jpg" alt="flag">Canada</div>
<div class="visit">645032</div>
<div class="percentage">
<div class="progress">
<div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="section-top-border">
<h3>Image Gallery</h3>
<div class="row gallery-item">
<div class="col-md-4">
<a href="assets/img/elements/g1.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g1.jpg);"></div>
</a>
</div>
<div class="col-md-4">
<a href="assets/img/elements/g2.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g2.jpg);"></div>
</a>
</div>
<div class="col-md-4">
<a href="assets/img/elements/g3.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g3.jpg);"></div>
</a>
</div>
<div class="col-md-6">
<a href="assets/img/elements/g4.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
</a>
</div>
<div class="col-md-6">
<a href="assets/img/elements/g5.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
</a>
</div>
<div class="col-md-4">
<a href="assets/img/elements/g6.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g6.jpg);"></div>
</a>
</div>
<div class="col-md-4">
<a href="assets/img/elements/g7.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g7.jpg);"></div>
</a>
</div>
<div class="col-md-4">
<a href="assets/img/elements/g8.jpg" class="img-pop-up">
<div class="single-gallery-image" style="background: url(assets/img/elements/g8.jpg);"></div>
</a>
</div>
</div>
</div>
<div class="section-top-border">
<div class="row">
<div class="col-md-4">
<h3 class="mb-20">Image Gallery</h3>
<div class="typography">
<h1>This is header 01</h1>
<h2>This is header 02</h2>
<h3>This is header 03</h3>
<h4>This is header 04</h4>
<h5>This is header 01</h5>
<h6>This is header 01</h6>
</div>
</div>
<div class="col-md-4 mt-sm-30">
<h3 class="mb-20">Unordered List</h3>
<div class="">
<ul class="unordered-list">
<li>Fta Keys</li>
<li>For Women Only Your Computer Usage</li>
<li>Facts Why Inkjet Printing Is Very Appealing
<ul>
<li>Addiction When Gambling Becomes
<ul>
<li>Protective Preventative Maintenance</li>
</ul>
</li>
</ul>
</li>
<li>Dealing With Technical Support 10 Useful Tips</li>
<li>Make Myspace Your Best Designed Space</li>
<li>Cleaning And Organizing Your Computer</li>
</ul>
</div>
</div>
<div class="col-md-4 mt-sm-30">
<h3 class="mb-20">Ordered List</h3>
<div class="">
<ol class="ordered-list">
<li><span>Fta Keys</span></li>
<li><span>For Women Only Your Computer Usage</span></li>
<li><span>Facts Why Inkjet Printing Is Very Appealing</span>
<ol class="ordered-list-alpha">
<li><span>Addiction When Gambling Becomes</span>
<ol class="ordered-list-roman">
<li><span>Protective Preventative Maintenance</span></li>
</ol>
</li>
</ol>
</li>
<li><span>Dealing With Technical Support 10 Useful Tips</span></li>
<li><span>Make Myspace Your Best Designed Space</span></li>
<li><span>Cleaning And Organizing Your Computer</span></li>
</ol>
</div>
</div>
</div>
</div>
<div class="section-top-border">
<div class="row">
<div class="col-lg-8 col-md-8">
<h3 class="mb-30">Form Element</h3>
<form action="#">
<div class="mt-10">
<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input" fdprocessedid="knu1ge">
</div>
<div class="mt-10">
<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input" fdprocessedid="cfe0g">
</div>
<div class="mt-10">
<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input" fdprocessedid="t2uce6f">
</div>
<div class="mt-10">
<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input" fdprocessedid="1gffa">
</div>
<div class="input-group-icon mt-10">
<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input" fdprocessedid="0gmfme">
</div>
<div class="input-group-icon mt-10">
<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
<div class="form-select" id="default-select" "="">
<select style="display: none;">
<option value=" 1">City</option>
<option value="1">Dhaka</option>
<option value="1">Dilli</option>
<option value="1">Newyork</option>
<option value="1">Islamabad</option>
</select><div class="nice-select" tabindex="0"><span class="current">City</span><ul class="list"><li data-value=" 1" class="option selected">City</li><li data-value="1" class="option">Dhaka</li><li data-value="1" class="option">Dilli</li><li data-value="1" class="option">Newyork</li><li data-value="1" class="option">Islamabad</li></ul></div>
</div>
</div>
<div class="input-group-icon mt-10">
<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
<div class="form-select" id="default-select" "="">
<select style="display: none;">
<option value=" 1">Country</option>
<option value="1">Bangladesh</option>
<option value="1">India</option>
<option value="1">England</option>
<option value="1">Srilanka</option>
</select><div class="nice-select" tabindex="0"><span class="current">Country</span><ul class="list"><li data-value=" 1" class="option selected">Country</li><li data-value="1" class="option">Bangladesh</li><li data-value="1" class="option">India</li><li data-value="1" class="option">England</li><li data-value="1" class="option">Srilanka</li></ul></div>
</div>
</div>
<div class="mt-10">
<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
</div>
<div class="mt-10">
<input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required="" class="single-input-primary" fdprocessedid="9nuz4m">
</div>
<div class="mt-10">
<input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required="" class="single-input-accent" fdprocessedid="ggpode">
</div>
<div class="mt-10">
<input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required="" class="single-input-secondary" fdprocessedid="jl89k">
</div>
</form>
</div>
<div class="col-lg-3 col-md-4 mt-sm-30">
<div class="single-element-widget">
<h3 class="mb-30">Switches</h3>
<div class="switch-wrap d-flex justify-content-between">
<p>01. Sample Switch</p>
<div class="primary-switch">
<input type="checkbox" id="default-switch">
<label for="default-switch"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>02. Primary Color Switch</p>
<div class="primary-switch">
<input type="checkbox" id="primary-switch" checked="">
<label for="primary-switch"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>03. Confirm Color Switch</p>
<div class="confirm-switch">
<input type="checkbox" id="confirm-switch" checked="">
<label for="confirm-switch"></label>
</div>
</div>
</div>
<div class="single-element-widget mt-30">
<h3 class="mb-30">Selectboxes</h3>
<div class="default-select" id="default-select" "="">
<select style="display: none;">
<option value=" 1">English</option>
<option value="1">Spanish</option>
<option value="1">Arabic</option>
<option value="1">Portuguise</option>
<option value="1">Bengali</option>
</select><div class="nice-select" tabindex="0"><span class="current">English</span><ul class="list"><li data-value=" 1" class="option selected">English</li><li data-value="1" class="option">Spanish</li><li data-value="1" class="option">Arabic</li><li data-value="1" class="option">Portuguise</li><li data-value="1" class="option">Bengali</li></ul></div>
</div>
</div>
<div class="single-element-widget mt-30">
<h3 class="mb-30">Checkboxes</h3>
<div class="switch-wrap d-flex justify-content-between">
<p>01. Sample Checkbox</p>
<div class="primary-checkbox">
<input type="checkbox" id="default-checkbox">
<label for="default-checkbox"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>02. Primary Color Checkbox</p>
<div class="primary-checkbox">
<input type="checkbox" id="primary-checkbox" checked="">
<label for="primary-checkbox"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>03. Confirm Color Checkbox</p>
<div class="confirm-checkbox">
<input type="checkbox" id="confirm-checkbox">
<label for="confirm-checkbox"></label>
</div>
</div>
 <div class="switch-wrap d-flex justify-content-between">
<p>04. Disabled Checkbox</p>
<div class="disabled-checkbox">
<input type="checkbox" id="disabled-checkbox" disabled="">
<label for="disabled-checkbox"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>05. Disabled Checkbox active</p>
<div class="disabled-checkbox">
<input type="checkbox" id="disabled-checkbox-active" checked="" disabled="">
<label for="disabled-checkbox-active"></label>
</div>
</div>
</div>
<div class="single-element-widget mt-30">
<h3 class="mb-30">Radios</h3>
<div class="switch-wrap d-flex justify-content-between">
<p>01. Sample radio</p>
<div class="primary-radio">
<input type="checkbox" id="default-radio">
<label for="default-radio"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>02. Primary Color radio</p>
<div class="primary-radio">
<input type="checkbox" id="primary-radio" checked="">
<label for="primary-radio"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>03. Confirm Color radio</p>
<div class="confirm-radio">
<input type="checkbox" id="confirm-radio" checked="">
<label for="confirm-radio"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>04. Disabled radio</p>
<div class="disabled-radio">
<input type="checkbox" id="disabled-radio" disabled="">
<label for="disabled-radio"></label>
</div>
</div>
<div class="switch-wrap d-flex justify-content-between">
<p>05. Disabled radio active</p>
<div class="disabled-radio">
<input type="checkbox" id="disabled-radio-active" checked="" disabled="">
<label for="disabled-radio-active"></label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 @include('front.include.footer')
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!!$validator->selector('#bussiness_form')!!}
<script>
$('#bussinesstab').addClass('menu-active');

</script>