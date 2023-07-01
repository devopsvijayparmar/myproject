
<link href="{{ asset('/websites/website_2/css/single_product.css') }}" rel="stylesheet">
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Product Detail</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Product Detail</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

 <section id="blog" style="margin-bottom:80px;">
	<div class="container">
			<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6">
				
					<div class="preview-pic">
					  <div class="tab-pane active" id="pic-1"><a class="preview" href="{{$product->image_url_1}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$product->image_url_1}}" /></a></div>
					</div>
					<ul class="preview-thumbnail nav nav-tabs">
						<li class="active"> <a class="preview" href="{{$product->image_url_1}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$product->image_url_1}}" /></a></li>
						@if($product->image_2)
						<li> <a class="preview" href="{{$product->image_url_2}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$product->image_url_2}}" /></a></li>
						@endif
						@if($product->image_3)
						<li> <a class="preview" href="{{$product->image_url_3}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$product->getImage1UrlAttribute($product->image_url_3)}}" /></a></li>
						@endif
					</ul>
					
				</div>
				<div class="details col-md-6">
					<h3 class="product-title">{{$product->name}}</h3>
					<div class="rating">
						<span class="review-no">{{$product->category->name}}</span>
					</div>
					@php
					$currency_symbol = "";
					@endphp
					@if(isset($site_setting->currency->symbol)) @php $currency_symbol = $site_setting->currency->symbol @endphp @endif
					@if($product->price)
					<h4 class="price">price: <span>{{$currency_symbol.$product->price}}</span></h4>
					@endif
					{!! $product->description !!}
				</div>
			</div>
		</div>
	</div>
</section>

@section('script')
<script>
$('#products').addClass('active');
</script>
@endsection  