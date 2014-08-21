<?php 
$page_title = 'Login';
include('includes/header.php'); 
?>
    
    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>Login to <span class="highlight">View your dashboard</span> </h1>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <form class="form form-register dark" id="registration" method="post" action="signup.php">
                        
                  
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email Address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="email" class="form-control required" name="email" id="email" placeholder="" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="password" id="password" placeholder="">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block"> Login </button>
                    </form>
                    
                </div>
            </div>
        </div>
        
        <h4>These companies <span>trust us</span></h4>        
    </div>
    
    <div id="clients">
        <div class="container">
            <ul class="list-inline logos">
                <li><img src="assets/img/logos/lynqx.jpg" alt="Lynqx Clothings" /></li>
                <li><img src="assets/img/logos/hoi.jpg" alt="House of Innova" /></li>
                <li><img src="assets/img/logos/ho3d.jpg" alt="HO3D" /></li>
                <li><img src="assets/img/logos/clux.jpg" alt="TY Clux Concepts" /></li>
                <li><img src="assets/img/logos/joit.jpg" alt="Joit Solutions" /></li>
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