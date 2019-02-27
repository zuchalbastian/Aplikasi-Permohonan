<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>PDAM Surya Sembada | Permohonan Pengembangan Aplikasi</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome, {{ Auth::user()->name }}</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    @if(Auth::user()->role_id==2)
                    <li><a href="/permohonan">Permohonan</a></li>
                    @elseif(Auth::user()->role_id==1)
                    <li><a href="/list">Permohonan Masuk</a></li>
                    <li><a href="/list/index2">Daftar Pekerjaan Baru</a></li>
                    <li><a href="/list/index3">Daftar Pekerjaan Terselesaikan</a></li>
                    @endif
                    <li><a href="/auth/logout">Log Out</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

</body>
</html>