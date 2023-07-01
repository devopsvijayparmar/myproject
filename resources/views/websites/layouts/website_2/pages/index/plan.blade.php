
<section id="blog" style="padding-bottom:80px!important">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Plans</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Our innovative project aims to streamline operations,<br> increase efficiency, and drive significant cost savings for your business</p>
		</div>
		<div class="row">
			@if(count($plan) >0)
			@foreach($plan as $retrieved_data) 
			<div class="col-md-4 col-sm-6 mb-2">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image card-product">
						<a href="{{$retrieved_data->getDetailPageLink()}}">
							<img class="img-thumbnail p-0" src="{{$retrieved_data->image_url_1}}">
						</a>
						<ul class="card-product__imgOverlay">
						<a href="{{$retrieved_data->getDetailPageLink()}}"><li>{{$retrieved_data->name}}</li></a>
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
	@if(count($plan) >0)
	<div class="text_align_center" style="margin-top: 10px;">
		<a class="btn btn-primary" href="{{$plan[0]->getPlanPageLink()}}">See More...</a>
	</div>
	@endif
</section><!--/#portfolio-->