@extends('websites.layouts.website_2.master_header')

@section('css')
<link href="{{ asset('/websites/studio/css/custom.css') }}" rel="stylesheet">
@endsection

@section('menu')
	<li class="nav-item"><a class="nav-link" id="hometab" href="{{url('/')}}">Home</a></li>
	<li class="nav-item"><a class="nav-link" id="photoshootstab" href="{{url('photo-shoots/category')}}">Photo Shoots</a></li>
	<li class="nav-item"><a class="nav-link" id="servicetab" href="{{url('service')}}">Services</a></li>
	<li class="nav-item"><a class="nav-link" id="gallerytab" href="{{url('gallery')}}">Gallery</a></li>
	<li class="nav-item"><a class="nav-link" id="promotiontab" href="{{url('promotion')}}">Promotions</a></li>
	<li class="nav-item"><a class="nav-link" id="about_us_tab" href="{{url('about-us')}}">About Us</a></li>
@endsection



	
	