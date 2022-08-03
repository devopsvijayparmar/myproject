 @include('websites.garage.include.header')

     <section>
		<div class="owl-carousel owl-theme home-carousel">
		@foreach($slider as $retrieved_data)
			<div class="item">
				<img class="home-img" src="{{url('/uploads/slider')}}/{{$retrieved_data->image}}">
			</div>
		@endforeach
		</div>
    </section>

     <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
            </div>
            <div class="row">
                <div class="features">
				  @php  $i=0; @endphp
                  @if(count($service6) > 0)
					  @foreach($service6 as $servicedata)
                        @php
							$i++;
							$remainder = $i % 2;
						@endphp
						@if($remainder == 0)
							<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
								<div class="media service-box">
									<div class="pull-left">
										<i class="fa fa-cubes"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading">{{$servicedata->name}}</h4>
										<p>{!! $servicedata->description !!}</p>
									</div>
								</div>
							</div><!--/.col-md-4-->
							@else
							<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
								<div class="media service-box">
									<div class="pull-left">
										<i class="fa fa-pie-chart"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading">{{$servicedata->name}}</h4>
										<p>{!! $servicedata->description !!}</p>
									</div>
								</div>
							</div><!--/.col-md-4-->
					        @endif
						@endforeach	
					    @else
						 <h4 class="text-center">No Record Available</h4> 
					    @endif
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
	
	<section id="features" >
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Gallery</h2>
            </div>
            <div class="row">
				@if(count($gallery) > 0)
				@foreach($gallery as $retrieved_data)
				<div class="col-sm-4" style="margin-bottom:5px">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
								<a class="preview" href="{{url('/uploads/gallery')}}/{{$retrieved_data->image}}" rel="prettyPhoto">
                                    <img class="img-responsive card_img" src="{{url('/uploads/gallery')}}/{{$retrieved_data->image}}" alt="">
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
	
    <section id="portfolio" >
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Team</h2>
            </div>
            <div class="row">
				@if(count($ourteam) > 0)
				@foreach($ourteam as $ourteamdata)
                <div class="col-md-3 pd-10">
					<a class="preview" href="{{url('/uploads/our_team')}}/{{$ourteamdata->image}}" rel="prettyPhoto">
						<div class="portfolio-item-inner vp-hover">
							<img class="img-responsive shoot_img" src="{{url('/uploads/our_team')}}/{{$ourteamdata->image}}" alt="">
						   
						</div>
						<span class="onhovershow ps-title">{{$ourteamdata->name}}</span>
					</a>
                </div><!--/.portfolio-item-->
				@endforeach
				@else
				<h4 class="text-center">No Record Available</h4>
				@endif
            </div>
        </div><!--/.container-->
		@if(count($ourteam) > 0)
		<div class="text_align_center" style="margin-top: 10px;">
			<a class="btn btn-primary" href="{{url('/')}}/{{$title}}/ourteam">See More...</a>
		</div>
		@endif
    </section><!--/#portfolio-->
	

    <section id="blog" style="padding-bottom:80px!important">
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
                                    <a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($blogdata->id)}}/single-blog"><img class="img-responsive card_img" src="{{url('/uploads/blog/')}}/{{$blogdata->image}}" alt=""></a>
                                    <a class="preview" href="{{url('/uploads/blog/')}}/{{$blogdata->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">{{$blogdata->created_at}}</div>
                                <h2 class="entry-title"><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($blogdata->id)}}/single-blog">{{$blogdata->title}}</a></h2>
                            </header>
                            <div class="entry-content">
							{!! mb_strimwidth($blogdata->description, 0, 200, "...") !!}
                            </div>
                        </article>
                    </div>
                </div>
				@endforeach
				@else
				<h4 class="text-center">No Record Available</h4> 
				@endif
			</div>
			@if(count($blog) > 0)
			<div class="text_align_center">
				<a class="btn btn-primary" href="{{url('/')}}/{{$title}}/blog">See More...</a>
			</div>
			@endif
        </div>
    </section>
@include('websites.garage.include.footer')
<script>

$('.home-carousel').owlCarousel({
    loop:true,
    autoplayTimeout:12000,
	autoplay:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        }
    }
});

$('#hometab').addClass('active');

</script>