<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        //header("Location:index.php");
        
    }
    else
    {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-61529790-uno', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
    
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"></a>
                </div>
            </div>
        </div>

        <div class="container-uac">
          <div class="titulo">
              <h5>UNIVERSIDAD AUTONOMA DEL CARIBE <br/> PROYECTO RED VPN </h5>
          </div>
          <div class="subcontainer">
             <div class="inicia-sesion col-md-4">
                 <div class="contenido">
				        <h1>Bienvenido <span class="userlog"><?php echo $_SESSION['user'];?></span>, descarga el instalador necesario.</h1>
				        <div class="content-descarga"><a href="./img/logo-uac.png" download="descarga">Cliente VPN para Windows 8/7/vista/xp</a></div>
				        <div class="content-descarga"><a href="./img/logo-uac.png" download="descarga">Cliente VPN para Linux</a></div>
				        <div class="content-btn-cerrar">
				        	<span class="btn btn-danger" id="btn-cerrar"><a href="./funcphp/cerrar-sesion.php">Cerrar sesi&oacute;n</a></span>
				        </div>
				</div>
             </div>
          </div>
        </div>


        <div class="footer">
            <p>&copy; Todos los derechos reservados, proyecto red VPN,  Kevin Casasbuenas &#38; Linda Ojeda.</p>
        </div>
        <!-- /container -->

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/additional-methods.min.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
            $('.content-descarcarga a').on('click', function() {
                var iden="'"+$(this).attr('id')+"'";
              ga('send', 'event', 'button', 'click', iden);
            });
        </script>
    </body>
</html>
