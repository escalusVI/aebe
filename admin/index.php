<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../style.css">
	<title>admin</title>
</head>
<body>


<section class="row">
<article class="col-md-7 col--md-offset-1">
	<?php
		if (!isset($_POST['password']))
		{ ?>
			<p>
				Cet espace est résérvé à l'ADMIN</p><br/>Veuillez saisir votre mot de passe
				<form method="POST" action="index.php">
					<p>
						<input type="password" name="password">
						<input type="submit" value="valider">
					</p>
				</form>


			</p>

	<?php }
		elseif ($_POST['password'] != "kangourou") {
			?>
			<p>Si vous ne faite pas partie de l'administration il est inutile d'essayer de vous connecter</p>
			<a href="index.php">essayer de nouveau</a><br/>
			<a href="cantine.php">Quitter la page admin</a>
			<?php }

			else{
				?>
							<article class="col-md-7 col--md-offset-1">

						<h2 class="col-lg-offset-4">Menu cantine</h2>
						<div class="col-lg-6 col-xs-6 cantine">
							<form method="post" action="ajoutBase.php">
									<h3>Lundi </h3>
									<input type="date" name="jourLundi">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entreeLundi" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumesLundi" placeholder="legumes"><br>
											<input type="text" name="viandeLundi" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="dessertLundi" placeholder="dessert">

									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Mardi</h3>
									<input type="date" name="jourMardi">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entreeMardi" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumesMardi" placeholder="legumes"><br>
											<input type="text" name="viandeMardi" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="dessertMardi" placeholder="dessert">

									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Jeudi</h3>
									<input type="date" name="jourJeudi">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entreeJeudi" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumesJeudi" placeholder="legumes"><br>
											<input type="text" name="viandeJeudi" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="dessertJeudi" placeholder="dessert">

									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Vendredi</h3>
									<input type="date" name="jourVendredi">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entreeVendredi" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumesVendredi" placeholder="legumes"><br>
											<input type="text" name="viandeVendredi" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="dessertVendredi" placeholder="dessert"><br/>


									</p>
								</div>
								<a href="admin.php"></a><input type="submit" value="valider">
								</p>
							</form>
			</article>
			<?php }

	?>
</article>
</section>
</body>
</html>
