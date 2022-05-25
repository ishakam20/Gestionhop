<?php 
    session_start();             
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:auth.php'); 
        die();
    }

    $email = ($_SESSION['user']);
    $profile = $bdd->prepare("SELECT * FROM secretaire  WHERE email = ? "); 
    $profile->execute(array($email));
    $data_profile = $profile->fetch();

    $ids = $data_profile['idService'];

    $idH = $data_profile['idHopital'];
    $hop = $bdd->prepare("SELECT * FROM hopital  WHERE idHopital = '$idH' "); 
    $hop->execute();
    $data_hop = $hop->fetch();

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Mes patients</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="mespatientsec.css" type="text/css"/>
	</head>
	<body>
		<nav class="nav">
			<ul>
                <li><a class="a1" href="profilsec.php">Mon profil</a></li>
                <li><a class="a2" href="mespatientsec.php">Mes patients</a></li>
                <li><a href="archives.php">Les archives</a></li>
                <li><a href="deconnexion.php"> deconnexion </a></li>
			</ul>
		</nav>
        <main class="main">
        <?php if(isset( $_GET['ajout']) && $_GET['ajout']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le dossier a été correctement ajouté</div>";
            }elseif(isset( $_GET['ajout']) && $_GET['ajout']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  Le dossier n'a pas été correctement ajouté</div>";
            }
            if(isset( $_GET['modif']) && $_GET['modif']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le dossier a été correctement modifié</div>";
            }elseif(isset( $_GET['modif']) && $_GET['modif']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  Le dossier n'a pas été correctement modifié</div>";
            }
            if(isset( $_GET['archiv']) && $_GET['archiv']==='oui')
            {
                echo "<div class=\"alert alert-success\" role=\"alert\">  Le dossier a été correctement archivé</div>";
            }elseif(isset( $_GET['archiv']) && $_GET['archiv']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  Le dossier n'a pas été correctement archivé </div>";
            }
            if(isset( $_GET['desarchiv']) && $_GET['desarchiv']==='oui')
            {
                echo "<div class=\"alert alert-success\" role=\"alert\">  Le dossier a été correctement désarchivé</div>";
            }elseif(isset( $_GET['desarchiv']) && $_GET['desarchiv']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  Le dossier n'a pas été correctement désarchivé </div>";
            }
            
        ?>
            <ul>
                <li><a <?php if( $data_hop['wilaya'] < 30 ) { ?> href="create.php?d=<?=$ids?>"<?php }else{ ?> href="create2.php?d=<?=$ids?>" <?php } ?>>Créer un dossier</a></li>
                <li><a href="consultersec.php">Consulter un dossier</a></li>
                <li><a href="modifierdosssec.php">Modifier un dossier</a></li>
                <li><a href="archiversec.php">Archiver un dossier</a></li>
            </ul>
        </main>
        </footer>
	<body>
</html>						