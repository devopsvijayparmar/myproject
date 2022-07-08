 @include('websites.music-and-entertainment.include.header')

	  <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Events</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Events</a>
                </div>
              
            </div>
        </div>
    </section><!--/#cta-->

	  <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Events</h2>
            </div>
			
			<div class="row">
				 @if(count($events) > 0)
				 @foreach($events as $eventsdata)
				 <div class="col-sm-4">
                    <div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($eventsdata->id)}}/single-event"><img class="img-responsive card_img" src="{{url('/uploads/event')}}/{{$eventsdata->image}}" alt=""></a>
                                    <a class="preview" href="{{url('/uploads/event')}}/{{$eventsdata->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">Start Date: {{$eventsdata->start_date}}</div>
                                <div class="entry-date">End Date: {{$eventsdata->end_date}}</div>
                                <h2 class="entry-title"><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($eventsdata->id)}}/single-event">{{$eventsdata->title}}</a></h2>
                            </header>
                            <div class="entry-content">
							{!!  mb_strimwidth($eventsdata->description, 0, 200, "...") !!}
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
	
  @include('websites.music-and-entertainment.include.footer')
  <script>
	$('#eventtab').addClass('active');
  </script>