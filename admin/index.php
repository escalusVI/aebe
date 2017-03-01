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
<article class="col-md-7 col-md-offset-4">
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
							<article class="col-md-7 col-md-offset-1">

						<h2 class="col-lg-offset-4">Menu cantine</h2>
						<div class="col-lg-6 col-xs-6 cantine">
							<form method="post" action="ajoutBase.php">
									<h3>Lundi </h3>
									<input type="date" name="jours[]">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrees[]" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumes[]" placeholder="legumes"><br>
											<input type="text" name="viandes[]" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="desserts[]" placeholder="dessert">
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Mardi</h3>
									<input type="date" name="jours[]">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrees[]" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumes[]" placeholder="legumes"><br>
											<input type="text" name="viandes[]" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="desserts[]" placeholder="dessert">

									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Jeudi</h3>
									<input type="date" name="jours[]">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrees[]" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumes[]" placeholder="legumes"><br>
											<input type="text" name="viandes[]" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="desserts[]" placeholder="dessert">

									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Vendredi</h3>
									<input type="date" name="jours[]">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrees[]" placeholder="entrée"><br>

										<h4>plat de resistance</h4>
											<input type="text" name="legumes[]" placeholder="legumes"><br>
											<input type="text" name="viandes[]" placeholder="viande"><br>

										<h4>dessert</h4>
											<input type="text" name="desserts[]" placeholder="dessert"><br/>


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
