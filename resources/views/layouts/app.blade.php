<!DOCTYPE html>
<html>
    <head>
        <title>FORM PERMOHONAN</title>
        <meta charset="utf-8">
            <link rel="shortcut icon" href="logo/logo2.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    </head>
    <body>
        <!--
        Test case
        -->
        <nav class="nav navbar-inverse">    
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?menu=home" class="fa fa-home"></a></li>
                    
                    <li><a href="index.php?menu=profil">Profil</a></li>
                    
                    <li><a href="index.php?menu=laptop">Laptop</a></li>
                    <li><a href="index.php?menu=handphone">Handphone</a></li>
                        <li><a href="index.php?menu=camera">Camera</a></li>
                    <li><a href="index.php?menu=more">More</a></li>
                    
                </ul>
            </div>      
        </div>
    </nav>
        <div class="container">
            @yield('content') <!--untuk menampung content-->
        </div>

        
    </body>
</html>