 @include('websites.photography.include.header')
    
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Photo Shoots</h2>
					<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Photo Shoots</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

      <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            <div class="row">
				@if(count($photoshoots) >0)
				@foreach($photoshoots as $photoshootsdata)
				<div class="col-md-3 col-sm-6">
					<div class="product-grid" style="padding:0!important">
						<div class="product-image">
							<a class="preview" href="{{$photoshootsdata->image}}" rel="prettyPhoto">
								<img class="pic-1" src="{{$photoshootsdata->image}}">
							</a>
						</div>
						<div class="p-2">
							<div class="font-clr">{{ mb_strimwidth($photoshootsdata->name, 0, 40, "...")}}</div>
							<div class="font-clr">{{ mb_strimwidth($photoshootsdata->category_name, 0, 40, "...")}}</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="center">
				{{ $photoshoots->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			   </div>
				@else
					<h4 class="text-center">No Record Available</h4>
				@endif
			</div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
  @include('websites.photography.include.footer')
 <script>
	$('#photoshootstab').addClass('active');
  </script>