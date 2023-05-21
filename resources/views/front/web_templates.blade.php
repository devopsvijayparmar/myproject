 @include('front.include.header')

  <!--==========================
    Team Section
  ============================-->
  <section id="blog" class="padd-section padd-top wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Web Templates</h2>
        <p class="separator">Build your brand's online presence and expand your business with a professional website.Leverage the internet's potential to reach a wider audience, increase visibility, and boost sales.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach($webtemplates as $webtemplatesdata)
		<div class="col-md-6 col-lg-4 col-xl-3">
		 <h4 class="card_product_h4">{{$webtemplatesdata->title}}</h4>
			<div class="card text-center card-product">
				<div class="card-product__img">
					<a href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}"><img class="card-img" src="{{ url('/uploads/front/web_templates') }}/{{$webtemplatesdata->image}}" alt=""></a>
					<ul class="card-product__imgOverlay">
					<li><a fdprocessedid="ucvatl" title="Details Page" href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}"><i class="fa fa-info"></i></a></li>
					<li><a fdprocessedid="ucvatl" title="Demo Preview" href="{{$webtemplatesdata->preview}}"><i class="fa fa-search"></i></a></li>
					<li><a fdprocessedid="1au9gg" title="Build Your Website" href="{{url('/signup')}}/?site={{$webtemplatesdata->url}}"><i class="fa fa-wrench"></i></a></li>
					</ul>
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
$('#templatetab').addClass('menu-active');
</script>