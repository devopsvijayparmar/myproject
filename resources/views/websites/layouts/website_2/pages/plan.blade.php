
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Plans</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Plans</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

<section id="blog" class="mb-5" style="margin-bottom:80px;">
	@if(count($plan) >0)
   @foreach($plan as $plandata) 
  
		<div class="container mt-4">
			<div class="row">
			
			<div class="col-md-6">
			<a href="{{$plandata->getDetailPageLink()}}">
			  <img src="{{$plandata->image_url_1}}" alt="Property Image" class="img-fluid">
			  </a>
			</div>
			
			<div class="col-md-6">
			  <h3>{{ $plandata->name }}</h3>
			  {!! $plandata->description !!}
			</div>
			</div>
		</div>
	 
	  @endforeach
	@endif
	<div class="center centered-div">
	{{ $plan->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	</div>
</section><!--/#portfolio-->

@section('script')
<script>
$('#plantab').addClass('active');
</script>
@endsection