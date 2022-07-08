 @include('websites.industrial.include.header')
    
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Products</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Products</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

      <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="row">
				@if(count($products) > 0)
				@foreach($products as $productdata)
				<div class="col-md-3 col-sm-6">
					<div class="product-grid">
						<div class="product-image">
							<a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($productdata->id)}}/single-product">
								<img class="pic-1" src="{{url('/uploads/products')}}/{{$productdata->image_1}}">
							</a>
							<ul class="social">
								<li><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($productdata->id)}}/single-product" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
							</ul>
							<!--<span class="product-new-label">Sale</span>
							<span class="product-discount-label">20%</span>-->
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($productdata->id)}}/single-product">{{ mb_strimwidth($productdata->name, 0, 40, "...")}}</a></h3>
							@php
							$currency_symbol = "";
							@endphp
							@if(isset($site_setting->currency_symbol)) @php $currency_symbol = $site_setting->currency_symbol @endphp @endif
							@if($productdata->price)
							<div class="price">{{$currency_symbol.$productdata->price}}</div>
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
    </section><!--/#portfolio-->
  @include('websites.industrial.include.footer')
  <script>
  $('#products').addClass('active');
  </script>