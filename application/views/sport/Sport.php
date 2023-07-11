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
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/slicknav.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sport/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sport/css/progressbar_barfiller.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sport/css/gijgo.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sport/css/animate.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sport/css/animated-headline.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/fontawesome-all.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/themify-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/slick.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/nice-select.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sport/css/style.css');?> ">
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
    <!-- Login Admin --><?php foreach ($sport->result_array() as $row) { ?>
    <!-- Login Admin --><?php if ($sport != null) {?>
        <form class="form-default" action="<?php echo site_url('sport/update_sport/'.$row['id']); ?>" method="GET">
                <?php } else {?>
    <form class="form-default" action="<?php echo site_url('sport/create_sport')?>" method="GET">
            <?php } ?>
        
        <div class="login-form">
            <h2>Activite Sportive</h2>
            <div class="form-input">
                <label for="name">Sport </label>
                <?php if ($sport != null) {?>
                    <input  type="text" name="sport" placeholder="<?php echo $row['nom'];?>">
                <?php } else {?>
                <input  type="text" name="sport" placeholder="Activity Name">
            <?php } ?>
            </div>
             <div class="form-input pt-30">
                <input type="submit" name="submit" value="Create">
            </div> 
        </div>
    </form>
    <?php } ?>
</main>


<script src="<?php echo base_url('assets/sport/js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url('assets/sport/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/bootstrap.min.js'); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url('assets/sport/js/jquery.slicknav.min.js'); ?>"></script>

    <!-- Video bg -->
    <script src="<?php echo base_url('assets/sport/js/jquery.vide.js'); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo base_url('assets/sport/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/slick.min.js'); ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo base_url('assets/sport/js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/animated.headline.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.magnific-popup.js'); ?>"></script>

    <!-- Date Picker -->
    <script src="<?php echo base_url('assets/sport/js/gijgo.min.js'); ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?php echo base_url('assets/sport/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.sticky.js'); ?>"></script>
    <!-- Progress -->
    <script src="<?php echo base_url('assets/sport/js/jquery.barfiller.js'); ?>"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo base_url('assets/sport/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.countdown.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/hover-direction-snake.min.js'); ?>"></script>

    <!-- contact js -->
    <script src="<?php echo base_url('assets/sport/js/contact.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.form.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/mail-script.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/jquery.ajaxchimp.min.js'); ?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?php echo base_url('assets/sport/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sport/js/main.js'); ?>"></script>
    
    </body>
</html>