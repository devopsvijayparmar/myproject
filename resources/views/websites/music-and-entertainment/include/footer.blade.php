<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                  <?php if(isset($contact_us->address)) { ?><span class="topbar-label"><i class="fa fa-home"></i></span> <span class="topbar-hightlight mr-10">{{$contact_us->address}}</span><?php }?>
				  <?php if(isset($contact_us->email)) { ?><span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight mr-10"><a href="mailto: {{$contact_us->email}}">{{$contact_us->email}}</a></span><?php } ?>
				  <?php if(isset($contact_us->contact_1)) { ?><span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight mr-10"><a href="tel: {{$contact_us->contact_1}}">{{ $contact_us->contact_1}}</a></span><?php } ?>
                </div>
                <div class="col-sm-3">
                    <ul class="social-icons">
                        <li><?php if(isset($contact_us->facebook)) { ?><a class="fa fa-facebook" href="{{$contact_us->facebook}}" title="Facebook" target="_blank"></a><?php } ?></li>
                        <li><?php if(isset($contact_us->twitter)) { ?><a class="fa fa-twitter" href="{{$contact_us->twitter}}" title="Twitter" target="_blank"></a><?php } ?></li>
                        <li> <?php if(isset($contact_us->instagram)) { ?><a class="fa fa-linkedin" href="{{$contact_us->instagram}}" title="LinkedIn" target="_blank"></a><?php } ?></li>
                        <li> <?php if(isset($contact_us->linkedin)) { ?><a class="fa fa-instagram" href="{{$contact_us->linkedin}}" title="Instagram" target="_blank"></a><?php } ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{ url('/websites/music-and-entertainment/js/jquery.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/owl/owl.carousel-2.3.4.min.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/mousescroll.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/smoothscroll.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/jquery.inview.min.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/wow.min.js') }}"></script>
    <script src="{{ url('/websites/music-and-entertainment/js/main.js') }}"></script>
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