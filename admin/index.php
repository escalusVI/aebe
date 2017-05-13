<!DOCTYPE html>
<html>
    <head>
        <title>admin</title>
	   <meta charset="utf-8">
	   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	   <link rel="stylesheet" href="../style.css">
       <script src="main.js"></script>
    </head>
    <body>
        
        <?php
        
            include("include/database.php");
            
            if (isset($_POST['logout'])) {
                session_destroy();
                session_unset();
                header("Location: login.php");
            }
        
        
            session_start();

            $time = time();
            if ((isset($_SESSION['logged'])) && ($time - $_SESSION['logged'] < 900)) {
                $_SESSION['logged'] = $time;
            } else {
                session_destroy();
                session_unset();
                header("Location: login.php");
            }
                
            if (isset($_POST['valider'])) {
                $week = $_POST['semaine'];
                $lundi = date( "Y-m-d",  strtotime($week."1"));
                $mardi = date( "Y-m-d",  strtotime($week."2"));
                $jeudi = date( "Y-m-d",  strtotime($week."4"));
                $vendredi = date( "Y-m-d",  strtotime($week."5"));
                
                updateRepas($lundi, $_POST["entreeLundi"], $_POST["legumesLundi"], $_POST["viandeLundi"], $_POST["dessertLundi"]);
                updateRepas($mardi, $_POST["entreeMardi"], $_POST["legumesMardi"], $_POST["viandeMardi"], $_POST["dessertMardi"]);
                updateRepas($jeudi, $_POST["entreeJeudi"], $_POST["legumesJeudi"], $_POST["viandeJeudi"], $_POST["dessertJeudi"]);
                updateRepas($vendredi, $_POST["entreeVendredi"], $_POST["legumesVendredi"], $_POST["viandeVendredi"], $_POST["dessertVendredi"]);
            }
        
            $req = $pdo->prepare("SELECT * FROM cantine");
            $req->execute();
            $array = array();
            foreach ($req->fetchAll() as $row) {
                $date = $row['jour'];
                $repas = array();
                $repas["entree"] = $row["entree"];
                $repas["legumes"] = $row["legumes"];
                $repas["viande"] = $row["viande"];
                $repas["dessert"] = $row["dessert"];
                $array[$date] = $repas;
            }
            $json = htmlspecialchars(json_encode($array));
                
        
        
        
            function updateRepas($date, $entree, $legumes, $viande, $dessert) {
                global $pdo;
                if ((strlen($entree) > 0) || (strlen($legumes) > 0) || (strlen($viande) > 0) || (strlen($dessert) > 0)) {
                    $res = $pdo->prepare("SELECT * FROM cantine WHERE jour=DATE '".$date."'");
                    $res->execute();
                    if ($res->fetch()) {
                        $req = $pdo->prepare("UPDATE cantine SET entree=:entree,legumes=:legumes,viande=:viande,dessert=:dessert WHERE jour=DATE '".$date."'");
                        $req->execute(array(
                            'entree'=> $entree,
                            'legumes'=> $legumes,
                            'viande'=> $viande,
                            'dessert'=> $dessert
                        ));
                    } else {
                        $req = $pdo->prepare('INSERT INTO cantine(jour, entree, legumes, viande, dessert) VALUES (:jour, :entree, :legumes, :viande, :dessert)');
                        $req->execute(array(
                            'jour' => $date,
                            'entree'=> $entree,
                            'legumes'=> $legumes,
                            'viande'=> $viande,
                            'dessert'=> $dessert
                        ));
                    }
                    
                }
            }
        ?>
        
        <article class="col-md-7 col--md-offset-1"> 
            <h2 class="col-lg-offset-5">Menu cantine</h2>
            <form method="post">
                <p class="col-lg-offset-4">Choisissez une semaine :</p>
                <p class="col-lg-offset-4"><input type="week" name="semaine" onchange="update(this, '<?php echo $json; ?>');" required/></p>
                <div class="col-lg-6 col-xs-6 cantine">
					<h3>Lundi </h3>
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
                <button type="submit" name="valider">Valider</button>
            </form>
            <form method="post">
                <button type="submit" name="logout">Se déconnecter</button>
            </form>
        </article>
    </body>
</html>
