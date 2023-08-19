<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@if(isset($title)) {{$title}} | @endif {{ucfirst(config('enum.site_title'))}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="{{$admin_site_setting->fav_icon}}" rel="icon">
  <link href="{{ asset('/front/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">
</head>

<body>

 
