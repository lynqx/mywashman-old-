<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Subscribe</title>
    <meta name="description" content="PSD to HTML5+CSS3 conversion.">
    <meta name="keywords" content="PSD, HTML5, CSS3">
    <meta name="author" content="Erwin Kaddy">

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    
    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="register-page">
    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.html" class="logo"></a>
						<span class="sr-only">startup.ly</span>
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

                </div>
            </div>
        </nav>
    </header>
    
    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>Select Your <span class="highlight">Favourite</span> Package</h1>
            <p>Stop worrying about your laundry<span class="highlight"> after this process!</span></p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <form class="form form-register dark" id="registration" method="post" action="signup.php">
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 col-xs-12 control-label">Full name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="fullname" id="fullname" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-3 col-xs-12 control-label">Mobile</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="email" class="form-control required email" name="email" id="website" placeholder="" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">House address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="address" id="address" placeholder="" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Package</label>
                            <div class="col-sm-9 col-xs-12">
                                <select class="form-control required" name="address" id="package" placeholder="">
                                	<option value=""> (Select a package) </option>
                                	<option value="silver"> Silver (&#8358; 3,500) </option>
                                	<option value="gold"> Gold (&#8358; 5,000) </option>
                                	<option value="premium"> Premium (&#8358; 10,000) </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="password" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-3 col-xs-12 control-label"> Confirm Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="confirmPassword" id="confirmPassword" placeholder="">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block"> Subscribe Now</button>
                    </form>
                    
                    <p class="agree-text">By clicking you agree to our Terms of Service, Privacy Policy & Refund Policy.</p>
                </div>
            </div>
        </div>
        
        <h4>These companies <span>trust us</span></h4>        
    </div>
    
    <div id="clients">
        <div class="container">
            <ul class="list-inline logos">
                <li><img src="assets/img/logos/logo-1.png" alt="mashable" /></li>
                <li><img src="assets/img/logos/logo-2.png" alt="tnw" /></li>
                <li><img src="assets/img/logos/logo-3.png" alt="virgin" /></li>
                <li><img src="assets/img/logos/logo-4.png" alt="microsoft" /></li>
                <li><img src="assets/img/logos/logo-5.png" alt="forbes" /></li>
            </ul>
        </div>
    </div>
    
    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
    
    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->  
    <!--[if (gte IE 9) | (!IE)]><!-->  
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->  
    
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>