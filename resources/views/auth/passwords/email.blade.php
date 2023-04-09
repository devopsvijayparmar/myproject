@include('front.include.header')

<section id="contact" class="padd-section padd-top wow fadeInUp">

    <div class="container">
		 @if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif
	   
		<div class="section-title text-center mb-0">
			<h2>{{ __('Reset Password') }}</h2>
		</div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="form">
			 <form method="POST" action="{{ route('password.email') }}">
			@csrf
			 
            <div class="form-group">
				<input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
				<span class="validation-error" id="email_error">@error('email'){{ $message }}@enderror</span>
            </div>
			
            <div class="text-center"><button type="submit" class="btn" style="width: 100%;">{{ __('Send Password Reset Link') }}</button></div>
            </form>
		
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
@include('front.include.footer')
