 @include('websites.agency.include.header')

	<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Gallery</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Gallery</a>
                </div>
              
            </div>
        </div>
    </section><!--/#cta-->

    <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Gallery</h2>
            </div>
            
            <div class="row">
				@if(count($gallery) > 0)
				@foreach($gallery as $retrieved_data)
                <div class="col-md-3 pd-10">
					<a class="preview" href="{{url('/uploads/gallery')}}/{{$retrieved_data->image}}" rel="prettyPhoto">
						<div class="portfolio-item-inner vp-hover">
							<img class="img-responsive shoot_img" src="{{url('/uploads/gallery')}}/{{$retrieved_data->image}}" alt="">
						</div>
					</a>
                </div><!--/.portfolio-item-->
				@endforeach
				@else
					<h4 class="text-center">No Record Available</h4>
				@endif	
            </div>
			 <div class="center">
			   {{ $gallery->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			  </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
	
@include('websites.agency.include.footer')
<script>
$('#gallerytab').addClass('active');
</script>