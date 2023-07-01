 @include('front.include.header')

 <style>
 .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
}
.centered h1{
	 color:white;
}
.centered p{
	color:white;
	font-size: 14px;
	font-weight:400;
	font-family: "Roboto", "Arial","sans-serif";
}
 </style>
  <!--==========================
    Hero Section
  ============================-->
 
  <section id="about-us" class="about-us padd-section wow fadeInUp" style="padding-bottom:0px!important;padding-top: 50px!important;">
   
	<div class="owl-carousel owl-theme home-carousel">
	   @foreach($slider as $sliderdata)
		<div class="item">
			<img class="home-img" src="{{ url('/uploads/slider') }}/{{$sliderdata->image}}">
			 <a href="{{$sliderdata->url}}"><div class="centered"><h1>{{$sliderdata->title}}</h1></br><p>{!!$sliderdata->description!!}</p></div>	</a>
			
		</div>
		@endforeach
	</div>
	
  </section>
 


  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">

        <h2>simple system</h2>
        <p class="separator">Our platform provides the tools and resources you need to manage, promote, and grow your business online, helping you reach a wider audience and achieve your business goals.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        @foreach($system as $systemdata)
        <div class="col-md-6 col-lg-4">
          <div class="feature-block">
            <img src="{{ url('/uploads/front/system') }}/{{$systemdata->image}}" alt="img" class="img-fluid">
            <h4>{{$systemdata->title}}</h4>
            <p>{!!$systemdata->description!!}</p>
            <!--<a href="#">read more</a>-->
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </section>


 <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">
        <h2>Web Template Categories</h2>
        <p class="separator">Build your brand's online presence and expand your business with a professional website.Leverage the internet's potential to reach a wider audience, increase visibility, and boost sales.</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">
	    @foreach($webtemplates as $webtemplatesdata)
        <a href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}"><div><h4 class="pull-left card_product_h4">{{$webtemplatesdata->title}}</h4><img src="{{ url('/uploads/front/web_templates') }}/{{$webtemplatesdata->image}}" alt="img" class="img-responsive" style="height:250px!important;"></div></a>
		@endforeach
      </div>
    </div>
	<a href="{{ url('/web-templates') }}" target="_blank" class="csm-btn-1 btn">See more...</a>

  </section>



  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">
        <h2>Amazing Features</h2>
        <p class="separator">Our website builder offers customizable templates, drag-and-drop interface, e-commerce integrations, and more amazing features to create stunning and functional websites with ease.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        
		@foreach($amazingfeatures as $amazingfeaturesdata)
        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="{{ url('/uploads/front/amazing_features') }}/{{$amazingfeaturesdata->image}}" alt="img" class="img-fluid">
            <h4>{{$amazingfeaturesdata->title}}</h4>
            <p>{{$amazingfeaturesdata->description}}</p>
          </div>
        </div>
        @endforeach
      

      </div>
    </div>
  </section>

  <!--==========================
    Pricing Table Section
  ============================-->
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Premium Plans.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
	  
		@foreach($pricing as $pricingdata)
        <div class="col-md-6 col-lg-4">
          <div class="block-pricing">
            <div class="table">
              <h3>{{$pricingdata->plan_name}}</h3>
              <h2 style="margin:0px!important;">{{$pricingdata->price_text}}</h2>
			  <p>{{$pricingdata->duration}}</p>
				  {!! $pricingdata->description !!}
              <div class="table_btn">
			  @if($pricingdata->button_name != 'Upcomming...')
                <a href="{{url('register')}}" class="btn btn-pricing"><i class="fa fa-shopping-cart"></i> {{$pricingdata->button_name}}</a>
			  @else
				   <a href="javascript:void(0)" class="btn btn-pricing"> {{$pricingdata->button_name}}</a>
			  @endif
              </div>
            </div>
          </div>
        </div>
		@endforeach
      </div>
    </div>
  </section>
  
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest Web Templates</h2>
        <p class="separator">Build your brand's online presence and expand your business with a professional website.Leverage the internet's potential to reach a wider audience, increase visibility, and boost sales.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('front/img/blog/blog-image-1.jpg')}}" alt="img"></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('front/img/blog/blog-image-2.jpg')}}" class="img-responsive" alt="img"></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('front/img/blog/blog-image-3.jpg')}}" class="img-responsive" alt="img"></a>
          </div>
        </div>
		
		
      </div>
    </div>
  </section>



  <!--==========================
    Footer
  ============================-->
 @include('front.include.footer')
 <script>
 $('.home-carousel').owlCarousel({
    loop:true,
    autoplayTimeout:12000,
	autoplay:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        }
    }
});

$('#hometab').addClass('menu-active');
</script>