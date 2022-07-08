 @include('websites.technology.include.header')

	<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Promotion</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Promotion</a>
                </div>
              
            </div>
        </div>
    </section><!--/#cta-->

    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Promotion</h2>
            </div>

            <div class="row">
                <div class="col-sm-12 wow fadeInRight">
                    @if(isset($promotion)) {!! $promotion->description !!} @else <div class="col-md-12"><h4 class="text-center">No Record Available</h4></div> @endif
                </div>
            </div>
        </div>
    </section><!--/#about-->

@include('websites.technology.include.footer')
<script>
$('#promotiontab').addClass('active');
</script>