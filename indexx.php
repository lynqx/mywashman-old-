<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>My Washman</title>
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
    
    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="landing-page">

    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>
        
    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.html" class="logo"></a>
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
                        <li class="active"><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
						<li><a href="#product">Prices</a></li>
                        <li><a href="#feedback">Feedback</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#guarantee">Contacts</a></li>
                    </ul>
                    <ul class="navigation-bar navigation-bar-right">
                        <li class="featured"><a href="register.html">Subscribe</a></li>
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
    
	<div id="hero" class="static-header register-version light clearfix">

        <div class="text-heading">
            <h1 class="animated hiding highlight2" data-animation="bounceInDown" data-delay="0">Laundry day?! &mdash; <span class="highlight">We've got you covered</span></h1>
            <p class="animated hiding" data-animation="fadeInDown" data-delay="500">first online subscription laundry service in Ibadan!</p>
        </div>
		
		<div class="container">
			<div class="signup-wrapper animated hiding" data-animation="bounceInUp" data-delay="0">
				<div class="row">
						<form class="form-inline form-register form-register-small" method="post" action="signup.php">
						
							<div class="form-group">
								<input size="30" type="text" class="form-control required" name="fullname" id="fullname" placeholder="Your name">
							</div>
							
							<div class="form-group">
								<input size="25" type="tel" class="form-control required" name="mobile" id="mobile" placeholder="Mobile Number">
							</div>
							
							<div class="form-group">
								<select class="form-control required" name="package">
									<option> (Choose your package)</option>
									<option> Silver</option>
									<option> Gold </option>
									<option> Premium </option>
								</select>
							</div>

							<div class="form-group submit-wrap">
								<input type="hidden" name="small-form"/>
								<button type="submit" class="btn btn-primary btn-md">Subscribe Now</button>
							</div>
						</form>
				</div>
			</div>
		</div>
		</div>
		<div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>PRODUCT <span class="highlight">PACKAGES</span></h2>
                <div class="sub-heading">
                    You will be amazed at our offer
                    <br />Flexible & affordable packages 
                </div>
            </div>
            <div class="section-content row">
            
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Silver</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">&#8358;</span>3,500</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY" data-delay="500">
                        <div class="package-title">Gold</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">&#8358;</span>5,000</div>
                            <div class="period">subscription</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Premium</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">&#8358;</span>10,000</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
		
   
    <a id="showHere"></a>
    
	<section id="about" class="section dark">
        <div class="container">
		
            <ul class="nav nav-tabs alt">
                <li class="active"><a href="#first-tab-alt" data-toggle="tab">FIRST TAB</a></li>
                <li><a href="#second-tab-alt" data-toggle="tab">SECOND TAB</a></li>
                <li><a href="#third-tab-alt" data-toggle="tab">THIRD TAB</a></li>
            </ul>
                    
            <div class="tab-content alt">
				<div class="tab-pane active" id="first-tab-alt">
					<div class="section-content row">        
								<div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
									<img src="assets/img/features/people.jpg" class="img-responsive" alt="process 3" />
								</div>
								<div class="col-sm-6 animated hiding" data-animation="fadeInRight">
									<br/>
									<article class="center">
										<h3>FOR EVERY <span class="highlight">STARTUP</span></h3>
										<div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
										<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
										<br/>
										<a href="#" class="btn btn-secondary animated hiding" data-animation="bounceIn" data-delay="700">Get template</a>
										<a href="#" class="btn btn-secondary animated hiding" data-animation="bounceIn" data-delay="700">See elements</a>
									</article>
								</div>
					</div>
                </div>
					
                <div class="tab-pane" id="second-tab-alt">
                           <div class="section-content row">                
								<div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
									<img src="assets/img/features/phone.jpg" class="img-responsive pull-right" alt="process 2" />
								</div>
								<div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
									<br/><br/>
									<article class="center">
										<h3>NEW AGE <span class="highlight">TECHNOLOGY</span></h3>
										<div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
										<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
									</article>
								</div>
					</div>
                </div>

                <div class="tab-pane" id="third-tab-alt">
					<div class="section-header animated hiding center" data-animation="fadeInDown">
						<h2>3 EASY STEPS</h2>
						<div class="sub-heading">
							Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
							<br />dfs sit atmet sit dolor greand fdanrh sdfs
						</div>
					</div>
					<div class="section-content row">
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="0">
								<i class="howitworks icon icon-shopping-04 icon-active"></i>
								<span class="h7">PLACE ORDER</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
							<!--<span class="icon icon-arrows-04"></span>-->
						</div>
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="400">
								<i class="howitworks icon icon-seo-icons-03 icon-active"></i>
								<span class="h7">OUR SYSTEM RUNS</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
							<!--<span class="icon icon-arrows-04"></span>-->
						</div>
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="800">
								<i class="howitworks icon icon-seo-icons-05 icon-active"></i>
								<span class="h7">RECEIVE REPORT</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
						</div>
					</div>
					<br/>
					<br/>
				</div>	
			</div>
        </div>
    </section>
    
    <hr class="no-margin" />
    
    <section id="process" class="section dark">
        <div class="container">
            <div class="section-content row">                
                <div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
                    <img src="assets/img/features/content_image1.png" class="img-responsive" alt="process 2" />
                </div>
                <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
					<br/><br/>
                    <article>
                        <h3>NEW AGE <span class="highlight">TECHNOLOGY</span></h3>
                        <div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                        <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
                    </article>
                </div>
                
                <hr class="clearfix" />
                
                <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
                    <img src="assets/img/features/helmet.jpg" class="img-responsive" alt="process 3" />
                </div>
                <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
					<br/><br/>
                    <article>
                        <h3>HANG <span class="highlight">ON TO</span> YER HELMET</h3>
                        <div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                        <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
                    </article>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="features" class="section inverted">
        <div class="container">
            <div class="section-content">
                <div id="featuredTab">
                    <ul class="list-unstyled animated hiding" data-animation="fadeInRight">
                      <li class="active">
                          <a href="#home" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-multimedia-20"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#profile" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-seo-icons-27"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#messages" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!-- <div class="tab-icon"><span class="icon icon-seo-icons-28"></span></div>-->
                          </a>
                      </li>
                    </ul>
                    
                    <div class="tab-content animated hiding" data-animation="fadeInLeft">
                      <div class="tab-pane in active" id="home"><img src="assets/img/features/rich_features_1.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="profile"><img src="assets/img/features/rich_features_2.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="messages"><img src="assets/img/features/rich_features_3.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	
	<section id="features-list" class="section dark">
        <div class="container animated hiding" data-animation="fadeInDown">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-office-44 icon-active"></i>
                    <span class="h7">FEATURE 1</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>                       
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-shopping-18 icon-active"></i>
                    <span class="h7">FEATURE 2</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-seo-icons-27 icon-active"></i>
                    <span class="h7">FEATURE 3</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-office-24 icon-active"></i>
                    <span class="h7">FEATURE 4</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-graphic-design-13 icon-active"></i>
                    <span class="h7">FEATURE 5</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-arrows-37 icon-active"></i>
                    <span class="h7">FEATURE 6</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-badges-votes-14 icon-active"></i>
                    <span class="h7">FEATURE 7</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>             
			<div class="col-md-3 col-sm-6 col-xs-12">
                <article class="center">	
					<i class="icon icon-badges-votes-16 icon-active"></i>
                    <span class="h7">FEATURE 8</span>
                    <p class="thin">Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
                </article>
            </div>           
        </div>
    </section>	
	
	<section id="newsletter" class="long-block light">
        <div class="container center">
            <div class="col-sm-12 col-lg-5">
                <article>
                    <h2><strong>GET</strong> LIVE UPDATES</h2>
                     <p class="thin">No spam promise - only latest news and prices!</p>
                </article>
            </div>
            <div class="col-sm-12 col-lg-7">
			 <form id="subscribe" class="form" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group form-inline">
              <input size="15" type="text" class="form-control required" id="NewsletterName" name="NewsletterName" placeholder="Your name" /> 
              <input size="25" type="email" class="form-control required" id="NewsletterEmail" name="NewsletterEmail" placeholder="your@email.com" /> 
			  <input type="submit" class="btn btn-default" value="SUBSCRIBE" />
			  <span id="response">
				<? require_once('assets/mailchimp/inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
			  </span>
            </div>
          </form>
            </div>
			
			
			
        </div>
    </section>
	
    <section id="product" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>PRODUCT <span class="highlight">PACKAGES</span></h2>
                <div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br />dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
            </div>
            <div class="section-content row">
            
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Individual</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>25</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY" data-delay="500">
                        <div class="package-title">Studio</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>45</div>
                            <div class="period">subscription</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="package-column animated hiding" data-animation="flipInY">
                        <div class="package-title">Enterprise</div>
                        <div class="package-price">
                            <div class="price"><span class="currency">$</span>95</div>
                            <div class="period">per month</div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li><strong>Free</strong> Domain</li>
                                <li><strong>Unlimited</strong> Websites</li>
                                <li><strong>Unlimited</strong> Bandwidth</li>
                                <li><strong>Unlimited</strong> Disk Space</li>
                            </ul>
                            <a href="#" class="btn btn-secondary btn-block">Get started</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
	
	<section id="awards" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2><span class="highlight">OUR</span> AWARDS</h2>
                <div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br />dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
            </div>
            <div class="section-content">                
                <ul class="list-inline logos">
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="0" src="assets/img/logos/award-5.jpg" alt="mashable" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="400" src="assets/img/logos/award-3.jpg" alt="virgin" /></a></li> 
					<li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="600" src="assets/img/logos/award-4.jpg" alt="forbes" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="800" src="assets/img/logos/award-1.jpg" alt="microsoft" /></a></li> 					
                </ul>
            </div>
        </div>
    </section>
    
    <section id="feedback" class="section light">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>WHAT <span class="highlight">CLIENTS</span> SAY</h2>
            </div>
            <div class="section-content">
			
				<!-- BEGIN SLIDER CONTENT -->
				<div class="col-sm-10 col-sm-offset-1">
					<div class="flexslider testimonials-slider center animated hiding" data-animation="fadeInTop">	
						<ul class="slides">
							<li>
								<div class="testimonial resp-center clearfix">
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.
									</blockquote>
								</div>
							</li>
							<li>
								<div class="testimonial resp-center clearfix">
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.
									</blockquote>
								</div>
							</li>
							<li>
								<div class="testimonial resp-center clearfix">
									<blockquote>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.
									</blockquote>
								</div>
							</li>	
						</ul>
					</div>
				</div>
				<!-- END SLIDER -->
            </div>
        </div>
    </section>

	<section id="feedback-controls" class="section light">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
			<!-- BEGIN CONTROLS -->
						<div class="flex-manual">
							<div class="col-xs-12 col-sm-4 wrap">
								<div class="switch flex-active">
									<img alt="client" src="assets/img/people/profile-1.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
									<p>
										<span class="highlight">AMY WARNER</span><br/>Investor at <span class="highlight">Pear Inc.</span>
									</p>
								</div>
							</div>
											
							<div class="col-xs-12 col-sm-4 wrap">
								<div class="switch pull-left">
									<img alt="client" src="assets/img/people/profile-2.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
									<p>
										<span class="highlight">JOHN DOESOME</span><br/>Accountant at <span class="highlight">Vell Inc.</span>
									</p>
								</div>
							</div>
											
							<div class="col-xs-12 col-sm-4 wrap">
								<div class="switch">
									<img alt="client" src="assets/img/people/profile-1.jpg" class="sm-pic img-circle pull-left" width="68" height="69">
									<p>
										<span class="highlight">PETER MOOSOME</span><br/>VP Marketing at <span class="highlight">Footbook</span>
									</p>
								</div>
							</div>
						</div>
			<!-- END CONTROLS -->
			</div>
		</div>
	</section>
	
	<section id="team" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>BEHIND <span class="highlight">THE</span> SCENES</h2>
				<div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br>dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
				<br/>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil<br/> ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae<br/> qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.<br/> Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,<br/> nihilamane umquam magnum ac cognitione.</p>
            </div>
			<div class="section-content row">
                        <div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
								<div class="socials">
									<a href="#"><span class="icon icon-socialmedia-08"></span></a><a href="#"><span class="icon icon-socialmedia-07"></span></a><a href="#"><span class="icon icon-socialmedia-05"></span></a><a href="#"><span class="icon icon-socialmedia-09"></span></a>
								</div>
                                <img src="assets/img/people/team-1.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">DANIEL DASH</span>
							<p class="thin">Designer</p>
                        </div>  
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="250">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#"><span class="icon icon-socialmedia-08"></span></a><a href="#"><span class="icon icon-socialmedia-07"></span></a><a href="#"><span class="icon icon-socialmedia-05"></span></a><a href="#"><span class="icon icon-socialmedia-09"></span></a>
								</div>
                                <img src="assets/img/people/team-4.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">PETRA APPLES</span>
							<p class="thin">Designer</p>
                        </div>     
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="500">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#"><span class="icon icon-socialmedia-08"></span></a><a href="#"><span class="icon icon-socialmedia-07"></span></a><a href="#"><span class="icon icon-socialmedia-05"></span></a><a href="#"><span class="icon icon-socialmedia-09"></span></a>
								</div>
                                <img src="assets/img/people/team-3.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">MIKE LYNTON</span>
							<p class="thin">Designer</p>
                        </div>                        
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="750">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#"><span class="icon icon-socialmedia-08"></span></a><a href="#"><span class="icon icon-socialmedia-07"></span></a><a href="#"><span class="icon icon-socialmedia-05"></span></a><a href="#"><span class="icon icon-socialmedia-09"></span></a>
								</div>
                                <img src="assets/img/people/team-2.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">AMY PIERS</span>
							<p class="thin">Designer</p>
                        </div>

            </div>
        </div>
        
        
        <div id="clients">
        <div class="container">
            <ul class="list-inline logos">
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="0" src="assets/img/logos/logo-1.png" alt="mashable" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="200" src="assets/img/logos/logo-2.png" alt="tnw" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="400" src="assets/img/logos/logo-3.png" alt="virgin" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="600" src="assets/img/logos/logo-4.png" alt="microsoft" /></li>
                <li><img class="animated hiding" data-animation="fadeInUp" data-delay="800" src="assets/img/logos/logo-5.png" alt="forbes" /></li>
            </ul>
        </div>
    </div>
    </section>
    
    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
				<i class="icon icon-seo-icons-24 pull-left"></i>
                <article class="pull-left">
                    <h2><strong>LAUNCH</strong> YOUR STARTUP NOW!</h2>
                    <p class="thin">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </article>
            </div>
			
            <div class="col-md-12 col-lg-3">
                <a href="hthttp://themeforest.net/item/startuply-responsive-multipurpose-landing-page/7953388class="btn btn-default">Get this template</a>
            </div>
        </div>
    </section>
    
    <footer id="footer" class="footer light">
        <div class="container">
            <div class="footer-content row">
                <div class="col-sm-4">
                    <div class="logo-wrapper">
                        <img src="assets/img/logo.png" alt="logo" />
                    </div>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
                    <p><strong>John Doeson, Founder</strong>.</p>
                </div>
                <div class="col-sm-5 social-wrap">
                    <div class="footer-title">Social Networks</div>
                    <ul class="list-inline socials">
                        <li><a href="#"><span class="icon icon-socialmedia-08"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-09"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-16"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-04"></span></a></li>
                    </ul>
                    <ul class="list-inline socials">
                        <li><a href="#"><span class="icon icon-socialmedia-07"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-16"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-09"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-08"></span></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon icon-chat-messages-14"></span> 
                            <a href="mailto:info@startup.ly">info@startup.ly</a>
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-34"></span> 
                            2901 Marmora road, Glassgow, Seattle, WA 98122-1090
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-17"></span>
                            1 - 234-456-7980
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">startup.ly 2014. All rights reserved.</div>
    </footer>
    
    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
    
    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->  
    <!--[if (gte IE 9) | (!IE)]><!-->  
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->  
    
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
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    
    
    <script src="assets/js/countdown.js" type="text/javascript"></script>

</body>
</html>