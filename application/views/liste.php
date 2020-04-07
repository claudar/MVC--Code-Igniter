	
		<!-- application/views/liste.php -->
		
	<!DOCTYPE html>
		
	<html lang="fr">
		
	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>"> 
		<link rel="stylesheet" href="<?= base_url("assets/js/js.js"); ?>"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		
		<title>Liste des produits</title>
		
	</head>
		
	<body>
		
		<h1><i>Liste des produits</i></h1>
		
		 <p><i>Bonjour <?php echo $prenom," ", $nom;  ?> !</i></p>
		        <ul>
			    <?php foreach ($Produits as $test){?>

				<li><?php echo $test;?></li>

			    <?php }; ?>
			    </ul>		
			
			    <a href="<?= site_url("/produits/liste"); ?>">
				Modifier</a>
		
		      <div class="card">
			    <div class="card-header">
						Liste des Produits
					</div>
				<?php 
					
				foreach ($liste_produits as $row) { ?>
					
			
					<ul class="list-group list-group-flush">
					
					   <li class="list-group-item"><?= $row->pro_id ;?></li>
						
                       <li class="list-group-item"><?= $row->pro_libelle ; ?></li>
					</ul>
				</div>
						    
					
				<?php }	
				?>
				</div>
		
	</body>
		
	</html>
	