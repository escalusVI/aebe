<!DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8">
	   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	   <link rel="stylesheet" href="../style.css">
	   <title>admin</title>
    </head>
    <body>     
        <?php
            //
            session_start();
            $_SESSION = array();
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
                if ($password == "kangourou") {
                    $_SESSION['logged'] = time();
                    header("Location: index.php");
                } else {
        ?>
        
        <p>Si vous ne faite pas partie de l'administration il est inutile d'essayer de vous connecter</p>
        <a href='index.php'><button>Essayer de nouveau</button></a>
        <br />
        <a href='../cantine.php'><button>Quitter la page admin</button></a>
        
        <?php 
                }
            } else {
        ?>
        
        <p>Cet Espace est résérvé à l'ADMIN</p>
        <p>Veuillez saisir votre mot de passe</p>
        <form method="POST">
            <p><input type="password" name="password" /><button type="submit">Valider</button></p>
        </form>
        
        <?php
            }
        ?>
    </body>
</html>