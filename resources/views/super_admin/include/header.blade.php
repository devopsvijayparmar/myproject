<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>{{ucfirst(config('enum.site_title'))}}</title>
	<link rel="shortcut icon" href="{{$admin_site_setting->fav_icon}}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/toastr/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/jqvmap/jqvmap.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/toastr/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/summernote/summernote-bs4.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/dist/css/sweetalert.min.css') }}">
	<link rel="stylesheet" href="{{ url('/admin/dist/css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container-fluid">
      <a href="{{route('super-admin.dashboard')}}" class="navbar-brand">
        <img src="{{$admin_site_setting->fav_icon}}" alt="{{ucfirst(config('enum.site_title'))}}" class="brand-image img-circle "
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ucfirst(config('enum.site_title'))}}</span>
      </a>
     