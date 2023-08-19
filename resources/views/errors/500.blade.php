 @include('front.include.no_header')
  <!--==========================
    Contact Section
  ============================-->

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
          <div class="card-body">
            
			<div class="text-center">
			<img height="100" src="{{asset('front/img/server.png')}}">
			</div>
			<h3 class="card-title text-center">SERVER ERROR</h3>
            <p class="card-text">
             Oops! It appears that our server is experiencing some technical difficulties at the moment. Rest assured, our team is actively working on fixing the issue. We apologize for any inconvenience caused and thank you for your understanding.
            </p>
			<div class="text-center">
			<a href="{{url('/contact-us')}}" class="btn btn-primary">Contact Support</a>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 @include('front.include.no_footer')
