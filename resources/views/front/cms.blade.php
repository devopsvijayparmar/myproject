 @include('front.include.header')

  <!--==========================
    Price Section
  ============================-->
   <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>{{$cms->title}}</h2>
      </div>
    </div>

    <div class="container" style="text-align: left;">
	{!! $cms->description !!}
    </div>
  </section>
  <!--==========================
    Footer
  ============================-->
 @include('front.include.footer')
 
@if($cms->type == 'about-us')
<script>
$('#abouttab').addClass('menu-active');
</script>
@endif