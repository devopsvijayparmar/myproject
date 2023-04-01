 @include('websites.jewellery.include.header')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Products</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"> Products</li>
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
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
		   @if(count($products) > 0)
		   @foreach($products as $productdata)
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img">  <a href="{{$productdata->getDetailPageLink()}}"><img class="img-responsive card_img" src="{{$productdata->image_1}}" alt=""></a> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="{{$productdata->getDetailPageLink()}}">{{ mb_strimwidth($productdata->name, 0, 40, "...")}}</a></h4>
                </div>
              
				<div class="product_price">
				 <p><span class="">{{$productdata->category_name}}</span></p>
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
		
	   <div class="center">
	   {{ $products->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	  </div>
		
      </div>
      <div class="col-md-3">
        <div class="side_bar">
		<div class="side_bar_blog">
            <h4>Search</h4>
			 <form  method="get" action="{{url('products/category')}}">
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search by keywords" type="text" name="search" value="{{$search}}">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search pointer" aria-hidden="true"></i></button>
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
               <a href="{{url('products')}}/{{$categorydata->slug}}"> <li class="@if($cat == $categorydata->slug) active @endif"><i class="fa fa-angle-right"></i> {{$categorydata->name}}</li></a>
				@endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- footer -->
 @include('websites.jewellery.include.footer')
<script>
$('#products').addClass('active');
</script>