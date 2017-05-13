<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width-device-width, initial-scale=1.0" />
		<title>AEBE</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="images/logo.png" type="image/png">
	</head>
	
	<body>

	
		<div class="col-md-10 col-md-offset-1 container">
		
		
		
				<?php include ("include/header.php");?>
				<?php
				try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=escalus_cantine;charset=utf8', 'root', '');
					}
					catch (Exception $e)
					{
					        die('Erreur : ' . $e->getMessage());
					}
							$year = date("Y");
							$week = date("W");
							$lundi = date("Y-m-d", strtotime($year."-W".$week."-1"));
		
				?>
		<section class="row">
		
			<article class="col-md-7 col--md-offset-1">
				
						<h2 class="col-lg-offset-4">Menu cantine</h2>
						<div class="col-lg-6 col-xs-6 cantine">
							<?php
							$reponse = $bdd->query('SELECT jour, entree, legumes, viande, dessert FROM repas WHERE DAYNAME(jour) = "monday"');
							while ($donnees = $reponse->fetch())
							{
							?>							
								<h3>Lundi <br>Le <?php echo $donnees['jour'] ?></h3>
								<h4>entrée</h4>
								<h5><?php echo $donnees['entree']; ?><br></h5>	
								<h4>plat de resistance</h4>
								<h5><?php echo $donnees['viande']; ?>, <?php echo $donnees['legumes']; ?><br></h5>			
								<h4>dessert</h4>
								<h5><?php echo $donnees['dessert']; ?><br></h5>
							<?php
							}
							$reponse->closeCursor();
							?>
						</div>
						<div class="col-lg-6 col-xs-6 cantine">
							<?php
							$reponse = $bdd->query('SELECT jour, entree, legumes, viande, dessert FROM repas WHERE DAYNAME(jour) = "tuesday"');
							while ($donnees = $reponse->fetch())
							{
							?>							
								<h3>Mardi <br>Le <?php echo $donnees['jour'] ?></h3>
								<h4>entrée</h4>
								<h5><?php echo $donnees['entree']; ?><br></h5>	
								<h4>plat de resistance</h4>
								<h5><?php echo $donnees['viande']; ?>, <?php echo $donnees['legumes']; ?><br></h5>			
								<h4>dessert</h4>
								<h5><?php echo $donnees['dessert']; ?><br></h5>
							<?php
							}
							$reponse->closeCursor();
							?>
						</div>
						<div class="col-lg-6 col-xs-6 cantine">
							<?php
							$reponse = $bdd->query('SELECT jour, entree, legumes, viande, dessert FROM repas WHERE DAYNAME(jour) = "thursday"');
							while ($donnees = $reponse->fetch())
							{
							?>							
								<h3>Jeudi <br>Le <?php echo $donnees['jour'] ?></h3>
								<h4>entrée</h4>
								<h5><?php echo $donnees['entree']; ?><br></h5>	
								<h4>plat de resistance</h4>
								<h5><?php echo $donnees['viande']; ?>, <?php echo $donnees['legumes']; ?><br></h5>			
								<h4>dessert</h4>
								<h5><?php echo $donnees['dessert']; ?><br></h5>
							<?php
							}
							$reponse->closeCursor();
							?>
						</div>
						<div class="col-lg-6 col-xs-6 cantine">
							<?php
							$reponse = $bdd->query('SELECT jour, entree, legumes, viande, dessert FROM repas WHERE DAYNAME(jour) = "friday"');
							while ($donnees = $reponse->fetch())
							{
							?>							
								<h3>Vendredi <br>Le <?php echo $donnees['jour'] ?></h3>
								<h4>entrée</h4>
								<h5><?php echo $donnees['entree']; ?><br></h5>	
								<h4>plat de resistance</h4>
								<h5><?php echo $donnees['viande']; ?>, <?php echo $donnees['legumes']; ?><br></h5>			
								<h4>dessert</h4>
								<h5><?php echo $donnees['dessert']; ?><br></h5>
							<?php
							}
							$reponse->closeCursor();
							?>
						</div>

<!--						<div class="col-lg-6 col-xs-6 cantine">
							<h3>Jeudi</h3>
							<p>
								<h4>entrée</h4>
									betterave<br>
								
								<h4>plat de resistance</h4>
									frites<br>
									steack haché<br>
									
								<h4>dessert</h4>
									glace
									
							</p>
						</div>

						<div class="col-lg-6 col-xs-6 cantine">
							<h3>Vendredi</h3>
							<p>
								<h4>entrée</h4>
									betterave<br>
								
								<h4>plat de resistance</h4>
									frites<br>
									steack haché<br>
									
								<h4>dessert</h4>
									glace
									
							</p>
						</div>
						
						</p>-->
			</article>
			
			<?php include ("include/aside.php");?>
			
		</section>
		
		
			<?php include ("include/footer.php");?>
			
		
		</div>

		<script src="bootstrap/js/bootsrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
	</body>
</html>

