<title>{{$page->title}}</title>
<link rel="stylesheet" href="{{ asset('/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
<link rel="shortcut icon" href="@if(isset($user_site_setting->fav_icon)) {{$user_site_setting->fav_icon}} @else {{$admin_site_setting->fav_icon}} @endif">
<div class="container">
{!!$page->description!!}
</div>
