 @include('front.include.header')
 
<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center mb-5"">
        <h2>Register</h2>
        <p class="separator">Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
			<form id="main_id12" method="POST" action="{{url('/signup')}}" enctype="multipart/form-data" autocomplete="off">
			@method('POST')
			@csrf
			 <div class="form-group">
                <select name="site_name" class="form-control" id="site_name"/>
				    <option value="">Select Your Website</option>
					@foreach($sites as $site)
					<option @if(old('site_name') == $site->site_name) selected @endif @if($user_site == $site->site_name) selected @endif value="{{$site->site_name}}">{{$site->name}}</option>
					@endforeach
				<select>
                <span class="validation-error" id="site_name_error">{{$errors->register->first('site_name')}}</span>
              </div>
			  
			  <div class="form-group">
                <input type="text" onkeypress="return onlyAlphabets(event, this);"  maxlength="255" name="title" class="form-control" id="title" value="{{ old('title') }}" style='text-transform:lowercase'  placeholder="Your Site Name" data-toggle="tooltip" data-placement="top" title="Only Alphabets and Numbers are allowed"/>
				<span class="validation-error" id="title_error">{{$errors->register->first('title')}}</span>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control"  maxlength="255" id="name" value="{{ old('name') }}"  placeholder="Your Name"/>
				 <span class="validation-error" id="name_error">{{$errors->register->first('name')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email"  maxlength="255" id="email" value="{{ old('email') }}"  placeholder="Your Email"/>
				 <span class="validation-error" id="email_error">{{$errors->register->first('email')}}</span>
              </div>
			  
			   <div class="form-group">
                <input type="password" name="password" maxlength="255" autocomplete="new-password" value="{{ old('password') }}"  class="form-control" id="password" placeholder="Password" data-toggle="tooltip" data-placement="top" title="Your password must contain min. 8 characters" />
				 <span class="validation-error" id="password_error">{{$errors->register->first('password')}}</span>
              </div>
			  
			   <div class="form-group">
                <input type="password" name="confirm_password"  maxlength="255" autocomplete="new-password" value="{{ old('confirm_password') }}"  class="form-control" id="confirm_password" placeholder="Confirm Password" />
				 <span class="validation-error" id="confirm_password_error">{{$errors->register->first('confirm_password')}}</span>
              </div>
              
              <div class="text-center"><button type="submit" style="width: 100%;">Register</button></div>
            </form>
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
 
$('#title').keypress(function (e) {
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
	
	
	var site_name = $('#site_name').val();
	var title = $('#title').val();
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
	

    function ValidateEmail(email) {
		var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		return expr.test(email);
	};
  
	if (site_name.trim() == '') {
		$('#site_name_error').html("Please select Your Website");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#site_name').focus();
		}
	}
	
	if (title.trim() == '') {
		$('#title_error').html("Please enter Site Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();
		}
	}
	
	if(title)
	{
		$.ajax({
			async: false,
            global: false,
			url: "{{url('/check-site-name')}}",
			type: "POST",
			data: {title:title, _token: "{{csrf_token()}}"},
			success: function (response) {
			   if(response == 1)
			   {
				   $('#title_error').html("The site name has already been taken");
					cnt = 1;
					f++;
					if(f == 1)
					{
						$('#title').focus();
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