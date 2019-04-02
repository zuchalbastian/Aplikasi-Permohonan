<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>PDAM Surya Sembada | Permohonan Pengembangan Aplikasi</title>

       <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="../AdminLTE/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../AdminLTE/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="../AdminLTE/dist/css/skins/_all-skins.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="../AdminLTE/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="../AdminLTE/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="../AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="../AdminLTE/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../AdminLTE/plugins/daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="../AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <!-- jquery-ui -->
      <link rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.min.css">


    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <!-- <link href="/{{ URL::asset('css/default.css') }}" rel="stylesheet"> -->
    <!-- <link href="/{{ URL::asset('css/default.date.css') }}" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="height: auto;">
    
    <nav class="navbar navbar-default">
        <div class="container">

                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                --> 
            </div>
             <!-- <div class="navbar navbar-default"> -->
                <ul class="nav navbar-nav">
                    <li><a class="logo">Welcome, {{ Auth::user()->name }}</a></li>

                    <li><a href="/permohonan">Home</a></li>
                    @if(Auth::user()->role_id==2)
                    <li><a href="/permohonan">Permohonan</a></li>
                    <li><a href="#">Laporan Hasil Permohonan</a></li>
                    @elseif(Auth::user()->role_id==1)
                    <li><a href="/list">Permohonan Masuk</a></li>
                    @elseif(Auth::user()->role_id==3)
                    <li><a href="/staff">Daftar Pekerjaan Baru</a></li>
                    <li><a href="/staff/index2">Daftar Pekerjaan Terselesaikan</a></li>
                    @endif
                    <li><a href="/auth/logout">Log Out</a></li>
                </ul>
            <!-- </div>/.nav-collapse  -->
        </div>
    </nav>
    </header>
    </div>
    <div>
    	<div class="col-md-2 sidebar">
			<!-- 	<ul>
					<li><a href="/permohonan">Permohonan</a></li>
					<li><a href="/list">Permohonan Masuk</a></li>
					<li><a href="/staff">Daftar Pekerjaan Baru</a></li>
					 <li><a href="#">Tutorial JQuery dasar</a></li>				 
				</ul> -->
			</div>
<!--         @if (session('message'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif -->
        <div class="col-md-9 content">
        	 <!-- @yield('header') -->
        	@yield('content')
        </div>

        <div class="col-md-1">
        	
        </div>
       
    </div><!-- /.container -->

        <!-- jQuery 2.2.3 -->
        <script src="../AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../AdminLTE/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../AdminLTE/plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="../AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="../AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../AdminLTE/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="../AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="../AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../AdminLTE/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../AdminLTE/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../AdminLTE/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../AdminLTE/dist/js/demo.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <script src="/{{ URL::asset('js/jquery.1.7.0.js') }}"></script> -->
    <!-- <script src="/{{ URL::asset('js/legacy.js') }}"></script> -->
    <!-- <script src="/{{ URL::asset('js/picker.date.js') }}"></script> -->
    <!-- <script src="/{{ URL::asset('js/picker.js') }}"></script> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <!-- jquery -->
    <script src="../jquery-ui/external/jquery/jquery.js"></script>
    <!-- jquery-ui -->
    <script src="../jquery-ui/jquery-ui.min.js"></script>

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