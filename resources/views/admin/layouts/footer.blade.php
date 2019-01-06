 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2016-{{ Carbon\carbon::now()->year }} <a href="http://bitfumes.com">RaumReservierung</a>.</strong> All rights
    reserved.
    <script src="{{ asset('admincss/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('admincss/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('admincss/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admincss/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('admincss/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admincss/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admincss/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('admincss/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('admincss/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admincss/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('admincss/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admincss/plugins/fastclick/fastclick.js') }}"></script>
    <!-- admincssLTE App -->
    <script src="{{ asset('admincss/dist/js/app.min.js') }}"></script>
    <!-- admincssLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('admincss/dist/js/pages/dashboard.js') }}"></script> --}}
    <!-- admincssLTE for demo purposes -->
    <script src="{{ asset('admincss/dist/js/demo.js') }}"></script>
    @section('footerSection')
    @show
  </footer>