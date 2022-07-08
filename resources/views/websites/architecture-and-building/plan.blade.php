 @include('websites.architecture-and-building.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Our Plans</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="#">Plans</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

     <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Plan</h2>
            </div>
			
			<div class="row">
				 @if(count($plan) > 0)
				 @foreach($plan as $plandata)
				 <div class="col-sm-4">
                    <div class="blog-post blog-large wow fadeInLeft animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($plandata->id)}}/single-plan"><img class="img-responsive card_img" src="{{url('/uploads/plan')}}/{{$plandata->image_1}}" alt=""></a>
                                    <a class="preview" href="{{url('/uploads/plan')}}/{{$plandata->image_1}}" rel="prettyPhoto"><span class="post-format post-format-video"><i class="fa fa-film"></i></span></a>
                                </div>
                                <div class="entry-date">{{$plandata->created_at}}</div>
                                <h2 class="entry-title"><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($plandata->id)}}/single-plan">{{$plandata->title}}</a></h2>
                            </header>

                            <div class="entry-content">
							{!! mb_strimwidth($plandata->description, 0, 200, "...") !!}
                               
                            </div>

                           
                        </article>
                    </div>
                </div>
				@endforeach
				@else
					<h4 class="text-center">No Record Available</h4>
				@endif
			</div>
		
			<div class="center">
			{{ $plan->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
			</div>
			
        </div>
    </section>
  @include('websites.architecture-and-building.include.footer')
  <script>
	$('#plantab').addClass('active');
  </script>