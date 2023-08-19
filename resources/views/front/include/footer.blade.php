 <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

			<a href="{{ url('/') }}"  class="navbar-brand logo-bg"><h4>{{config('enum.site_title')}}</h4></a></br>
            <p>Sign up now for our free website builder, select the type of website you want to create, publish your website, and go live to start building your professional online presence today.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Company</h4>

            <ul class="list-unstyled">
              <li><a href="{{url('/page/terms-of-use')}}" target="_blank">Terms of Use</a></li>
              <li><a href="{{url('/page/privacy-policy')}}" target="_blank">Privacy Policy</a></li>
			  <li><a href="{{ url('/page/about-us') }}" >About us</a></li>
			  <li><a href="{{ url('/business') }}" >Business</a></li>
			  
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Product</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/web-templates') }}">Download</a></li>
              <li><a href="#">Documentation</a></li>
              <li><a href="{{ url('/web-templates') }}">100+ Features Websites</a></li>
			   <li><a href="{{ url('/web-templates') }}">Email Marketing</a></li>
            </ul>

          </div>
        </div>
		
		 <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Features</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/signup') }}">Free Updates</a></li>
              <li><a href="{{ url('/signup') }}">Clean Code</a></li>
              <li><a href="{{ url('/signup') }}">Free Customization </a></li>
              <li><a href="{{ url('/signup') }}">landing Page Builder</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/contact-us') }}">Contact Support</a></li>
              <li><a href="{{ url('/page/faq') }}">FAQ</a></li>
              <li><a href="{{ url('/login') }}">Sign In</a></li>
              <li><a href="{{ url('/signup') }}">Register</a></li>
              <li><a href="{{ url('/customization') }}">Customization & feedback</a></li>
            </ul>

          </div>
        </div>

       

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights {{date('Y')}} {{config('enum.site_title')}}. All rights reserved.</p>
       
      </div>
    </div>

  </footer>
  
  
  
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title">Sign in</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<div class="form">
				<form method="POST" action="{{ route('login') }}">
				@csrf
				<input type="hidden" name="url" value="" id="loginurl">
				<div class="form-group">
					 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" autofocus>
					 <span class="validation-error" id="email_error">@error('email'){{ $message }}@enderror</span>
				</div>
				  
				<div class="form-group">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
					<span class="validation-error" id="password_error">@error('password'){{ $message }}@enderror</span>
				</div>
				
				<div class="form-group">
					<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						{{ __('Remember Me') }}
				</div>
				
				<div class="text-center"><button type="submit" class="btn" style="width: 100%;background: #0f66dc!important;">Sign In</button></div>
				</form>
			
				<div class="d-flex justify-content-center links mt-3">
					Don't have an account? <a  style="font-size: 13px;"  href="{{url('/signup')}}"  class="ml-2">Sign Up</a>
				</div>
				
				@if (Route::has('password.request'))
				<div class="d-flex justify-content-center links">
					<a  style="font-size: 13px;"  href="{{ route('password.request') }}">Forgot your password?</a>
				</div>
				@endif
			  </div>
			</div>
			
		</div>
		<!-- /.modal-content -->
	</div>
	</div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="{{ url('/front/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/front/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ url('/front/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ url('/front/lib/modal-video/js/modal-video.js') }}"></script>
  <script src="{{ url('/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/front/lib/wow/wow.min.js') }}"></script>
  <script src="{{ url('/front/js/main.js') }}"></script>
  <script src="{{ url('/admin/plugins/toastr/toastr.min.js') }}"></script>

</body>
</html>
<script>
 $(document).ready(function() {
 $('.input-group-addon').click(function() {
	var passwordInput = $('#password');
	var type = passwordInput.attr('type');
	
	if (type === 'password') {
	  passwordInput.attr('type', 'text');
	  $('.input-group-addon i').removeClass('fa-eye-slash').addClass('fa-eye');
	} else {
	  passwordInput.attr('type', 'password');
	  $('.input-group-addon i').removeClass('fa-eye').addClass('fa-eye-slash');
	}
  });
});

function loginPopup(url){
	$('#loginurl').val(url);
	$('#modal-default').modal('show');
}

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
</script>
