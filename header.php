<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>React Presents</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:900,400,700,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/stylesheets/avantgarde.css"/>
    <link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/javascripts/slick/slick.css"/>
    <!-- Core Skewslider styles -->
    <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/javascripts/skewslider/css/skw-core.css">
    <!-- Default Skewslider theme -->
    <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/javascripts/skewslider/css/skw-default.css">
    <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/javascripts/shadowbox/shadowbox.css">
    <link href="<? bloginfo('template_url'); ?>/stylesheets/styles.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <? wp_head(); ?>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-37159607-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=485974688148027&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<nav class="top-nav">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="<? bloginfo('template_url'); ?>/img/logo_black.png" width="192" height="26" alt="React Presents" /></a>
        </div>
        <ul class="list-inline social-icons float_right">
            <li><a href="https://www.facebook.com/reactpresents"><span class="flaticon-facebook31"></span></a></li>
            <li><a href="https://twitter.com/reactpresents"><span class="flaticon-social19"></span></a></li>
            <li><a href="http://www.instagram.com/reactpresents"><span class="flaticon-instagram12"></span></a></li>
            <li><a href="http://www.youtube.com/reactpresents"><span class="flaticon-youtube3"></span></a></li>
        </ul>
    </div>
</nav>
<nav id="nav-wrapper">
<nav id="nav" class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="70">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/events">Upcoming Events</a></li>
                <li class="dropdown">
                    <a class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">Festivals <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/festivals/spring-awakening-music-festival">Spring Awakening Music Festival</a></li>
                        <li><a href="/festivals/north-coast-music-festival">North Coast Music Festival</a></li>
                        <li><a href="/festivals/summer-set-music-festival">Summer Set Music Festival</a></li>
                        <li><a href="/festivals/freaky-deaky">Freaky Deaky</a></li>
                    </ul>
                </li>
                <li><a href="/contests">Contests</a></li>
                <li><a href="/news">News</a></li>
                <li class="dropdown">
                    <a class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">Media <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/gallery">Photo Galleries</a></li>
                        <li><a href="/videos">Videos</a></li>
                    </ul>
                </li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</nav>