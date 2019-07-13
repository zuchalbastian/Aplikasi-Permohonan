<html>
  <head>
    <title>PDAM Surya Sembada | LOGIN </title>
    <head>
      <!-- Bootstrap 3.3.6 -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/bootstrap/css/bootstrap.min.css')}}">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/dist/css/AdminLTE.min.css')}}">
     <!-- AdminLTE Skins. Choose a skin from the css/skins
          folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/dist/css/skins/_all-skins.min.css')}}">
     <!-- iCheck -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/iCheck/flat/blue.css')}}">
     <!-- Morris chart -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/morris/morris.css')}}">
     <!-- jvectormap -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
     <!-- Date Picker -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/datepicker/datepicker3.css')}}">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
     <!-- bootstrap wysihtml5 - text editor -->
     <link rel="stylesheet" href="{{asset('../AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
     <!-- jquery-ui -->
     <link rel="stylesheet" type="text/css" href="{{asset('../jquery-ui/jquery-ui.min.css')}}">
   <!-- Bootstrap core CSS -->
   <link href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
      @yield('content')
    <!-- jQuery 2.2.3 -->
    <script src="{{asset('../AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{asset('../AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
    <script src="{{asset('../AdminLTE/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('../AdminLTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('../AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('../AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('../AdminLTE/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}"></script>
    <script src="{{asset('../AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('../AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('../AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('../AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('../AdminLTE/plugins/fastclick/fastclick.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../AdminLTE/dist/js/demo.js')}}"></script>
<script>
$(function() {
  $('#date').datepicker({dateFormat: 'dd/mm/yy'});
});;

$(".delete").on("click", function(){
    return confirm("Do you want to delete this item?");
});
</script>
</body>
</html>
