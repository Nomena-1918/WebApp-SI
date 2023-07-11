<style>
    .custom-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30%;
        font-size: 18px;
    }
</style>

<h1 class=" mt-2">Programme détaillé</h1>
<div class="py-1">Nom : <?php echo $resultQuery->result()[0]->nom; ?></div>
<div class="py-1">Objectif : <?php echo $resultQuery->result()[0]->objectif; ?></div>
<div class="py-1">Valeur : <?php echo $valObjectif; ?> kg</div>
<div class="py-1">Date début : <?php echo $dateDebut; ?> </div>
<div class="py-1">Date fin : <?php echo  date_format($dateFin, 'Y-m-d'); ?> </div>
<div class="py-1">Durée : <?php echo $dureepro; ?> jours</div>

<div class="custom-container">
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Heure</th>
            <th>Moment de la journée</th>
            <th>Sport</th>
            <th>Durée</th>
            <th>Plat</th>
            <th>Poids Plat (g)</th>
            <th>Variation poids (kg)</th>
            <th>Prix (Ar)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultQuery->result() as $row) { ?>
            <tr>
                <td><?php echo $row->heuredebut.' - '.$row->heurefin; ?></td>
                <td><?php echo $row->moment; ?></td>
                <td><?php echo $row->sport; ?></td>
                <td><?php echo $row->dureesport; ?></td>
                <td><?php echo $row->plat; ?></td>
                <td><?php echo $row->poidsplat; ?></td>
                <td><?php echo $row->variationpoids; ?></td>
                <td><?php echo $row->prixplat; ?></td>
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

<div class="mt-1">Variation poids par jour : <?php echo $sumVariationPoids; ?>kg</div>
<div class="mt-1">Prix plats par jour : <?php echo $sumPrixJour; ?> Ar</div>
<div class="mt-2">Porte-monnaie actuel : <?php echo $portemonnaie_actuel->result_array()[0]['monnaie_restante']; ?>Ar</div>

<div class="mt-4">Prix total : <?php echo $sumPrixTotal; ?>Ar</div>
<a href="<?php echo base_url(''); ?>" class="btn btn-primary mt-2">Acheter</a>

