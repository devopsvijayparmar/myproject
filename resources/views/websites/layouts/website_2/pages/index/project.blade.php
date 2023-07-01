<section id="blog" style="padding-bottom:80px!important">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Projects</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Our innovative project aims to streamline operations,<br> increase efficiency, and drive significant cost savings for your business</p>
		</div>
		<div class="row">
			@if(count($projects) >0)
			@foreach($projects as $projectsdata) 
			<div class="col-md-4 col-sm-6 mb-2">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image card-product">
						<a href="{{$projectsdata->getDetailPageLink()}}">
							<img class="img-thumbnail p-0" src="{{$projectsdata->image_url_1}}">
						</a>
						<ul class="card-product__imgOverlay">
						<a href="{{$projectsdata->getDetailPageLink()}}"><li>{{$projectsdata->name}}</li></a>
						</ul>
					</div>
				</div>
			</div>
			@endforeach
			@else
				<h4 class="text-center">No Record Available</h4>
			@endif
		</div>
		
	</div><!--/.container-->
	@if(count($projects) >0)
	<div class="text_align_center" style="margin-top: 10px;">
		<a class="btn btn-primary" href="{{$projects[0]->getProjectCategoryLink()}}">See More...</a>
	</div>
	@endif
</section><!--/#portfolio-->