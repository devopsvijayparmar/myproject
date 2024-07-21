<section id="blog" style="padding-bottom:100px;">
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
					    <a class="preview" href="{{$photoshootsdata->image_url}}" rel="prettyPhoto">
						<img class="img-thumbnail p-0" src="{{$photoshootsdata->image_url}}">
						</a>
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
		
	</div><!--/.container-->
	@if(count($photoshoots) >0)
	<div class="text_align_center" style="margin-top: 10px;">
		<a class="btn btn-primary" href="{{$photoshoots[0]->getPhotoShootCategoryLink()}}">See More...</a>
	</div>
	@endif
</section><!--/#portfolio-->