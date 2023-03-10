<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
        <meta name="author" content="Djava UI">
        <title>Bienvenido al Sistema de Control Vehícular </title>
		<link href="http://www.zonacentronoticias.com/wp-content/uploads/2011/02/cobaem.jpg" rel="shortcut icon">
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="./assets/img/icon.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="./assets/img/icon.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="./assets/img/icon.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="./assets/img/icon.png" rel="apple-touch-icon-precomposed">
        <link href="./assets/img/icon.png" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="./assets/blankon/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="./assets/blankon/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="./assets/blankon/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="./assets/blankon/admin/css/reset.css" rel="stylesheet">
        <link href="./assets/blankon/admin/css/layout.css" rel="stylesheet">
        <link href="./assets/blankon/admin/css/components.css" rel="stylesheet">
        <link href="./assets/blankon/admin/css/plugins.css" rel="stylesheet">
        <link href="./assets/blankon/admin/css/themes/red.theme.css" rel="stylesheet" id="theme">
        <link href="./assets/blankon/admin/css/pages/sign-type-2.css" rel="stylesheet">
        <link href="./assets/blankon/admin/css/custom.css" rel="stylesheet">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="assets/assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

<!--

    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
	|=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
	|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
	|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
	|  04. @FONT STYLES                 |  Font from google fonts                                                             |
	|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
	|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
	|  07. @THEME STYLES                |  The main theme css file                                                            |
	|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
	|=========================================================================================================================|
	|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
	|  10. @WRAPPER                     |  Wrapping page section                                                              |
	|  11. @SIGN WRAPPER                |  Wrapping sign design                                                               |
	|=========================================================================================================================|
	|  12. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|  13. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-sound page-backstretch">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper">

            <!-- Brand -->
            
            <!--/ Brand -->

            <!-- Login form -->
            <form class="sign-in form-horizontal shadow no-overflow" action="login/validar/<?php echo get_session('modulo'); ?>" method="post">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                            <span><?php echo NOMBRE_SISTEMA; ?> </span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-header -->
                <div class="sign-body">
			
				<?php muestra_mensaje(); ?>
				
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="email" class="form-control input-sm" placeholder="Correo Electronico" name="UCorreo_electronico" value="">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div><!-- /.form-group -->
					
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            
							 <input type="password" class="form-control input-sm" placeholder="Contraseña" name="UContrasena" value="">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div><!-- /.form-group -->
					
                </div><!-- /.sign-body -->
                <div class="sign-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="ckbox ckbox-theme">
                                    <input id="rememberme" type="checkbox">
                                    <label for="rememberme" class="rounded">Recordar</a>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                               <a href="<?php echo base_url('usuarios/recuperar_contrasena'); ?>">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Ingresar</button>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-footer -->
            </form><!-- /.form-horizontal -->
            <!--/ Login form -->

            <!-- Content text -->
            <p class="text-muted text-center sign-link"> <a href="http://djavaui.com" target="_blank"></a></p>
            <!--/ Content text -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="./assets/blankon/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/retina.js/dist/retina.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="./assets/blankon/global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="./assets/blankon/global/plugins/bower_components/jquery-backstretch/jquery.backstretch.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS    
		
		modificar imagenes de index-->
		
        <script src="./assets/blankon/admin/js/pages/blankon.sign.js"></script>
        <script src="./assets/blankon/admin/js/pages/investor/blankon.investor.sign.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        <!-- START GOOGLE ANALYTICS -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55892530-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!--/ END GOOGLE ANALYTICS -->

    </body>
    <!-- END BODY -->

</html>