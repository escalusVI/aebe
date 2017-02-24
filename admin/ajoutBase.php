<?php

	$jourLundi =  date('Y-m-d', strtotime($_POST['jourLundi']));
	$entreeLundi=$_POST['entreeLundi'];
	$legumesLundi=$_POST['legumesLundi'];
	$viandeLundi=$_POST['viandeLundi'];
	$dessertLundi=$_POST['dessertLundi'];

	$jourMardi =  date('Y-m-d', strtotime($_POST['jourMardi']));
	$entreeMardi=$_POST['entreeMardi'];
	$legumesMardi=$_POST['legumesMardi'];
	$viandeMardi=$_POST['viandeMardi'];
	$dessertMardi=$_POST['dessertMardi'];

	$jourJeudi =  date('Y-m-d', strtotime($_POST['jourJeudi']));
	$entreeJeudi=$_POST['entreeJeudi'];
	$legumesJeudi=$_POST['legumesJeudi'];
	$viandeJeudi=$_POST['viandeJeudi'];
	$dessertJeudi=$_POST['dessertJeudi'];

	$jourVendredi =  date('Y-m-d', strtotime($_POST['jourVendredi']));
	$entreeVendredi=$_POST['entreeVendredi'];
	$legumesVendredi=$_POST['legumesVendredi'];
	$viandeVendredi=$_POST['viandeVendredi'];
	$dessertVendredi=$_POST['dessertVendredi'];
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=cantine;charset=utf8', 'root', '');//appelde la base deonnées
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO repas( jour, entree, legumes, viande, dessert) VALUES (:jour, :entree, :legumes, :viande, :dessert)');

	$req->execute(array(
		'jour'=> $jourLundi,
		'entree'=> $entreeLundi,
		'legumes'=> $legumesLundi,
		'viande'=> $viandeLundi,
		'dessert'=> $dessertLundi
		));

	$req->execute(array(
		'jour'=> $jourMardi,
		'entree'=> $entreeMardi,
		'legumes'=> $legumesMardi,
		'viande'=> $viandeMardi,
		'dessert'=> $dessertMardi
		));

	$req->execute(array(
		'jour'=> $jourJeudi,
		'entree'=> $entreeJeudi,
		'legumes'=> $legumesJeudi,
		'viande'=> $viandeJeudi,
		'dessert'=> $dessertJeudi
		));

	$req->execute(array(
		'jour'=> $jourVendredi,
		'entree'=> $entreeVendredi,
		'legumes'=> $legumesVendredi,
		'viande'=> $viandeVendredi,
		'dessert'=> $dessertVendredi
		));
?>

<a href="../cantine.php">retour sur la page cantine</a>


