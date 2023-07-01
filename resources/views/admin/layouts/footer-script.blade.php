<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<!-- jQuery Knob Chart -->
<script src="{{ asset('/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('/admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/admin/dist/js/demo.js') }}"></script>
<script src="{{ asset('/admin/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('/admin/dist/js/knockout-min.js') }}"></script>
<script src="{{ asset('/admin/dist/js/knockout-file-bindings.js') }}"></script>
<script src="{{ asset('/admin/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/admin/dist/js/common.js') }}"></script>

@yield('script')

</body>
</html>
@if ($message = Session::get('success'))
<script>
	 toastr.success("{{ Session::get('success') }}");
</script>
@endif
  
@if ($message = Session::get('error'))
<script>
	 toastr.error("{{ Session::get('error') }}");
</script>

@endif
   
@if ($message = Session::get('warning'))
<script>
	 toastr.warning("{{ Session::get('warning') }}");
</script>
@endif
   
@if ($message = Session::get('info'))
<script>
	 toastr.info("{{ Session::get('info') }}");
</script>
@endif
  
@if ($errors->any())
<script>
	toastr.info("Please check the form below for errors");
</script>
@endif
@yield('script-bottom')