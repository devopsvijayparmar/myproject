@include('websites.agency.include.header')

<section>
	<div class="owl-carousel owl-theme home-carousel">
	@foreach($slider as $retrieved_data)
		<div class="item">
			<img class="home-img" src="{{$retrieved_data->image}}">
		</div>
	@endforeach
	</div>
</section>

<section id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Projects</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Our innovative project aims to streamline operations,<br> increase efficiency, and drive significant cost savings for your business</p>
		</div>
		<div class="row">
			@if(count($projects) >0)
			@foreach($projects as $projectsdata) 
			<div class="col-md-4 col-sm-6 mb-2">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image card-product">
						<a href="{{$projectsdata->getDetailPageLink()}}">
							<img class="img-thumbnail p-0" src="{{$projectsdata->image_url_1}}">
						</a>
						<ul class="card-product__imgOverlay">
						<a href="{{$projectsdata->getDetailPageLink()}}"><li>{{$projectsdata->name}}</li></a>
						</ul>
					</div>
				</div>
			</div>
			@endforeach
			@else
				<h4 class="text-center">No Record Available</h4>
			@endif
		</div>
		
	</div><!--/.container-->
	@if(count($projects) >0)
	<div class="text_align_center" style="margin-top: 10px;">
		<a class="btn btn-primary" href="{{$projects[0]->getProjectCategoryLink()}}">See More...</a>
	</div>
	@endif
</section><!--/#portfolio-->

<section id="blog">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Our Services</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Unlock convenience and peace of mind with our reliable service solutions designed to simplify your life</p>
		</div>
		
		<div class="row">
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
		</div><!--/.row-->    
	</div><!--/.container-->
</section><!--/#services-->

<section id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Gallery</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Immerse yourself in a visual journey through our diverse image gallery,<br> where every picture tells a unique story and sparks inspiration</p>
		</div>
		<div class="row">
			@if(count($gallery) > 0)
			@foreach($gallery as $retrieved_data)
			<div class="col-sm-4" style="margin-bottom:5px">
				<div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
							<a class="preview" href="{{$retrieved_data->image_path}}" rel="prettyPhoto">
								<img class="img-thumbnail" src="{{$retrieved_data->image_path}}" alt="">
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
			<a class="btn btn-primary" href="{{$blog[0]->getBlogPageLink()}}">See More...</a>
		</div>
		@endif
	</div>
</section>

@include('websites.agency.include.footer')
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