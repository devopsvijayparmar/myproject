 @include('front.include.header')
 <style>
 .select2-container--default .select2-selection--single {
    border: 1px solid #ced4da!important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #6c757d!important;
}
.select2-container .select2-selection--single {
    height: 40px!important;
   
}
.select2-container .select2-selection--single .select2-selection__rendered {
    padding-top: 5px!important;
    font-size: 14px!important;
}
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 38px!important;
}
#terms_of_use_privacy_policy{
	height: 19px!important;
    width: 17px!important;
	    cursor: pointer;
}
 </style>
 <link href="{{ asset('/front/lib/select2/css/select2.css') }}" rel="stylesheet">
<section id="contact" class="padd-section wow padd-top fadeInUp">

    <div class="container">
      <div class="section-title text-center mb-5">
        <h2 style="text-transform: none;">Sign Up. Let's build a website free</h2>
        <p class="separator">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</p>
      </div>
    </div>
   
    <div class="container">
     @include('front.include.success_message')
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
          <div class="form">
            <div id="errormessage"></div>
			<form id="signup_id" method="POST" action="{{url('/signup')}}" enctype="multipart/form-data" autocomplete="off">
			@method('POST')
			@csrf
			 <div class="form-group">
                <select name="site_name" class="form-control select2" id="site_name"/>
				    <option value="">Select Website</option>
					@foreach($sites as $site)
					<option @if(old('site_name') == $site->site_name) selected @endif @if($user_site == $site->site_name) selected @endif value="{{$site->site_name}}">{{$site->name}}</option>
					@endforeach
				<select>
                <span class="validation-error" id="site_name_error">{{$errors->register->first('site_name')}}</span>
              </div>
			  
			   <div class="form-group">
                <input type="text" name="domain_name" id="title" style='text-transform:lowercase' onkeypress="return onlyAlphabets(event, this);" class="form-control"  maxlength="255" value="{{ old('title') }}"  placeholder="Site Name / Domain"  title="Only Alphabets and Numbers are allowed" />
				 <span class="validation-error" id="name_error">{{$errors->register->first('name')}}</span>
              </div>
			  
              <div class="form-group">
                <input type="text" name="name" class="form-control"  maxlength="255" id="name" value="{{ old('name') }}"  placeholder="Company Name"/>
				 <span class="validation-error" id="name_error">{{$errors->register->first('name')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email"  maxlength="255" id="email" value="{{ old('email') }}"  placeholder="Company Email"/>
				 <span class="validation-error" id="email_error">{{$errors->register->first('email')}}</span>
              </div>
			  
			   <div class="form-group">
                <input type="password" name="password" maxlength="255" autocomplete="new-password" value="{{ old('password') }}"  class="form-control" id="password" placeholder="Password" data-toggle="tooltip" data-placement="top" title="Your password must contain min. 8 characters" />
				 <div class="input-group-addon">
				  <i class="fa fa-eye-slash"></i>
				</div>
				<span class="validation-error" id="password_error">{{$errors->register->first('password')}}</span>
              </div>
			  
			   <div class="form-group">
                <input type="password" name="confirm_password"  maxlength="255" autocomplete="new-password" value="{{ old('confirm_password') }}"  class="form-control" id="confirm_password" placeholder="Confirm Password" />
				 <span class="validation-error" id="confirm_password_error">{{$errors->register->first('confirm_password')}}</span>
               </div>
			   
			   <p style="margin:0;" class="form__checkboxText"><input id="terms_of_use_privacy_policy" name="terms_of_use_privacy_policy" type="checkbox" value="yes"> <strong>I agree to {{config('enum.site_title')}}'s <a class="form__checkboxLink" href="{{url('/page/terms-of-use')}}" target="_blank" rel="noopener noreferrer">Terms &amp; Conditions</a> and <a class="form__checkboxLink" href="{{url('/page/privacy-policy')}}" target="_blank" rel="noopener noreferrer">Privacy Policy</a></strong> <span class="validation-error" id="terms_of_use_privacy_policy_error">{{$errors->register->first('terms_of_use_privacy_policy_error')}}</span></p>
			   
              
              <div class="text-center"><button class="btn" type="submit" style="width: 100%;">Register</button></div>
			  
			
				<div class="d-flex mt-3" style="font-size:14px">
					Have an account? <a href="{{url('/login')}}" class="ml-2">Sign In</a>
				</div>
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
   <script src="{{ asset('/front/lib/select2/js/select2.js') }}"></script>
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! $validator->selector('#signup_id') !!}
 <script>
 $('.select2').select2({});
$('#signuptab').addClass('menu-active');

$('#title').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
});


</script>