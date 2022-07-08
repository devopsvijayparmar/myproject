 <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>COMPANY</h4>

            <ul class="list-unstyled">
              <li><a href="{{url('/page/terms-of-use')}}" target="_blank">Terms of Use</a></li>
              <li><a href="{{url('/page/privacy-policy')}}" target="_blank">Privacy Policy</a></li>
			  <li><a href="{{ url('/page/about-us') }}" >About us</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>PRODUCT</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/web-templates') }}">Download</a></li>
              <li><a href="#">Documentation</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/contact-us') }}">Contact Support</a></li>
              <li><a href="{{ url('/login') }}">Sign In</a></li>
              <li><a href="{{ url('/signup') }}">Register</a></li>
            </ul>

          </div>
        </div>

       

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ url('/front/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/front/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ url('/front/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ url('/front/lib/easing/easing.min.js') }}"></script>
  <script src="{{ url('/front/lib/modal-video/js/modal-video.js') }}"></script>
  <script src="{{ url('/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/front/lib/wow/wow.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ url('/front/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ url('/front/js/main.js') }}"></script>
  <script src="{{ url('/admin/plugins/toastr/toastr.min.js') }}"></script>

</body>
</html>

@if(Session::has('success'))
<script>
toastr.success('<?php echo Session::get('success') ?>', '', {timeOut: 5000});
</script>
@endif

@if(Session::has('error'))
<script>
toastr.error('<?php echo Session::get('error') ?>', '', {timeOut: 5000});
</script>
@endif
