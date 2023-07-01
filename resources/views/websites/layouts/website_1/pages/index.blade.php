
<div id="slider" class="section main_slider pb-40">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    @php $i=0; @endphp
		@foreach($slider as $retrieved_data)
		<li data-target="#carouselExampleIndicators" style="width:20px" data-slide-to="{{$i}}" class="@if($i == 0) active @endif"></li>
		@php $i++; @endphp
		@endforeach
	  </ol>
	  <div class="carousel-inner">
		@php $i=0; @endphp
		@foreach($slider as $retrieved_data)
		<div class="carousel-item @if($i == 0) active @endif">
			<img class="d-block w-100" src="{{$retrieved_data->image}}">
		</div>
		@php $i++; @endphp
		@endforeach
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</div>

@section('script')
<script>
$('#home').addClass('active');
</script>
@endsection