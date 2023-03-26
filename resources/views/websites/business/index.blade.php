 @include('websites.business.include.header')

<section>
	<div class="owl-carousel owl-theme home-carousel">
	@foreach($slider as $retrieved_data)
		<div class="item">
			<img class="home-img" src="{{$retrieved_data->image}}">
		</div>
	@endforeach
	</div>
</section>

 <section id="blog">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">PROJECTS</h2>
		</div>
		
		<div class="row">
			@if(count($projects) >0)
			@foreach($projects as $projectsdata) 
			<div class="col-md-4 col-sm-6">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image">
						<a href="{{$projectsdata->getDetailPageLink()}}">
							<img class="pic-1" src="{{$projectsdata->image_1}}">
						</a>
						<ul class="social">
							<li><a href="{{$projectsdata->getDetailPageLink()}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
						</ul>
						<!--<span class="product-new-label">Sale</span>
						<span class="product-discount-label">20%</span>-->
					</div>
					<div class="p-2">
						<div class="font-clr">{{ mb_strimwidth($projectsdata->name, 0, 50, "...")}}</div>
						<div class="font-clr"><div class="">{{ mb_strimwidth($projectsdata->project_type->name, 0, 50, "...")}}</div></div>
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

<section id="features">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Our Gallery</h2>
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
								<img class="img-responsive card_img" src="{{$retrieved_data->image_path}}" alt="">
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
		</div>
		<div class="row">
			 @if(count($blog) > 0)
			 @foreach($blog as $blogdata)
			 <div class="col-sm-4">
				<div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
					<article>
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="{{$blogdata->getDetailPageLink()}}"><img class="img-responsive card_img" src="{{$blogdata->image}}" alt=""></a>
								<a class="preview" href="{{$blogdata->image}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
							</div>
							<div class="entry-date">{{$blogdata->created_at}}</div>
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

@include('websites.business.include.footer')
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