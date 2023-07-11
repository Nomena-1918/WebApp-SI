<html>
<head>
    <title>App</title>
    <!-- Include CSS and JS files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
   

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .wrapper {
      min-height: 100%;
      margin-bottom: -50px; /* Set the height of the footer */
    }

  </style>
</head>
<body>

    <div class="wrapper">
        <?php $this->load->view('header'); ?>


        <div class="container">
            <?php $this->load->view($content_view); ?>
        </div>

        
        <div class="push"></div>
    </div>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
