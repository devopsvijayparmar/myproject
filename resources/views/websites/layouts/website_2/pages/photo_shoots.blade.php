
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Photo Shoots</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Photo Shoots</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

<section id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Photo Shoots</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Immerse yourself in a visual journey through our diverse photo shoots gallery,<br> where every picture tells a unique story and sparks inspiration</p>
		</div>
		<div class="row">
			@if(count($photoshoots) >0)
			@foreach($photoshoots as $photoshootsdata) 
			<div class="col-md-4 col-sm-6 mb-2">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image card-product">
						<img class="img-thumbnail p-0" src="{{$photoshootsdata->image_url}}">
						<ul class="card-product__imgOverlay">
						<li>{{$photoshootsdata->name}}</li>
						</ul>
					</div>
				</div>
			</div>
			@endforeach
			@else
				<div class="col-md-12"><h4 class="text-center">No Record Available</h4></div>
			@endif
		</div>
		<div class="center">
			{{ $photoshoots->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
		</div>
	</div><!--/.container-->
</section><!--/#portfolio-->

@section('script')
<script>
$('#photoshootstab').addClass('active');
</script>
@endsection