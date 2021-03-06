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
				 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" autofocus>
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
			
            <div class="text-center"><button type="submit" style="width: 100%;">Sign In</button></div>
            </form>
		
			<div class="d-flex justify-content-center links mt-3">
				Don't have an account? <a href="{{url('/signup')}}" class="ml-2">Sign Up</a>
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
 <script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
}) 
 
$('#site_name').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});
 
 $('#main_id12').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	
	var title = $('#title').val();
	var site_name = $('#site_name').val();
	var name = $('#name').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var confirm_password = $('#confirm_password').val();
	
	var cnt = 0;
	var f = 0;
	
	$('#title_error').html("");
	$('#site_name_error').html("");
	$('#name_error').html("");
	$('#email_error').html("");
	$('#password_error').html("");
	$('#confirm_password_error').html("");
	
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	
    function ValidateEmail(email) {
		var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		return expr.test(email);
	};
  
	if (title.trim() == '') {
		$('#title_error').html("Please select Your Website");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	
	if (site_name.trim() == '') {
		$('#site_name_error').html("Please enter Site Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#site_name').focus();
		}
	}
	
	if(site_name)
	{
		$.ajax({
			async: false,
            global: false,
			url: "{{url('/check-site-name')}}",
			type: "POST",
			data: {site_name:site_name, _token: "{{csrf_token()}}"},
			success: function (response) {
			   if(response == 1)
			   {
				   $('#site_name_error').html("The site name has already been taken");
					cnt = 1;
					f++;
					if(f == 1)
					{
						$('#site_name').focus();
					}
			   }
			}
		});
	}
	
	if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();
		}
	}
	
	if (email.trim() == '') {
		$('#email_error').html("Please enter Email");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		}
	}
	 if(email)
	{
		if (!ValidateEmail(email)) {
			$('#email_error').html("Please enter valid email");
			cnt = 1;
			f++;
			if(f == 1)
			{
				$('#email').focus();
			}
		}
	}
	
	if(email)
	{
		$.ajax({
			async: false,
            global: false,
			url: "{{url('/check-email')}}",
			type: "POST",
			data: {email:email, _token: "{{csrf_token()}}"},
			success: function (response) {
			   if(response == 1)
			   {
				   $('#email_error').html("The email has already been taken");
					cnt = 1;
					f++;
					if(f == 1)
					{
						$('#email').focus();
					}
			   }
			}
		});
	}
		
	if(password.trim() ==''){
		$('#password_error').html("Please enter Password");
		cnt =1;
		f++;
		if(f == 1)
		{
			$('#password').focus();
		}
	
	}
	
	if(password)
	{
		if(password.length<8) {
			$('#password_error').html("Password should be atleast 8 characters");
			cnt =1;
			f++;
			if(f == 1)
			{
				$('#password').focus();
			}
		}
		else 
		{
		if(password.match(number) && password.match(alphabets) && password.match(special_characters)) {            
		
		} else {
			$('#password_error').html("Must contain min. 8 characters with at least 1 number and 1 special character");
			cnt =1;
			f++;
			if(f == 1)
			{
				$('#password').focus();
			}
		}
		}
	}
	
	if(confirm_password != password){
		$('#confirm_password_error').html("Password and Confirm Password does not match");
		cnt =1;
		f++;
		if(f == 1)
		{
			$('#confirm_password').focus();
		}
	}
	if(confirm_password.trim() == ''){
		$('#confirm_password_error').html("Please enter Confirm Password");
		cnt =1;
		f++;
		if(f == 1)
		{
			$('#confirm_password').focus();
		}
	}
	
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
}); 
 
 
 $('.home-carousel').owlCarousel({
    loop:true,
    autoplayTimeout:12000,
	autoplay:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        }
    }
});

</script>