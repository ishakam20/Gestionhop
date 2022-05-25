<!DOCTYPE html>
<html>

	<head>
		<title>Gestion des comptes </title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="mespatientsadmh.css" type="text/css"/>
	</head>
	<body>
		<nav>
			<ul class="ul">
                <li><a class="a1" href="profiladmh.php">Mon profil</a></li>
                <li><a class="a2" href="mespatientsadmh.php">Gérer les comptes</a></li>
                <li><a href="deconnexion.php"> deconnexion </a></li>
			</ul>
		</nav>
        <main class="main">
		<?php if(isset( $_GET['add']) && $_GET['add']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le compte a bien été crée </div>";
            }elseif(isset( $_GET['add']) && $_GET['add']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\"> Le compte n'a pas été crée !</div>";
            }
			if(isset( $_GET['supp']) && $_GET['supp']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le compte a bien été supprimé </div>";
            }elseif(isset( $_GET['supp']) && $_GET['supp']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\"> Le compte n'a pas été supprimé !</div>";
            }
            if(isset( $_GET['mod']) && $_GET['mod']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le compte a bien été modifié </div>";
            }elseif(isset( $_GET['mod']) && $_GET['mod']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\"> Le compte n'a pas été modifié !</div>";
            }
		?>
            <ul>
                <li><a href="creercpt.php">Créer un compte</a></li>
                <li><a href="suppcpt.php">Supprimer un compte</a></li>
                <li><a href="modifcpt.php">Modifier un compte</a></li>
            </ul>
        </main>
	<body>
</html>						