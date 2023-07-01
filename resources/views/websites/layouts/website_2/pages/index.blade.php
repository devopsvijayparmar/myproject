
<section>
	<div class="owl-carousel owl-theme home-carousel">
	@foreach($slider as $retrieved_data)
		<div class="item">
			<img class="home-img" src="{{$retrieved_data->image}}">
		</div>
	@endforeach
	</div>
</section>

@section('script')
<script>
$('.home-carousel').owlCarousel({
    loop:true,
    autoplayTimeout:12000,
	autoplay:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        }
    }
});
$('#hometab').addClass('active');
</script>
@endsection