 @include('websites.event.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Our Blogs</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Blogs</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

     <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Blogs</h2>
            </div>
			
			<div class="row">
				 @if(count($blog) > 0)
				 @foreach($blog as $blogdata)
				 <div class="col-sm-4">
                    <div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($blogdata->id)}}"><img class="img-responsive card_img" src="{{url('/uploads/blog')}}/{{$blogdata->image}}" alt=""></a>
                                    <a class="preview" href="{{url('/uploads/blog')}}/{{$blogdata->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">{{$blogdata->created_at}}</div>
                                <h2 class="entry-title"><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($blogdata->id)}}">{{$blogdata->title}}</a></h2>
                            </header>
                            <div class="entry-content">
							{!!  mb_strimwidth($blogdata->description, 0, 200, "...") !!}
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
			{{ $blog->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			</div>
        </div>
    </section>
 @include('websites.event.include.footer')
 <script>
$('#blogtab').addClass('active');
 </script>