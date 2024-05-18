<section id="blog" style="padding-bottom:80px!important">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Events</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">In our latest blog post, we delve into the secrets of effective time management,<br> offering practical tips to boost productivity and achieve work-life balance</p>
		</div>
		<div class="row">
			 @if(count($event) > 0)
			 @foreach($event as $eventdata)
			 <div class="col-sm-4 mb-2">
				<div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="{{$eventdata->getDetailPageLink()}}"><img class="card-img-top" src="{{$eventdata->image_url}}" alt=""></a>
								<a class="preview" href="{{$eventdata->image_url}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
							</div>
							<div class="entry-date">{{date('F j, Y, g:i a',strtotime($eventdata->start_date))}} - {{date('F j, Y, g:i a',strtotime($eventdata->end_date))}}</div>
							<h2 class="entry-title"><a href="{{$eventdata->getDetailPageLink()}}">{{$eventdata->title}}</a></h2>
						</header>
						<div class="entry-content">
						{!! mb_strimwidth($eventdata->description, 0, 200, "...") !!}
						</div>
					</article>
				</div>
			</div>
			@endforeach
			@else
			<div class="col-md-12"><h4 class="text-center">No Record Available</h4></div>
			@endif
		</div>
		@if(count($event) >= 6)
		<div class="text_align_center">
			<a class="btn btn-primary" href="{{$event[0]->getEventPageLink()}}">See More...</a>
		</div>
		@endif
	</div>
</section>