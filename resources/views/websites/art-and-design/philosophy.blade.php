 @include('websites.art-and-design.include.header')

	<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Our Philosophy</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Our Philosophy</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Philosophy</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 wow fadeInRight">
                    <p>@if(isset($philosophy->description)) {!! $philosophy->description !!} @endif</p>
                </div>
            </div>
        </div>
    </section><!--/#about-->

@include('websites.art-and-design.include.footer')
<script>
$('#philosophy_tab').addClass('active');
</script>