<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Inscrption</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/slicknav.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/progressbar_barfiller.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/gijgo.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/animate.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/animated-headline.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/fontawesome-all.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/themify-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/slick.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/nice-select.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/style.css');?> ">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/login.css');?> ">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" action="<?php echo site_url('inscriptionController/inscription')?>" method="GET">
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="<?php echo base_url('assets/plat/img/hero/frutis.jpg') ?>" alt=""></a>
            </div>
            <h2>Signing Up</h2>

            <div class="form-input">
                <label for="name">Name</label>
                <input  type="text" name="name" placeholder="Name">
            </div>
            <div class="form-input">
                <label for="name">Email Address</label>
                <input type="email" name="email" placeholder="Email Address">
            </div>
            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-input">
                <div class="genre">
                    <label for="name">Genre</label>
                    <select name="genre">
                        <option value="1">Homme</option>
                        <option valuer="2"s>Femme</option>
                    </select>
                </div>
            </div>
            <div class="form-input">
                <label for="name">Date de naissance</label>
                <input type="date" name="dtn" placeholder="Date de naissance">
            </div>
          
           
            <div class="form-input pt-30">
                

                <input type="submit" name="submit" value="Sign up">
            </div>
            <!-- Forget Password -->
            <a href="<?php echo site_url('loginController/login')?>" class="registration">Retour</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


<script src="<?php echo base_url('assets/plat/js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url('assets/plat/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/bootstrap.min.js'); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url('assets/plat/js/jquery.slicknav.min.js'); ?>"></script>

    <!-- Video bg -->
    <script src="<?php echo base_url('assets/plat/js/jquery.vide.js'); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo base_url('assets/plat/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/slick.min.js'); ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo base_url('assets/plat/js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/animated.headline.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.magnific-popup.js'); ?>"></script>

    <!-- Date Picker -->
    <script src="<?php echo base_url('assets/plat/js/gijgo.min.js'); ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?php echo base_url('assets/plat/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.sticky.js'); ?>"></script>
    <!-- Progress -->
    <script src="<?php echo base_url('assets/plat/js/jquery.barfiller.js'); ?>"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo base_url('assets/plat/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.countdown.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/hover-direction-snake.min.js'); ?>"></script>

    <!-- contact js -->
    <script src="<?php echo base_url('assets/plat/js/contact.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.form.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/mail-script.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/jquery.ajaxchimp.min.js'); ?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?php echo base_url('assets/plat/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plat/js/main.js'); ?>"></script>
    
    </body>
</html>