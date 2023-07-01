
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
			    @yield('footer_menu')
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              @if(isset($contact_us->facebook))<li><a class="" target="_blank" href="{{$contact_us->facebook}}"><img style="height: 34px;" src="{{asset('social/facebook.png')}}"></a></li>@endif
              @if(isset($contact_us->twitter))<li><a class="" target="_blank" href="{{$contact_us->twitter}}"><img style="height: 34px;" src="{{asset('social/twitter.png')}}"></a></li>@endif
              @if(isset($contact_us->instagram))<li><a class="" target="_blank" href="{{$contact_us->instagram}}"><img style="height: 34px;" src="{{asset('social/instagram.png')}}"></a></li>@endif
              @if(isset($contact_us->linkedin))<li><a class="" target="_blank" href="{{$contact_us->linkedin}}"><img style="height: 34px;" src="{{asset('social/linkedin.png')}}"></a></li>@endif
            </ul>
          </div>
        </div>
      </div>
</footer>

<!-- end footer -->
<!-- js section -->
<script src="{{ asset('/websites/website_1/js/jquery.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/js/menumaker.js') }}"></script>
<script src="{{ asset('/websites/website_1/js/wow.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/websites/website_1/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('/owl/owl.carousel-2.3.4.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('/websites/common/js/mousescroll.js') }}"></script>
<script src="{{ asset('/websites/common/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('/websites/common/js/main.js') }}"></script>
<script src="{{ asset('/websites/common/js/common.js') }}"></script>
<!--for image Popup js-->

@yield('script')

</body>
</html>
@if(Session::has('success'))
<script>
toastr.success('{{ Session::get('success') }}', '', {timeOut: 5000});
</script>
@endif
@if(Session::has('error'))
<script>
toastr.error('{{ Session::get('error') }}', '', {timeOut: 5000});
</script>
@endif
