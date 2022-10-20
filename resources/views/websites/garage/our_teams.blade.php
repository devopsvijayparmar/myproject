 @include('websites.garage.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Our Teams</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Our Teams</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

     <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Teams</h2>
            </div>

            <div class="row">
				@if(count($ourteam) > 0)
				@foreach($ourteam as $ourteamdata)
                <div class="col-md-3 pd-10">
					<a class="preview" href="{{$ourteamdata->image}}" rel="prettyPhoto">
						<div class="portfolio-item-inner vp-hover">
							<img class="img-responsive shoot_img" src="{{$ourteamdata->image}}" alt="">
						</div>
						<span class="onhovershow ps-title">{{$ourteamdata->name}}</span>
					</a>
                </div><!--/.portfolio-item-->
				@endforeach
				@else
					<h4 class="text-center">No Record Available</h4>
				@endif
            </div>
		   <div class="center">
		   {{ $ourteam->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
		  </div>
		  
        </div><!--/.container-->
    </section><!--/#portfolio-->
  @include('websites.garage.include.footer')
  <script>
	$('#ourteamtab').addClass('active');
  </script>