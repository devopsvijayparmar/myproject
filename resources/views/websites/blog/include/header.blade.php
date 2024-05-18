@extends('websites.layouts.website_2.master_header')

@section('css')
<link href="{{ asset('/websites/blog/css/custom.css') }}" rel="stylesheet">
@endsection

@section('menu')
	<li class="nav-item"><a class="nav-link" id="hometab" href="{{url('/')}}">Home</a></li>
	<li class="nav-item"><a class="nav-link" id="blogtab" href="{{url('blog')}}">Blog</a></li>
	<li class="nav-item"><a class="nav-link" id="promotiontab" href="{{url('promotion')}}">Promotions</a></li>
	<li class="nav-item"><a class="nav-link" id="about_us_tab" href="{{url('about-us')}}">About Us</a></li>
	<li class="nav-item"><a class="nav-link" id="contact-us-tab" href="{{url('contact-us')}}">Contact Us</a></li>
@endsection



	
	