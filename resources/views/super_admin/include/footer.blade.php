
<!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a href="{{url('/')}}">{{config('enum.site_name')}}</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<script src="{{ url('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ url('/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ url('/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ url('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ url('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('/admin/dist/js/adminlte.js') }}"></script>
<script src="{{ url('/admin/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ url('/admin/dist/js/demo.js') }}"></script>
<script src="{{ url('/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ url('/admin/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ url('/admin/plugins/summernote/summernote-bs4.js') }}"></script>
<script src="{{ url('/admin/dist/js/sweetalert.min.js') }}"></script>

</body>
</html>
@if(Session::has('success'))
<script>
toastr.success('{{ Session::get('success') }}', '', {timeOut: 5000});
</script>
@endif

@if(Session::has('error'))
<script>
toastr.error('{{ Session::get('error')}}', '', {timeOut: 5000});
</script>
@endif
