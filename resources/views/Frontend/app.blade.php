<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title') - DJ DARLIN'</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    @yield('css')

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.bmp">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i>  +32 (0)496 53 76 85</p></div>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/pages/DJ-DARLIN/106693086977"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="height: 60px;"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{!! url("/") !!}">Accueil</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @include('Frontend.Menus.menu_propos')
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tarifs <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @include('Frontend.Menus.menu_tarifs')
                        </ul>
                    </li>
                    @include('Frontend.Menus.menu_contact')

                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->
<body>
@yield('content')
</body>
<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="widget">
                    <h3>A propos de nous</h3>
                    <ul>
                        @include('Frontend.Menus.menu_propos')
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-4 col-sm-4">
                <div class="widget">
                    <h3>Tarifs</h3>
                    <ul>
                        @include('Frontend.Menus.menu_tarifs')
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-4 col-sm-4">
                <div class="widget">
                    <h3>Contact</h3>
                    <ul>
                        @include('Frontend.Menus.menu_contact')
                    </ul>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <a href="{{ url("/vie-privee") }}" title="Mentions légales">Vie privée</a>
                </p>
            </div>
            <div class="col-sm-6">
                <p class="pull-right">
                    Made with ♥ by Jérôme Fink and Pierre Clotuche
                </p>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-68697994-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>