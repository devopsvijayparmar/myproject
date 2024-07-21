<section id="blog" style="padding-bottom:80px!important">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Blogs</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">In our latest blog post, we delve into the secrets of effective time management,<br> offering practical tips to boost productivity and achieve work-life balance</p>
		</div>
		<div class="row">
			 @if(count($blog) > 0)
			 @foreach($blog as $blogdata)

			 <div class="col-sm-4 mb-2">
				<div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="{{$blogdata->getDetailPageLink()}}"><img class="card-img-top" src="{{$blogdata->image_url}}" alt=""></a>
								<a class="preview" href="{{$blogdata->image_url}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
							</div>
							<div class="entry-date">{{date('D, M d, Y',strtotime($blogdata->created_at))}}</div>
							<h2 class="entry-title"><a href="{{$blogdata->getDetailPageLink()}}">{{$blogdata->title}}</a></h2>
						</header>
						<div class="entry-content">
						{!! mb_strimwidth($blogdata->description, 0, 400, "...") !!}
						</div>
					</article>
				</div>
			</div>
			@endforeach
			@else
			<div class="col-md-12"><h4 class="text-center">No Record Available</h4></div>
			@endif
		</div>
		@if(count($blog) > 0)
		<div class="text_align_center">
			<a class="btn btn-primary" href="{{$blog[0]->getBlogPageLink()}}">See More...</a>
		</div>
		@endif
	</div>
</section>