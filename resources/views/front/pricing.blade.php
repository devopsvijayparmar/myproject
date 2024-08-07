 @include('front.include.header')

  <!--==========================
    Price Section
  ============================-->
   <section id="pricing" class="padd-section padd-top text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Choose a pricing option that works for you.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">
	    @php $i=0;
        $auth = Auth::user();
		@endphp
		@foreach($pricing as $pricingdata)
		@if($auth && $i != 0)
        <div class="col-md-6 col-lg-4">
          <div class="block-pricing">
             <div class="table">
              <h3 class="pr-ttl">{{$pricingdata->plan_name}}</h3>
              <h2 style="margin:0px!important;" class="pr-ttl">{{$pricingdata->price_text}}</h2>
			  <p>{{$pricingdata->duration}}</p>
				  {!! $pricingdata->description !!}
              <div class="table_btn">
			    @auth
				   <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> {{$pricingdata->button_name}}</a>
				@else
					<a href="#" data-toggle="modal" data-target="#modal-default" class="btn"><i class="fa fa-shopping-cart"></i> {{$pricingdata->button_name}}</a>
				@endauth
                
              </div>
            </div>
          </div>
        </div>
		@else
			 <div class="col-md-6 col-lg-4">
			  <div class="block-pricing">
				 <div class="table">
				  <h3 class="pr-ttl">{{$pricingdata->plan_name}}</h3>
				  <h2 class="pr-ttl" style="margin:0px!important;">{{$pricingdata->price_text}}</h2>
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
		@endif
		@php $i++; @endphp
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