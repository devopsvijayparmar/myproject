 @include('front.include.header')

  <!--==========================
    Team Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Web Templates</h2>
        <p class="separator">Make Your Own Website And Get Built-In Tools To Grow Your Business Online.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">
         @foreach($webtemplates as $webtemplatesdata)
        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}"><img src="{{ url('/uploads/front/web_templates') }}/{{$webtemplatesdata->image}}" alt="img"></a>
            <div class="content-blog">
				<h4><a href="{{url('/web-templates')}}/{{$webtemplatesdata->slug}}">{{$webtemplatesdata->title}}</a></h4>
				<a href="{{$webtemplatesdata->preview}}" target="_blank" class="csm-btn-1 btn"><i class="fa fa-search"></i>  Demo Preview</a>
                <a href="{{url('/signup')}}/?site={{$webtemplatesdata->url}}" class="csm-btn-2 btn"><i class="fa fa-wrench"></i> Build Your Website</a>
            </div>
          </div>
        </div>
         @endforeach
      

      </div>
    </div>
  </section>

  <!--==========================
    Footer
  ============================-->
 @include('front.include.footer')
<script>
$('#templatetab').addClass('menu-active');
</script>