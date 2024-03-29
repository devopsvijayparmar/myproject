
<div id="inner_banner" class="section inner_banner_section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Service</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Service</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section pb-40">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Service</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	  @if(count($service) > 0)
		  @php
		  $i=0;
		  @endphp
	  @foreach($service as $servicedata)
		  @php
		  $i++;
		  $remainder = $i % 2;
		  @endphp
		  @if($remainder == 0)
		  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="full text_align_center margin_bottom_30">
			  <div class="center">
				<div class="icon"> <img src="{{ asset('/websites/website_1/images/it_service/i3.png') }}" alt="#" /> </div>
			  </div>
			<h4 class="theme_color">{{$servicedata->name}}</h4>
			  <p>{!!$servicedata->description!!}</p>
			</div>
		  </div>
	      @else
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="full text_align_center margin_bottom_30">
				<div class="center">
					<div class="icon"> <img src="{{ asset('/websites/website_1/images/it_service/i2.png') }}" alt="#" /> </div>
				</div>
				<h4 class="theme_color">{{$servicedata->name}}</h4>
				<p>{!!$servicedata->description!!}</p>
			</div>
			</div> 
		  @endif
		@endforeach
		@else
		 <div class="col-md-12"><p class="text-center">No Service Available</p></div>	
		@endif	
    </div>
	 <div class="center">
	   {{ $service->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	  </div>
  </div>
</div>

@section('script')
<script>
$('#service').addClass('active');
</script>
@endsection