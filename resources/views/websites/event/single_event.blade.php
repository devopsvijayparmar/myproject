 @include('websites.event.include.header')
	 <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Event</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Event</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->
   
     <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Event</h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive blog_card_img" src="{{$event->image}}" alt="">
                                     <a class="preview" href="{{$event->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">Start Date: {{$event->start_date}}</div>
                                <div class="entry-date">End Date: {{$event->end_date}}</div>
                               <h2 class="entry-title"><a href="#">{{$event->title}}</a></h2>
                            </header>
                            <div class="entry-content">
                               {!! $event->description !!}
                            </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
                
            </div>

        </div>
    </section>
  @include('websites.event.include.footer')
  <script>
	$('#eventtab').addClass('active');
  </script>