<?php	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=cantine;charset=utf8', 'root', '');//appelde la base deonnées
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare(' UPDATE repas set jour=:jour, entree=:entree, legumes=:legumes, viande=:viande, dessert=:dessert where id=:id');

	for ($i = 0; $i < 4; $i++) {
		$req->execute(array(
			':jour'=> date('Y-m-d', strtotime($_POST['jours'][$i])),
			':entree'=> $_POST['entrees'][$i],
			':legumes'=> $_POST['legumes'][$i],
			':viande'=> $_POST['viandes'][$i],
			':dessert'=> $_POST['desserts'][$i],
			':id' => $i
		));
	}
?>

<a href="../cantine.php">retour sur la page cantine</a>


