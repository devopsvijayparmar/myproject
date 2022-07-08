 @include('front.include.header')
  <!--==========================
    Hero Section
  ============================-->
 
  <section id="about-us" class="about-us padd-section wow fadeInUp" style="padding-bottom:0px!important;padding-top: 50px!important;">
   
	<div class="owl-carousel owl-theme home-carousel">
	   @foreach($slider as $sliderdata)
		<div class="item">
			<img class="home-img" src="{{ url('/uploads/slider') }}/{{$sliderdata->image}}">
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
        <p class="separator">Manage, Promote and Grow Your Business Online .</p>

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
        <h2>Web Template Categories </h2>
        <p class="separator">Make your own website and get built-in tools to grow your business online.</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">
	    @foreach($webtemplates as $webtemplatesdata)
        <a href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}"><div><h4 class="pull-left">{{$webtemplatesdata->title}}</h4><img src="{{ url('/uploads/front/web_templates') }}/{{$webtemplatesdata->image}}" alt="img" class="img-responsive" style="height:300px!important;"></div></a>
		@endforeach
      </div>
    </div>

  </section>



  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp" style="padding-bottom:0px!important">

    <div class="container">
      <div class="section-title text-center">
        <h2>Amazing Features</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
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
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> {{$pricingdata->button_name}}</a>
              </div>
            </div>
          </div>
        </div>
		@endforeach
		
		
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