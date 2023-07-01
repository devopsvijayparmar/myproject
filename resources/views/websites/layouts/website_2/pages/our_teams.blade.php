
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Our Teams</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Our Teams</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

<section id="blog"  style="margin-bottom:80px;">
	<div class="container">
		<div class="row">
			@if(count($ourteam) >0)
			@foreach($ourteam as $ourteamdata) 
			<div class="col-md-4 col-sm-6 mb-2">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image card-product">
						<img class="img-thumbnail p-0" src="{{$ourteamdata->image_url}}">
						<ul class="card-product__imgOverlay">
						<li>{{$ourteamdata->name}}</li>
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
	<div class="center centered-div">
	{{ $ourteam->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	</div>
</section><!--/#portfolio-->

@section('script')
<script>
$('#ourteamtab').addClass('active');
</script>
@endsection