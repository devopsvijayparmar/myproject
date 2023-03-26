 @include('websites.architecture-and-building.include.header')

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
            </div>

            <div class="row">
                <div class="features">
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
                                <p>{{$servicedata->description}}</p>
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
                                <p>{{$servicedata->description}}</p>
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
  @include('websites.architecture-and-building.include.footer')
  <script>
	$('#servicetab').addClass('active');
  </script>