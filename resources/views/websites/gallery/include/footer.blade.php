<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                @if(isset($contact_us->address))<span class="topbar-label"><i class="fa fa-home"></i></span> <span class="topbar-hightlight mr-10">{{$contact_us->address}}</span>@endif
				@if(isset($contact_us->email))<span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight mr-10"><a href="mailto: {{$contact_us->email}}">{{$contact_us->email}}</a></span>@endif
				@if(isset($contact_us->contact_1))<span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight mr-10"><a href="tel: {{$contact_us->contact_1}}">{{ $contact_us->contact_1}}</a></span>@endif
                </div>
				<div class="col-sm-3">
				    <li id="" class="scroll"><a href="{{url('/')}}/{{$title}}/blog">Blog</a></li>
				   <li id="" class="scroll"><a href="{{url('/')}}/{{$title}}/about-us">About Us</a></li>
                   <li id="" class="scroll"><a href="{{url('/')}}/{{$title}}/contact-us">Contact Us</a></li>   
				</div>
                <div class="col-sm-3">
                    <ul class="social-icons">
                        <li>@if(isset($contact_us->facebook))<a class="fa fa-facebook font-25" href="{{$contact_us->facebook}}" title="Facebook" target="_blank"></a>@endif</li>
                        <li>@if(isset($contact_us->twitter))<a class="fa fa-twitter font-25" href="{{$contact_us->twitter}}" title="Twitter" target="_blank"></a>@endif</li>
                        <li>@if(isset($contact_us->instagram))<a class="fa fa-instagram font-25" href="{{$contact_us->instagram}}" title="Instagram" target="_blank"></a>@endif</li>
                        <li>@if(isset($contact_us->linkedin))<a class="fa fa-linkedin font-25" href="{{$contact_us->linkedin}}" title="LinkedIn" target="_blank"></a>@endif</li>
                    </ul>
                </div>
				
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{ asset('/websites/gallery/js/jquery.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/owl/owl.carousel-2.3.4.min.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/mousescroll.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/wow.min.js') }}"></script>
    <script src="{{ asset('/websites/gallery/js/main.js') }}"></script>
	<script src="{{ asset('/admin/plugins/toastr/toastr.min.js') }}"></script>
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