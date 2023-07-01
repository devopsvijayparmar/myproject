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