@extends('websites.layouts.website_1.master_header')

@section('css')
<link rel="stylesheet" href="{{ asset('/websites/cloth/css/custom.css') }}" />
@endsection

@section('menu')
	<li class="nav-item"><a class="nav-link" id="home" href="{{url('/')}}">Home</a></li>
	<li class="nav-item"><a class="nav-link" id="products" href="{{url('products/category')}}">Products</a></li>
	<li class="nav-item"><a class="nav-link" id="gallery" href="{{url('gallery')}}">Gallery</a></li>
	<li class="nav-item"><a class="nav-link" id="service" href="{{url('service')}}">Services</a></li>
	<li class="nav-item"><a class="nav-link" id="promotion" href="{{url('promotion')}}">Promotions</a></li>
	<li class="nav-item"><a class="nav-link" id="about_us" href="{{url('about-us')}}">About Us</a></li>
	<li class="nav-item"><a class="nav-link" id="contact-us" href="{{url('contact-us')}}">Contact Us</a></li>
@endsection



