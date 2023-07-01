<section id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Gallery</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Immerse yourself in a visual journey through our diverse image gallery,<br> where every picture tells a unique story and sparks inspiration</p>
		</div>
		<div class="row">
			@if(count($gallery) > 0)
			@foreach($gallery as $retrieved_data)
			<div class="col-sm-4" style="margin-bottom:5px">
				<div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
							<a class="preview" href="{{$retrieved_data->image_path}}" rel="prettyPhoto">
								<img class="img-thumbnail" src="{{$retrieved_data->image_path}}" alt="">
							</a>
							</div>
						</header>
					</article>
				</div>
			</div><!--/.col-sm-6-->
			@endforeach
			@else
				<h4 style="margin: 40px;" class="text-center">No Record Available</h4> 
			@endif
		</div>
	</div>
</section>