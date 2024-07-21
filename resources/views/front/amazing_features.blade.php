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
 
 <section id="get-started" class="padd-section text-center wow fadeInUp padd-top" style="padding-bottom:0px!important">
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
            <img src="{{ $systemdata->image_url }}" alt="img" class="img-fluid">
            <h4>{{$systemdata->title}}</h4>
            <p>{!!$systemdata->description!!}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
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
            <img src="{{ $amazingfeaturesdata->image_url }}" alt="img" class="img-fluid">
            <h4>{{$amazingfeaturesdata->title}}</h4>
            <p>{{$amazingfeaturesdata->description}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>

@include('front.include.footer')
 <script>
$('#amazingtab').addClass('menu-active');
</script>