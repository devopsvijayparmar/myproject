
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Events</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">music-and-entertainments</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

<section id="blog" style="padding-bottom:80px!important">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Events</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">From concept to execution, our skilled event planners ensure a seamless<br> and unforgettable experience, tailored to your unique vision and preferences</p>
		</div>
		<div class="row">
			 @if(count($events) > 0)
			 @foreach($events as $events_data)

			 <div class="col-sm-4 mb-2">
				<div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="{{$events_data->getDetailPageLink()}}"><img class="card-img-top" src="{{$events_data->image_url}}" alt=""></a>
								<a class="preview" href="{{$events_data->image_url}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
							</div>
							<div class="entry-date">Start Date: {{ $events_data->start_date}}</div>
							<div class="entry-date">End Date: {{ $events_data->end_date}}</div>
							<h2 class="entry-title"><a href="{{$events_data->getDetailPageLink()}}">{{ $events_data->title}}</a></h2>
						</header>
						<div class="entry-content">
						{!! mb_strimwidth($events_data->description, 0, 200, "...") !!}
						</div>
					</article>
				</div>
			</div>
			@endforeach
			@else
			<h4 class="text-center">No Record Available</h4> 
			@endif
		</div>
		<div class="center">
		{{ $events->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
		</div>
	</div>
</section>

@section('script')
<script>
$('#eventtab').addClass('active');
</script>
@endsection