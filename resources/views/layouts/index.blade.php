<!DOCTYPE html>
<html style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{!! asset('image/logo-pdam2.ico') !!}"/>

    <title>PDAM Surya Sembada | Permohonan Pengembangan Aplikasi</title>

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
<body class="hold-transition skin-blue sidebar-mini" style="height: auto;">
  <div class="wrapper" style="height: auto;">
    <header class="main-header">
      <!-- Logo -->
    <div class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>DAM</span>
      <!-- logo for regular state and mobile devices -->
      <div class="logo-lg">
          <center class="navbar-header">
              <img class="responsive-img" style="width: 190px; margin-top:0px;" src="{!! asset('image/logo-pdam3.png') !!}" />
          </center>
        <h3 class="fa fa-user"><i>  HELLO-{{ Auth::user()->name }}</i></h3>      
      </div>
      <li class="logo-lg"><b>PDAM</b>Kita</li>
    </div>

      <!-- Header Navbar -->
      <nav class="nav navbar">
        
        {{-- <a class="logo btn-primary pull-right" href="/auth/logout"><i class=" fa fa-power-off"></i> Log Out</a> --}}
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  {{-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
                  <span class="hidden-xs fa fa-user" style="width: 125px; margin-bottom:0px;"> Hello, {{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu" style="width:100px; background-color:#3c8dbc;">

                      {{-- <li>
                          <a href="#">
                            <i class="fa fa-cog"></i>
                            Settings
                          </a>
                        </li>
        
                        <li>
                          <a href="#">
                            <i class="fa fa-user"></i>
                            Profile
                          </a>
                        </li>
        
                        <li class="divider"></li> --}}
        
                        <li>
                          <a href="/auth/logout">
                            <i class="fa fa-power-off"></i>
                            Logout
                          </a>
                        </li>   
   
                </ul>
              </li>
          </ul>
        </div>
      </nav>
    </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar Menu -->
              <ul class="sidebar-menu">
                <li><a href="/permohonan"><i class="fa fa-link"></i>Home</a></li>
                @if(Auth::user()->role_id==2)
                <li><a href="/permohonan"><i class="fa fa-link"></i>Permohonan</a></li>
                <li><a href="/permohonan/result"><i class="fa fa-link"></i>Hasil Permohonan</a></li>
                @elseif(Auth::user()->role_id==1)
                <li><a href="/list"><i class="fa fa-link"></i>Permohonan Masuk</a></li>
                @elseif(Auth::user()->role_id==3)
                <li><a href="/staff"><i class="fa fa-link"></i>Daftar Pekerjaan Baru</a></li>
                <li><a href="/staff/index2" style="font-size:13px;"><i class="fa fa-link"></i>Daftar Pekerjaan Terselesaikan</a></li>
                <li><a href="/staff/revisi"><i class="fa fa-link"></i>Daftar Pekerjaan Revisi</a></li>
                @elseif(Auth::user()->role_id==4)
                <li><a href="/spv"><i class="fa fa-link"></i>Laporan Analisis Pekerjaan</a></li>
                @elseif(Auth::user()->role_id==5)
                <li><a href="/manager"><i class="fa fa-link"></i>Laporan Hasil Pekerjaan</a></li>
                @endif
                </li>
              </ul>
              <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
          </aside>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" style="min-height: 554px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                SELAMAT BEKERJA
              </h1>
            </section>
                  <!-- Your Page Content Here -->
                  <section class="content">
                    @yield('content')
                </section>
            <!-- /.content -->
          </div>
            <!-- Main Footer -->
          <footer class="main-footer">
            <!-- Default to the left -->
            <strong><font face="Century Gothic" size="3"><b> Copyright © 2019~TSI-PDAM Surya Sembada Surabaya~All right reserved.</b></font></strong>
          </footer>
  </div>
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

    $(".edit").on("click", function(){
        return confirm("Do you want to edit this item?");
    });

    $(".staff").on("click", function(){
        return confirm("Apakah Anda ingin mengirim data ke Supervisor?");
    });

    $(".spv").on("click", function(){
        return confirm("Apakah Anda ingin mengirim data ke Manager?");
    });

    $(".manager").on("click", function(){
        return confirm("Data permohonan sudah selesai dan akan diteruskan ke pemohon?");
    });
    </script>
</body>
</html>
