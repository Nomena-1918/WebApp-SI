<style>
    .custom-form .form-group {
        margin-bottom: 2rem; /* Espacement vertical entre les éléments */
    }
    .custom-form .btn-primary {
        width: 40%; /* Largeur complète du bouton */
    }
    .custom-form {
        max-width: 400px; /* Largeur maximale du formulaire */
        margin: 0 auto; /* Centrage horizontal du formulaire */
        padding: 20px; /* Espace intérieur du formulaire */
    }
    .custom-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70%;
        font-size: 18px;
    }
    .card-header {
        font-size: 20px;
        font-weight: bold;
    }
    
</style>
<div class="custom-container">
<div class="card col-5">
      <div class="card-header p-3">
        Prêt à devenir une meilleure version de soi-même ?
      </div>
      <div class="card-body">
        <form class="custom-form">
          <div class="form-group">
            <label for="selectObjectif">Définissez votre objectif :</label>
            <select class="form-control" id="selectObjectif">
              <option value=""></option>
              <?php foreach ($result->result_array() as $row) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputValeur">Valeur (kg) :</label>
            <input type="number" class="form-control" id="inputValeur" placeholder="Entrez une valeur">
          </div>
          <div class="form-group">
            <label for="inputDateDebut">Date de début :</label>
            <input type="datetime-local" class="form-control" id="inputDateDebut">
          </div>
          <button type="submit" class="btn btn-primary">Valider</button>
        </form>
      </div>
    </div>
</div>

</div>