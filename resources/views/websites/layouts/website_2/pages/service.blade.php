<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Our Services</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Services</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

 <section id="services" >
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Our Services</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Discover a world of convenience and peace of mind as our reliable service solutions</br> seamlessly streamline and simplify every aspect of your life</p>
		</div>
		<div class="row">
			 @php
			  $i=0;
			  @endphp
			  @if(count($service) > 0)
			  @foreach($service as $servicedata)
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
							<p>{!!$servicedata->description!!}</p>
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
							<p>{!!$servicedata->description!!}</p>
						</div>
					</div>
				</div><!--/.col-md-4-->
				@endif
				@endforeach
				@else
				   <div class="col-md-12"><h4 class="text-center">No Record Available</h4></div>
				@endif
		</div><!--/.row--> 
		<div class="center centered-div">
			{{ $service->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
		</div>		
	</div><!--/.container-->
</section><!--/#services-->

@section('script')
<script>
$('#servicetab').addClass('active');
</script>
@endsection