
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
			 <form method="POST" action="{{ route('password.update') }}">
			@csrf
			 <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
				<input id="email" type="email" readonly style="cursor: no-drop;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
				<span class="validation-error" id="email_error">@error('email'){{ $message }}@enderror</span>
            </div>
			
			 <div class="form-group">
				 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="{{ __('Password') }}">
				<input type="checkbox" onclick="myFunction()"> <small>Show Password<small>
				<span class="validation-error" id="email_error">@error('password'){{ $message }}@enderror</span>
            </div>
			
			 <div class="form-group">
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>
			
            <div class="text-center"><button type="submit" class="btn" style="width: 100%;">{{ __('Reset Password') }}</button></div>
            </form>
		
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
@include('front.include.footer')

