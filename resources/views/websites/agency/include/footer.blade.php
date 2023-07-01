
@extends('websites.layouts.website_2.master_footer')

@section('script')
<script src="{{ asset('/websites/agency/js/custom.js') }}"></script>
@endsection

@section('footer_menu')
	<li class="scroll"><a href="{{url('ourteam')}}">Our Teams</a></li>
	<li class="scroll"><a href="{{url('blog')}}">Blog</a></li>
    <li class="scroll"><a href="{{url('about-us')}}">About Us</a></li>
    <li class="scroll"><a href="{{url('contact-us')}}">Contact Us</a></li>  
@endsection