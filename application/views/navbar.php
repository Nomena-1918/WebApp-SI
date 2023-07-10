<style>
    .navbar {
        background-color: #9D6BF5; /* Smooth purple color */  
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: #000; /* Couleur de fond lorsque le lien est survolé */
    }

    .nav-link {
        font-size: 18px;
    }

    .custom-bold {
        font-weight: bold;
    }
</style>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3">
  <a class="navbar-brand px-4 custom-bold" href="#">App Nutrition</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-4" id="navbarNav">
      <ul class="navbar-nav ml-auto d-lg-flex px-2">
        <li class="nav-item px-2">
          <a class="nav-link" href="#">Back-office</a> <!--Lien vers back-office-->
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Accueil</a> <!--Programme en cours, sinon page invitant à commencer un nouveau programme-->
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Profil</a> <!--Infos persos-->
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="<?php echo base_url("index.php/choix_objectif"); ?>">Nouveau programme</a> <!--Choisir objectif : check si possible avant-->
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Gestion porte-monnaie</a> <!--Argent actuel, demande de recharge-->
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Log-out</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
