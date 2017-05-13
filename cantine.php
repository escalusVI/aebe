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
            <?php
                include ("include/header.php");
                include ("include/database.php");
            ?>
            <section class="row">
                <article class="col-md-7 col--md-offset-1">
                    <h2 class="col-lg-offset-4">Menu cantine</h2>
                    <div class="col-lg-6 col-xs-6 cantine">
                        <?php
                            $year = date("Y");
                            $week = date("W");
                            $jour = date("Y-m-d", strtotime($year."-W".$week."-1"));
                            $repas = $pdo->query("SELECT * FROM cantine WHERE jour = '".$jour."'")->fetch();
                            $entree = $repas['entree'];
                            $legumes = $repas['legumes'];
                            $viande = $repas['viande'];
                            $dessert = $repas['dessert'];
                        ?>
                        
                        <center><h3>Lundi <?php echo date("d/m/Y", strtotime($jour)); ?></h3></center>   
                        <h4>Entrée :</h4>
                        <h5><?php echo $entree; ?></h5>
                        <br />
                        <h4>Plat de resistance :</h4>
                        <h5><?php echo $viande; ?></h5>
                        <h5><?php echo $legumes; ?></h5>
                        <br />
                        <h4>Dessert :</h4>
                        <h5><?php echo $dessert; ?><br></h5>
                    </div>
                        
                    <div class="col-lg-6 col-xs-6 cantine">
                        <?php
                            $year = date("Y");
                            $week = date("W");
                            $jour = date("Y-m-d", strtotime($year."-W".$week."-2"));
                            $repas = $pdo->query("SELECT * FROM cantine WHERE jour = '".$jour."'")->fetch();
                            $entree = $repas['entree'];
                            $legumes = $repas['legumes'];
                            $viande = $repas['viande'];
                            $dessert = $repas['dessert'];
                        ?>
                        
                        <center><h3>Mardi <?php echo date("d/m/Y", strtotime($jour)); ?></h3></center>   
                        <h4>Entrée :</h4>
                        <h5><?php echo $entree; ?></h5>
                        <br />
                        <h4>Plat de resistance :</h4>
                        <h5><?php echo $viande; ?></h5>
                        <h5><?php echo $legumes; ?></h5>
                        <br />
                        <h4>Dessert :</h4>
                        <h5><?php echo $dessert; ?><br></h5>
                    </div>
                    
                    <div class="col-lg-6 col-xs-6 cantine">
                        <?php
                            $year = date("Y");
                            $week = date("W");
                            $jour = date("Y-m-d", strtotime($year."-W".$week."-4"));
                            $repas = $pdo->query("SELECT * FROM cantine WHERE jour = '".$jour."'")->fetch();
                            $entree = $repas['entree'];
                            $legumes = $repas['legumes'];
                            $viande = $repas['viande'];
                            $dessert = $repas['dessert'];
                        ?>
                        
                        <center><h3>Jeudi <?php echo date("d/m/Y", strtotime($jour)); ?></h3></center>   
                        <h4>Entrée :</h4>
                        <h5><?php echo $entree; ?></h5>
                        <br />
                        <h4>Plat de resistance :</h4>
                        <h5><?php echo $viande; ?></h5>
                        <h5><?php echo $legumes; ?></h5>
                        <br />
                        <h4>Dessert :</h4>
                        <h5><?php echo $dessert; ?><br></h5>
                    </div>
                    
                    <div class="col-lg-6 col-xs-6 cantine">
                        <?php
                            $year = date("Y");
                            $week = date("W");
                            $jour = date("Y-m-d", strtotime($year."-W".$week."-5"));
                            $repas = $pdo->query("SELECT * FROM cantine WHERE jour = '".$jour."'")->fetch();
                            $entree = $repas['entree'];
                            $legumes = $repas['legumes'];
                            $viande = $repas['viande'];
                            $dessert = $repas['dessert'];
                        ?>
                        
                        <center><h3>Vendredi <?php echo date("d/m/Y", strtotime($jour)); ?></h3></center>   
                        <h4>Entrée :</h4>
                        <h5><?php echo $entree; ?></h5>
                        <br />
                        <h4>Plat de resistance :</h4>
                        <h5><?php echo $viande; ?></h5>
                        <h5><?php echo $legumes; ?></h5>
                        <br />
                        <h4>Dessert :</h4>
                        <h5><?php echo $dessert; ?><br></h5>
                    </div>
                </article>
                <?php include ("include/aside.php");?>
            </section>
			<?php include ("include/footer.php");?>
		</div>

		<script src="bootstrap/js/bootsrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
	</body>
</html>

