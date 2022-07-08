 @include('front.include.header')

  <!--==========================
    Price Section
  ============================-->
   <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

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
$('#pricingtab').addClass('menu-active');
</script>