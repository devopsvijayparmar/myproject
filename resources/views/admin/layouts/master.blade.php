<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ucfirst(config('enum.site_title'))}} </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="shortcut icon" href="@if(isset($user_site_setting->fav_icon)) {{$user_site_setting->fav_icon}} @else {{$admin_site_setting->fav_icon}} @endif">
  <!-- Font Awesome -->
  @include('admin.layouts.head')
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		  @include('admin.layouts.topbar')
		  @include('admin.layouts.sidebar')
		  @yield('content')
		  @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.footer-script')    
    </body>
</html>