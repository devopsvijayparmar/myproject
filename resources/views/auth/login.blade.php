@include('front.include.header')
 
<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
		@if(Session::has('verify-email'))
		<div class="alert alert-success" role="alert">
			<p class="text-center" style="font-size: 20px;"><i style="font-size: 22px;color: green;" class="fa fa-check"></i> Your account has been successfully verified. Please check your email for website details. Thank you.</p>
		</div>
	   @endif
	   
		<div class="section-title text-center mb-0">
			<h2>Sign In</h2>
		</div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="form">
			 <form method="POST" action="{{ route('login') }}">
			@csrf
			 
            <div class="form-group">
				 <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" autofocus>
				 <span class="validation-error" id="email_error">@error('email'){{ $message }}@enderror</span>
            </div>
			  
			<div class="form-group">
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
				<span class="validation-error" id="password_error">@error('password'){{ $message }}@enderror</span>
            </div>
			
			<div class="form-group">
				<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					{{ __('Remember Me') }}
			</div>
			
            <div class="text-center"><button type="submit" class="btn" style="width: 100%;">Sign In</button></div>
            </form>
		
			<div class="d-flex justify-content-center links mt-3">
				Don't have an account? <a href="{{url('/signup')}}"  class="ml-2">Sign Up</a>
			</div>
			
			@if (Route::has('password.request'))
			<div class="d-flex justify-content-center links">
				<a href="{{ route('password.request') }}">Forgot your password?</a>
			</div>
			@endif
			
			
			
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
  <!--==========================
    Footer
  ============================-->
 @include('front.include.footer')
