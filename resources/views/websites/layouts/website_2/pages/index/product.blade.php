
<section id="meet-team">
	<div class="container">
	    <div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Products</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Experience the perfect blend of style and functionality with our premium product, meticulously crafted to exceed your expectations</p>
		</div>
		<div class="row">
			@if(count($product8) > 0)
			@foreach($product8 as $productdata)
		
			<div class="col-sm-6 col-md-3 pb-4">
				<div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
					<div class="team-img">
					<a href="{{$productdata->getDetailPageLink()}}">
						<img class="img-thumbnail p-0" src="{{$productdata->image_url_1}}" alt="">
					</a>
					</div>
					<div class="team-info">
					   <h5 class="product-ttl"> {{ mb_strimwidth($productdata->name, 0, 40, "...")}}</h5>
						@php
						$currency_symbol = "";
						@endphp
						@if(isset($site_setting->currency->symbol)) @php $currency_symbol = $site_setting->currency->symbol @endphp @endif
						@if($productdata->price)
							 <span>{{$currency_symbol.$productdata->price}}</span>
						@endif
					   
					</div>
				</div>
			</div>
			@endforeach
			@else
				<h4 class="text-center">No Record Available</h4>
			@endif
		</div>
	</div><!--/.container-->
	@if(count($product8) >0)
	<div class="text_align_center" style="margin-top: 10px;">
		<a class="btn btn-primary" href="{{$product8[0]->getProjectCategoryLink()}}">See More...</a>
	</div>
	@endif
</section>