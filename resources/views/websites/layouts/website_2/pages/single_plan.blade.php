<link href="{{ asset('/websites/website_2/css/single_product.css') }}" rel="stylesheet">
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Plan Detail</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Plan Detail</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

 <section id="blog" style="margin-bottom:80px;">
	<div class="container">
			<div class="container-fliud">
			<div class="wrapper row">
				<div id="productCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
					  <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
					   @if(isset($plan->image_2))
					  <li data-target="#productCarousel" data-slide-to="1"></li>
					  @endif
					  @if(isset($plan->image_3))
					  <li data-target="#productCarousel" data-slide-to="2"></li>
					  @endif
					</ul>
					<!-- Slides -->
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="{{$plan->image_url_1}}"  alt="Product 1" class="d-block w-100 img-thumbnail">
					  </div>
					  @if(isset($plan->image_2))
					  <div class="carousel-item">
						<img src="{{$plan->image_url_2}}" alt="Product 2" class="d-block w-100 img-thumbnail">
					  </div>
					  @endif
					  
					  @if(isset($plan->image_3))
					  <div class="carousel-item">
						<img src="{{$plan->image_url_3}}" alt="Product 3" class="d-block w-100 img-thumbnail">
					  </div>
					  @endif
					</div>

					<!-- Controls -->
					<a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
				<div class="details col-md-8">
					<h3 class="product-title">{{$plan->name}}</h3>
					{!! $plan->description !!}
				</div>
			</div>
		</div>
	</div>
</section>

@section('script')
<script>
$('#plantab').addClass('active');
</script>
@endsection