@include('websites.watch.include.header')
<!-- section -->
<div id="slider" class="section main_slider pb-40">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    @php $i=0; @endphp
		@foreach($slider as $retrieved_data)
		<li data-target="#carouselExampleIndicators" style="width:20px" data-slide-to="{{$i}}" class="@if($i == 0) active @endif"></li>
		@php $i++; @endphp
		@endforeach
	  </ol>
	  <div class="carousel-inner">
		@php $i=0; @endphp
		@foreach($slider as $retrieved_data)
		<div class="carousel-item @if($i == 0) active @endif">
			<img class="d-block w-100" src="{{$retrieved_data->image}}">
		</div>
		@php $i++; @endphp
		@endforeach
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="section pb-40">
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


<div class="section pb-40">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Products</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	 @if(count($product8) > 0)
	 @foreach($product8 as $productdata)
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <a href="{{$productdata->getDetailPageLink()}}"><img class="img-thumbnail" src="{{$productdata->image_url_1}}" alt=""></a> </div>
          <div class="product_detail_btm">
            <div class="center">
				<h4><a href="#">{{ mb_strimwidth($productdata->name, 0, 40, "...")}}</a></h4>
            </div>
			<div class="product_price">
			<p><span class="">{{ mb_strimwidth($productdata->category->name, 0, 100, "...")}}</span></p>
			@php
		    $currency_symbol = "";
			@endphp
		    @if(isset($site_setting->currency->symbol)) @php $currency_symbol = $site_setting->currency->symbol @endphp @endif
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
	@if(count($product8) >0)
	 <div class="text_align_center pt-2">
		<a class="main_bt_new" href="{{$product8[0]->getProjectCategoryLink()}}">See More...</a>
	 </div>
	@endif
  </div>
</div>

<div class="section pb-40">
  <div class="container">
   <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Gallery</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	@if(count($gallery8) > 0)
	@foreach($gallery8 as $retrieved_data)
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="full pb-2">
          <div class="blog_section">
            <div class="blog_feature_img"> <a class="preview" href="{{$retrieved_data->image_path}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$retrieved_data->image_path}}" ></a> </div>
          </div>
        </div>
      </div>
	@endforeach  
	@else
		<div class="col-md-12"><p class="text-center">No Record Available</p></div>		
	@endif
    </div>
	@if(count($product8) >0)
	 <div class="text_align_center pt-2">
		<a class="main_bt_new" href="{{$product8[0]->getProjectCategoryLink()}}">See More...</a>
	 </div>
	@endif
  </div>
</div>

<!-- section -->
<div class="section pb-40">
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
          <a href="{{$blogdata->getDetailPageLink()}}"> <div class="blog_feature_img"> <img class="card-img-top" src="{{$blogdata->image_url}}" alt="#" /> </div></a>
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
	<div class="text_align_center pt-2">
	<a class="main_bt_new" href="{{$blog[0]->getBlogPageLink()}}">See More...</a>
	</div>
	@endif
  </div>
</div>
<!-- end section -->
@include('websites.watch.include.footer')
<script>


$('#home').addClass('active');
</script>