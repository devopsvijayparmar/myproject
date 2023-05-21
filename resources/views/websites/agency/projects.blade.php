 @include('websites.agency.include.header')
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

    <section id="blog" class="mb-5" style="margin-bottom:80px;">
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
				  <p>{{ mb_strimwidth($projectsdata->project_type->name, 0, 50, "...")}}: 3</p>
				  {!! $projectsdata->description !!}
				</div>
				</div>
			</div>
		 
		  @endforeach
		@endif
		<div class="center centered-div">
		{{ $projects->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
		</div>
    </section><!--/#portfolio-->
	
  @include('websites.agency.include.footer')
  <script>
$('#projects').addClass('active');
</script>