<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title></title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/simplebar.css'); ?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/feather.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/dataTables.bootstrap4.css'); ?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/daterangepicker.css'); ?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/app-light.css'); ?>" id="lightTheme" disabled>
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/app-dark.css'); ?>" id="darkTheme">
    <link rel="stylesheet" href="<?php echo base_url('assets/allplat/css/popup.css'); ?>" id="darkTheme">
  </head>
  <body class="vertical  dark  ">
  <div id="popup-container" class="popup-container" style="display: none;">
        <div class="popup">
            <span class="close-btn" onclick="closePopup()">&times;</span>
    <h2>Erreur fatal</h2>
    <p>Vous ne pouvez pas supprimer d'element ici, veuillez en modifier une existante</p>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById("popup-container").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popup-container").style.display = "none";
        }
    </script>
    <div class="wrapper">
      <div class="mb-0 text-muted">
        <a class="dropdown-item" href="<?php echo site_url('plat/get_all_plat'); ?>">Liste des activités plats</a>
      </div>

      <main role="main" class="main-content">
    <div class="mb-0 text-muted">
        <a class="dropdown-item" href="<?php echo site_url('sport/load_sport'); ?>">Créer un une activité</a>
      </div>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                  <h2 class="h4 mb-1">Liste des sports</h2>
                  <p class="mb-3">Voici tous les sport que vous avez crée</p>
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="toolbar">
                        <form class="form">
                          <div class="form-row">
                            <!-- <div class="form-group col-auto mr-auto">
                              <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                              <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                                <option value="">...</option>
                                <option value="1">12</option>
                                <option value="2" selected>32</option>
                                <option value="3">64</option>
                                <option value="3">128</option>
                              </select>
                            </div> -->
                            <!-- <div class="form-group col-auto">
                              <label for="search" class="sr-only">Search</label>
                              <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                            </div> -->
                          </div>
                        </form>
                      </div>
                      <!-- table -->
                      <table class="table table-borderless table-hover">
                        <thead>
                          <tr>
                            <th>Nom</th>
                            <!-- <th>Contact</th>
                            <th class="w-25">Bio</th>
                            <th>Date</th>
                            <th>Action</th> -->
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ( $sports->result_array() as $row) { ?>
                          <tr>
                            <td> <p class="mb-0 text-muted"><strong><?php echo $row['nom'];  ?></strong></p> </td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo site_url('sport/get_sportBy_id/'.$row['id']);?>">Edit</a>
                                <button class="dropdown-item" onclick="openPopup()">Delete</button>
                               

                                
                              </div>
                            </td>
                            <!-- <td>
                              <p class="mb-0 text-muted"><a href="#" class="text-muted">(958) 421-0798</a></p>
                              <small class="mb-0 text-muted">Nigeria</small>
                            </td>
                            <td class="w-25"><small class="text-muted"> Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus.</small></td>
                            <td class="text-muted">13/09/2020</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td> -->
                          </tr>
                          <?php } ?>
                      
                         
                        </tbody>
                      </table>
                    
                    </div>
                  </div>
                </div> <!-- customized table -->
              </div> <!-- end section -->
             
            
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
       
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?php echo base_url('assets/allplat/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allplat/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allplat/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allplat/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allplat/js/simplebar.min.js'); ?>"></script>
    <script src='<?php echo base_url('assets/allplat/js/daterangepicker.js'); ?>'></script>
    <script src='<?php echo base_url('assets/allplat/js/jquery.stickOnScroll.js'); ?>'></script>
    <script src="<?php echo base_url('assets/allplat/js/tinycolor-min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allplat/js/config.js'); ?>"></script>
    <script src='<?php echo base_url('assets/allplat/js/jquery.dataTables.min.js'); ?>'></script>
    <script src='<?php echo base_url('assets/allplat/js/dataTables.bootstrap4.min.js'); ?>'></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script src="<?php echo base_url('assets/allplat/js/apps.js'); ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>