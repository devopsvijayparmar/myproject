@extends('websites.layouts.website_1.master_footer')

@section('script')
<script src="{{ asset('/websites/electric/js/custom.js') }}"></script>
@endsection

@section('footer_menu')
	<li><a id="blog" href="{{url('blog')}}">Blog</a></li>
	<li><a id="service" href="{{url('service')}}">Services</a></li>
	<li><a id="promotion" href="{{url('promotion')}}">Promotions</a></li>
	<li><a id="about_us" href="{{url('about-us')}}">About Us</a></li>
	<li><a id="contact-us" href="{{url('contact-us')}}">Contact Us</a></li>
@endsection