 @include('websites.architecture-and-building.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Plans</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Plans</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->
   
     <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Plans</h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive blog_card_img" src="{{url('/uploads/plan')}}/{{$plan->image_1}}" alt="">
                                     <a class="preview" href="{{url('/uploads/plan')}}/{{$plan->image_1}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">{{$plan->created_at}}</div>
                            </header>

                            <div class="entry-content">
							{!! $plan->description; !!}
                            </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
            </div>
        </div>
    </section>
  @include('websites.architecture-and-building.include.footer')
  <script>
	$('#plantab').addClass('active');
  </script>