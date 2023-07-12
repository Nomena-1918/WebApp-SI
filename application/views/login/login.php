<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
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
    <link rel="stylesheet" href="<?php echo base_url('assets/plat/css/_modification_style.css');?> ">
	<link rel="stylesheet" href="<?php echo base_url('assets/plat/css/login.css'); ?>">

</head>
<body>
    <!-- ? Preloader Start -->
 
    <!-- Preloader Start-->


<main class="login-body"  id="login-body">
    <!-- Login Admin -->
    <form class="form-default"  id="form-default" action="<?php echo site_url('loginController/isAdmin');?> " method="POST">
        
        <div class="login-form" id="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="<?php echo base_url('assets/plat/img/hero/frutis.jpg') ?>" alt=""></a>
            </div>
            <h2>Login Here</h2>
            <div class="form-input">
                <label for="name">Email</label>
                <input  type="email" name="email" placeholder="Email">
            </div>
            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="check">
                <input type="checkBox" name="checkAdmin" placeholder="Confirm Password">
                <label for="name" class="isAdmin">Is admin </label>
            </div>
            <div class="form-input">
                <label for="name">
                <?php  if (isset($message))  { ?>
                       <span style="color:red"> <?php  echo $message; ?></span> 
                   <?php }?>
                </label>
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="log in">
            </div>

            
            <!-- Forget Password -->
            <!-- <a href="#" class="forget">Forget Password</a> -->
            <!-- Forget Password -->
            <a href="<?php echo site_url('InscriptionController/register')?>" class="registration">Sign up</a>
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
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    </body>
</html>