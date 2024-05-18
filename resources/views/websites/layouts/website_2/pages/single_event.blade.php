
 <section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Event</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Event</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->
   
<section id="blog" style="margin-bottom:80px;">
	<div class="container">
		<div class="row">
			<main>
				<div class="container mt-4">
					<div class="row">
					
					<div class="col-md-6">
					<a rel="prettyPhoto" class="preview" href="{{$event->image_url}}">
					  <img src="{{$event->image_url}}" alt="Property Image" class="img-fluid">
					  </a>
					</div>
					
					<div class="col-md-6">
					  <h3> {{ $event->title }}</h3>
					  <small>{{date('F j, Y, g:i a',strtotime($event->start_date))}}</small>
					  <small>{{date('F j, Y, g:i a',strtotime($event->end_date))}}</small>
					  {!! $event->description !!}
					</div>
					</div>
				</div>
			</main>
		</div>
	</div>
</section>
    
@section('script')
<script>
$('#eventtab').addClass('active');
</script>
@endsection 
 