
 <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row" style="padding-top: 20px;">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">@if(isset($site_setting->footer_about_us)) {!! mb_strimwidth($site_setting->footer_about_us, 0, 500, "...") !!} @endif</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Contact Us</h6>
            <ul class="footer-links">
                <li>@if(isset($contact_us->address))<i class="fa fa-home"></i> {{$contact_us->address}} @endif</li>
				<li>@if(isset($contact_us->email))<i class="fa fa-envelope-o"></i> <a style="color:white" href="mailto:{{$contact_us->email}}">{{$contact_us->email}}</a> @endif</li>
				<li> @if(isset($contact_us->contact_1))<i class="fa fa-phone"></i> <a style="color:white" href="tel:{{$contact_us->contact_1}}">{{$contact_us->contact_1}}</a>@endif</li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
				<li><a id="blog" href="{{url('blog')}}">Blog</a></li>
				<li><a id="service" href="{{url('service')}}">Services</a></li>
				<li><a id="promotion" href="{{url('promotion')}}">Promotions</a></li>
				<li><a id="about_us" href="{{url('about-us')}}">About Us</a></li>
				<li><a id="contact-us" href="{{url('contact-us')}}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              @if(isset($contact_us->facebook))<li><a class="" href="{{$contact_us->facebook}}"><img style="height: 34px;" src="{{asset('social/facebook.png')}}"></a></li>@endif
              @if(isset($contact_us->twitter))<li><a class="" href="{{$contact_us->twitter}}"><img style="height: 34px;" src="{{asset('social/twitter.png')}}"></a></li>@endif
              @if(isset($contact_us->instagram))<li><a class="" href="{{$contact_us->instagram}}"><img style="height: 34px;" src="{{asset('social/instagram.png')}}"></a></li>@endif
              @if(isset($contact_us->linkedin))<li><a class="" href="{{$contact_us->linkedin}}"><img style="height: 34px;" src="{{asset('social/linkedin.png')}}"></a></li>@endif
            </ul>
          </div>
        </div>
      </div>
</footer>

<!-- end footer -->
<!-- js section -->
<script src="{{ asset('/websites/watch/js/jquery.min.js') }}"></script>
<script src="{{ asset('/websites/watch/js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('/websites/watch/js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('/websites/watch/js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('/websites/watch/js/custom.js') }}"></script>
<!-- revolution js files -->
<script src="{{ asset('/websites/watch/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/websites/watch/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('/owl/owl.carousel-2.3.4.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/toastr/toastr.min.js') }}"></script>

<!--for image Popup js-->
<script src="{{ asset('/websites/studio/js/mousescroll.js') }}"></script>
<script src="{{ asset('/websites/studio/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('/websites/studio/js/main.js') }}"></script>
<!--for image Popup js-->
<!-- map js -->

<!-- end google map js -->
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
