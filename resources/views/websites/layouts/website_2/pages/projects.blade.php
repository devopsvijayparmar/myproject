
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Projects</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Projects</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

<section id="blog" class="mb-5">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Projects</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Our innovative project aims to streamline operations,<br> increase efficiency, and drive significant cost savings for your business</p>
		</div>
	@if(count($projects) >0)
   @foreach($projects as $projectsdata) 
  
		<div class="container mt-4">
			<div class="row">
			
			<div class="col-md-6">
			<a href="{{$projectsdata->getDetailPageLink()}}">
			  <img src="{{$projectsdata->image_url_1}}" alt="Property Image" class="img-fluid">
			  </a>
			</div>
			
			<div class="col-md-6">
			  <h3> {{ $projectsdata->name }}</h3>
			  <p>{{ mb_strimwidth($projectsdata->project_type->name, 0, 50, "...")}}</p>
			 {!! mb_strimwidth($projectsdata->description, 0, 700, "...")!!}
			</div>
			</div>
		</div>
	 
	  @endforeach
	@endif
	<div class="center centered-div">
	{{ $projects->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	</div>
</section><!--/#portfolio-->

@section('script')
<script>
$('#projects').addClass('active');
</script>
@endsection