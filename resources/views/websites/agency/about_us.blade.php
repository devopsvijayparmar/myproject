 @include('websites.agency.include.header')

	<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">About Us</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">About Us</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
            </div>

            <div class="row">
                <div class="col-sm-12 wow fadeInRight">
                    <p>@if(isset($about_us->description)) {!! $about_us->description !!} @else <div class="col-md-12"><h4 class="text-center">No Record Available</h4></div> @endif</p>
                </div>
            </div>
        </div>
    </section><!--/#about-->

@include('websites.agency.include.footer')
<script>
$('#about_us_tab').addClass('active');
</script>