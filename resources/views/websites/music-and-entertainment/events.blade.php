 @include('websites.music-and-entertainment.include.header')

	<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">music-and-entertainments</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">music-and-entertainments</a>
                </div>
              
            </div>
        </div>
    </section><!--/#cta-->

     <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">music-and-entertainments</h2>
            </div>
			
			<div class="row">
				 @if(count($music-and-entertainments) > 0)
				 @foreach($music-and-entertainments as $music-and-entertainmentsdata)
				 <div class="col-sm-4">
                    <div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="{{$music-and-entertainmentsdata->getDetailPageLink($title)}}"><img class="img-responsive card_img" src="{{$music-and-entertainmentsdata->image}}" alt=""></a>
                                    <a class="preview" href="{{$music-and-entertainmentsdata->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">Start Date: {{$music-and-entertainmentsdata->start_date}}</div>
                                <div class="entry-date">End Date: {{$music-and-entertainmentsdata->end_date}}</div>
                                <h2 class="entry-title"><a href="{{$music-and-entertainmentsdata->getDetailPageLink($title)}}">{{$music-and-entertainmentsdata->title}}</a></h2>
                            </header>

                            <div class="entry-content">
							{!!mb_strimwidth($music-and-entertainmentsdata->description, 0, 100, "...")!!}
                            </div>
                        </article>
                    </div>
                </div>
				@endforeach
				@else
					<h4 style="margin: 40px;" class="text-center">No Record Available</h4> 
				@endif
			</div>
		
			   <div class="center">
			   {{ $music-and-entertainments->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			  </div>
			
        </div>
    </section>
  @include('websites.music-and-entertainment.include.footer')
  <script>
	$('#music-and-entertainmenttab').addClass('active');
  </script>