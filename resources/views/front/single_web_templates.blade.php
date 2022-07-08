 @include('front.include.header')

  <!--==========================
    Team Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center mb-0">
        <h2>{{$webtemplates->title}}</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
            <a href="{{$webtemplates->url}}" target="_blank"><img src="{{ url('/uploads/front/web_templates') }}/{{$webtemplates->image}}" alt="img"></a>
            <div class="content-blog">
              <h4 style="margin-bottom:10px!important"><a href="{{$webtemplates->url}}" target="_blank">{{$webtemplates->title}}</a></h4>
			  <div class="table_btn">
               <a href="{{$webtemplates->url}}" target="_blank" class="csm-btn-3 btn"><i class="fa fa-search"></i>  Demo Preview</a>
                <a href="{{url('/signup')}}/?site={{$webtemplates->slug}}" class="csm-btn-4 btn"><i class="fa fa-wrench"></i> Build Your Website</a>
              </div>
              
            </div>
          </div>
        </div>
		 <div class="col-md-6 col-lg-6">
          <div class="block-blog text-left">
            <p>{!! $webtemplates->description !!}</p>
          </div>
        </div>
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