<link href="{{ asset('/websites/website_1/css/single_product.css') }}" rel="stylesheet">
<link rel='stylesheet' href="{{ asset('/websites/website_1/css/hizoom.css') }}">
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Product Detail</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Product Detail</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="{{$electric->image_url_1}}" class="img-thumbnail" alt="#" /> </div>
            </div>
			<ul class="preview-thumbnail nav nav-tabs">
				@if($electric->image_2)
			   <li> <a class="preview" href="{{$electric->image_url_2}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$electric->image_url_2}}" /></a></li>
				@endif
			   @if($electric->image_3)
			   <li> <a class="preview" href="{{$electric->image_url_3}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$electric->image_url_3}}" /></a></li>
				@endif
			</ul>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
               <h2>{{$electric->name}}</h2>
               <p>{{$electric->type->name}}</p>
               <p>{{$electric->category->name}}</p>
            </div>
            <div class="product-detail-side"> 
				<span class="new-price">
				@php
				$currency_symbol = "";
				@endphp
				@if(isset($site_setting->currency->symbol)) @php $currency_symbol = $site_setting->currency->symbol @endphp @endif
				@if($electric->price)
				{{$currency_symbol.$electric->price}}
				@endif
				</span> 
			</div>
             <div class="detail-contant">
             {!! mb_strimwidth($electric->description, 0, 500, "...") !!}
               <form class="cart" method="post" action="{{url('addresses')}}">
			   <input type="hidden" name="product_id" value="{{Crypt::encrypt($electric->id)}}">
			     @csrf
				<div class="quantity">
				  <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
				</div>
				<button type="submit" class="btn sqaure_bt">Order Now</button>
				</form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
					{!! $electric->description !!}
						
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                <h3>Related products</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
		 @foreach($electrics as $productdata)
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img">  <a href="{{$productdata->getDetailPageLink()}}"><img class="img-thumbnail" src="{{$productdata->image_url_1}}" alt=""></a> </div>
					
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="{{$productdata->getDetailPageLink()}}">{{ mb_strimwidth($productdata->name, 0, 40, "...")}}</a></h4>
                </div>
				<div class="product_price">
				 <p><span class="">{{$productdata->category_name}}</span></p>
				@php
				$currency_symbol = "";
				@endphp
				@if(isset($site_setting->currency->symbol)) @php $currency_symbol = $site_setting->currency->symbol @endphp @endif
				@if($productdata->price)
				<div class="product_price">
				  <p><span class="new_price">{{$currency_symbol.$productdata->price}}</span></p>
				</div>
				@endif
				</div>
              </div>
            </div>
          </div>
		  @endforeach
			<div class="center">
			   {{ $electrics->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			</div>
        </div>
      </div>
	  
      <div class="col-md-3">
        <div class="side_bar">
			<div class="side_bar_blog">
            <h4>Search</h4>
			 <form  method="get" action="{{url('products/category')}}">
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search by keywords" type="text" name="search">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> 
			</div>
            </div>
			</form>
          </div>
          <div class="side_bar_blog">
            <h4>Categories</h4>
            <div class="categary">
              <ul>
			   @foreach($category as $categorydata)
               <a href="{{url('products')}}/{{$categorydata->slug}}"> <li class=""><i class="fa fa-angle-right"></i> {{$categorydata->name}}</li></a>
				@endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('script')
<script src="{{ asset('/websites/website_1/js/hizoom.js') }}"></script>
<script>
$('#products').addClass('active');
	$('.hi1').hiZoom({
		width: 300,
		position: 'right'
	});
	$('.hi2').hiZoom({
		width: 400,
		position: 'right'
	});
</script>
@endsection