<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
<title>
		<?php	
							
// Check for a $page_title value:
 $pagetitle = '&raquo; My washman';
if (!isset($page_title)) {
 echo $pagetitle;
 
} else {
	echo $page_title .' ' . $pagetitle;
}

	 ?>
</title>

    <meta name="description" content="Startups template">
    <meta name="keywords" content="Startups template">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />


    <!--[if (gte IE 9) | (!IE)]><!-->  
        <script type="text/javascript" src="lib/jquery-2.1.1.min.js?ver=1"></script>
        <script src="lib/drivetoni.js" type="text/javascript"></script>
    <!--<![endif]-->  

    
    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
    <script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
    <!-- script type="text/javascript" src="assets/js/scripts.js"></script -->
    
    
    <script src="assets/js/countdown.js" type="text/javascript"></script>

</head>

<body id="landing-page">

    <!-- Preloader -->
    <!-- div id="mask">
        <div id="loader"></div>
    </div-->
        
        <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
                        <a href="index.php" class="logo"></a>
                        <span class="sr-only">my.washman</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

        
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-left">
                        <li><a href="index.php#!home">Home</a></li>
                        <li><a href="index.php#!about">About</a></li>
                        <li><a href="index.php#!product">Pricing</a></li>
                        <li><a href="index.php#!features">Features</a></li>
                        <li><a href="index.php#!guarantee">Contacts</a></li>
                    </ul>
                    <ul class="navigation-bar navigation-bar-right">
                        <li class="featured"><a href="login.php">Login</a></li>
                        <li class="featured"><a href="subscribe.php">Subscribe</a></li>
                    </ul> 
                </div>
            </div>
        </nav>
    </header>