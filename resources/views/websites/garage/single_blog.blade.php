 @include('websites.garage.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Blog</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Blog</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->
   
     <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Blog</h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive blog_card_img" src="{{$blog->image}}" alt="">
                                     <a class="preview" href="{{$blog->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">{{$blog->created_at}}</div>
                            </header>

                            <div class="entry-content">
							{!! $blog->description !!}
                            </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
            </div>

        </div>
    </section>
    
  @include('websites.garage.include.footer')
  <script>
	$('#blogtab').addClass('active');
  </script>