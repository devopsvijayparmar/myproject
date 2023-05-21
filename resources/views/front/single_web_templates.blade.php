 @include('front.include.header')

  <!--==========================
    Team Section
  ============================-->
  <section id="blog" style="padding-top:100px!important;" class="padd-section padd-top wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
            <a href="{{$webtemplates->url}}" target="_blank"><img src="{{ url('/uploads/front/web_templates') }}/{{$webtemplates->image}}" alt="img"></a>
          </div>
        </div>
		 <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
		    <h4 class="card_product_h4">Agency</h4>
			<div class="table_btn">
               <a href="{{$webtemplates->url}}" target="_blank" class="csm-btn-3 btn"><i class="fa fa-search"></i>  Demo Preview</a>
                <a href="{{url('/signup')}}/?site={{$webtemplates->slug}}" class="csm-btn-4 btn"><i class="fa fa-wrench"></i> Build Your Website</a>
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

        <h2>Latest Webtemplates</h2>
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
$('#templatetab').addClass('menu-active');
</script>