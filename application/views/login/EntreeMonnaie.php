<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('assets/style.css');?>">

	</head>
	<body>
	<form class="form-default"  id="form-default" action="<?php echo site_url('entreeMonnaie/getEtatMonnaie');?> " method="POST">
	<section class="ftco-section">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">Entree Monnaie</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
							
					      <tr>
						  <th>Nom Utisateur</th>
					        <th>Code</th>
					        <th>Etat</th>
					        <th>VALEUR</th>
							<th></th>
					      </tr>
					    </thead>
					    <tbody>
						<?php foreach ($monnaies->result_array() as $row)  { ?>
					      <tr>
					        <td><?php  echo $row['nom']?></td>
					        <td><?php  echo $row['numero']?></td>
					        <td><?php  echo $row['etat']?></td>
					        <td><?php  echo $row['montant'] ?></td>
							<td><a href="<?php echo site_url('entreeMonnaie/getEtatMonnaie/' .$row['numero']);?> " class="btn btn-primary">Valider</a></td>
					      </tr>
					    </tbody>
						<?php } ?>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</form>
	</body>
</html>

