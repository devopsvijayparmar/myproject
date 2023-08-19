 @include('front.include.header')

  <section id="blog" style="padding-top:100px!important;" class="padd-section padd-top wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
            <img src="{{$webtemplates->image_url}}" alt="img">
          </div>
        </div>
		 <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
		    <h4 class="card_product_h4">Agency</h4>
			<div class="table_btn">
               <a href="{{$webtemplates->preview}}" target="_blank"  style="background:#009cff!important;border-radius: 0px!important;" class="csm-btn-3 btn"><i class="fa fa-search"></i>  Live Preview</a>
                <a style="border-radius: 0px!important;" href="{{url('/signup')}}/?site={{$webtemplates->site_name}}" class="csm-btn-4 btn"><i class="fa fa-wrench"></i> Build Your Website</a>
            </div>
            {!! $webtemplates->description !!}
			
          </div>
        </div>
      </div>
    </div>
  </section>
  
<section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Latest Web Templates</h2>
        <p class="separator">Discover the latest web templates, combining sleek design and innovative functionality, to elevate your online presence and captivate your audience with stunning visuals and seamless user experience. Stay ahead of the curve with these cutting-edge templates, tailored to meet the demands of modern web design and unlock the potential for limitless creativity.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
		@foreach($latest_webtemplates as $latest_webtemplates_data)
		<div class="col-md-6 col-lg-4 mb-5">
		<h4 class="card_product_h4">{{$latest_webtemplates_data->title}}</h4>
		  <div class="block-blog text-left">
			<a href="{{url('/web-templates')}}/{{$latest_webtemplates_data->slug}}"><img src="{{$latest_webtemplates_data->image_url}}" alt="img"></a>
		  </div>
		</div>
		@endforeach
      </div>
    </div>
  </section>
 @include('front.include.footer')
<script>
$('#templatetab').addClass('menu-active');
</script>