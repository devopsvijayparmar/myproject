 @include('websites.mobile.include.header')

<!-- section -->
<div id="slider" class="section main_slider">
	<div class="container-fuild">
		<div class="row">
		  <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div class="owl-carousel owl-theme home-carousel">
				@foreach($slider as $retrieved_data)
				<div class="item">
					<img class="home-img" src="{{$retrieved_data->image}}">
				</div>
				@endforeach
			</div>
			</div>
		</div>
	</div>
</div>


<div class="section padding_layout_1 padding_btm-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Mobiles</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	 @if(count($mobile) > 0)
	 @foreach($mobile as $productdata)
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <a href="{{$productdata->getDetailPageLink()}}"><img class="img-responsive card_img" src="{{$productdata->image_1}}" alt=""></a> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="{{$productdata->getDetailPageLink()}}">{{ mb_strimwidth($productdata->name, 0, 40, "...")}}</a></h4>
            </div>
			<div class="product_price">
			<p><span class="">{{ mb_strimwidth($productdata->brand->name, 0, 100, "...")}}</span></p>
			@php
		    $currency_symbol = "";
			@endphp
		    @if(isset($site_setting->currency_symbol)) @php $currency_symbol = $site_setting->currency_symbol @endphp @endif
			@if($productdata->price)
            <p><span class="new_price">{{$currency_symbol.$productdata->price}}</span></p>
			@endif
			 </div>
          </div>
        </div>
      </div>
	@endforeach
	@else
	<div class="col-md-12"><p class="text-center">No Products Available</p></div>
    @endif
    </div>
	@if(count($mobile) >0)
	 <div class="text_align_center">
		<a class="btn main_bt" href="{{$product[0]->getMobileCategoryLink()}}">See More...</a>
	 </div>
	@endif
  </div>
</div>
<!-- end section -->
<!-- section -->

<div class="section padding_layout_1 padding_btm-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Service</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	  @php
	  $i=0;
	  @endphp
	  
	  @if(count($service) > 0)
			@foreach($service as $servicedata)
			@php
			$i++;
			$remainder = $i % 2;
			@endphp
			  @if($remainder == 0)
			  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="full text_align_center margin_bottom_30">
				  <div class="center">
					<div class="icon"> <img src="{{ asset('/websites/bakery/images/it_service/i3.png') }}" alt="#" /> </div>
				  </div>
					<h4 class="theme_color">{{$servicedata->name}}</h4>
				  <p>{!! $servicedata->description !!}</p>
				</div>
			  </div>
			  @else
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="full text_align_center margin_bottom_30">
						<div class="center">
							<div class="icon"> <img src="{{ asset('/websites/bakery/images/it_service/i2.png') }}" alt="#" /> </div>
						</div>
						<h4 class="theme_color">{{$servicedata->name}}</h4>
						<p>{!! $servicedata->description !!}</p>
					</div>
				</div> 
			  @endif
	        @endforeach
		@else	
		<div class="col-md-12"><p class="text-center">No Service Available</p></div>
		@endif
    </div>
  </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section padding_layout_1">
	<div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="full">
		  <div class="main_heading text_align_center">
			<h2>Blogs</h2>
		  </div>
		</div>
	  </div>
	</div>
	
    <div class="row">
	@if(count($blog) > 0)
	@foreach($blog as $blogdata)
      <div class="col-md-4 blog-border">
        <div class="full blog_colum">
          <a href="{{$blogdata->getDetailPageLink()}}"> <div class="blog_feature_img"> <img class="card_img" src="{{$blogdata->image}}" alt="#" /> </div></a>
		  <div class="p-3">
			  <div class="post_time">
				<p><i class="fa fa-clock-o"></i>{{$blogdata->created_at}}</p>
			  </div>
			  <div class="blog_feature_head">
				<h4>{{ mb_strimwidth($blogdata->title, 0, 40, "...") }}</h4>
			  </div>
			  <div class="blog_feature_cont">
				<p>{!! mb_strimwidth($blogdata->description, 0, 100, "...") !!}</p>
			  </div>
		  </div>
		</div>
      </div>
	@endforeach
	@else
	<div class="col-md-12"><p class="text-center">No Blog Available</p></div>
    @endif
    </div>
	@if(count($blog) > 0)
	<div class="text_align_center">
	<a class="btn main_bt" href="{{$blog[0]->getBlogPageLink()}}">See More...</a>
	</div>
	@endif
  </div>
</div>
<!-- end section -->
@include('websites.mobile.include.footer')
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

$('#home').addClass('active');

</script>