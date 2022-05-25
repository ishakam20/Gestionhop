<?php 
    session_start();             
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }

if(isset($_GET['d']))
{ $id = $_GET['d'] ;
}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Créer</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="create.css" type="text/css"/>
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
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-container">
                        <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                            <div class="heading mb-3">
                                <h1>Création d'un nouveau dossier !</h1>
                            </div>
                            <br/>
                            <form action="ajouter1.php?d=<?=$id?>" method="POST">
                                <div class="form-input">
                                    <label  for="nom"> Name :</label>
                                    <input type="text" id="nom"  name="nom" placeholder="introduisez un nom" required/><br/>
                                </div>
                                <div class="form-input">
                                    <label  for="prenom"> Prenom :</label>
                                    <input type="text" id="prenom"  name="prenom" placeholder="introduisez un prenom" required/><br/> 
                                </div>
                                <div class="form-input">
                                    <label  for="sexe"> Genre :</label>
                                    <br/>
                                    <label for="genreHomme"> Homme </label>
                                    <input type="radio" id="genreHomme" name="genre" value="homme"/>
                                    <label for="genreFemme"> Femme </label>
                                    <input type="radio" id="genreFemme" name="genre" value="Femme" />
                                </div>
                                <div class="form-input">
                                    <label  for="dateNaiss"> Date de naissance :</label>
                                    <input type="date" id="dateNaiss" name="date_naiss" min="1920-01-01" max="2008-01-01" /><br/>
                                </div>
                                <div class="form-input">
                                    <label for="email"> Email : </label><br/>
                                    <input type="email" name="email" placeholder="Introduisez un email" required>
                                </div>
                                <div class="form-input">
                                    <label for="tel">Numéro de téléphone 01 :</label>
                                    <input type="tel" id="tel" name="tel1" placeholder="entrez un numéro de téléphone"/><br/>
                                </div>
                                <div class="form-input">
                                    <label for="tel">Numéro de téléphone 02 :</label>
                                    <input type="tel" id="tel" name="tel2" placeholder="entrez un numéro de téléphone de secours" /><br/>
                                </div>
                                <div class="form-input">
                                    <label for="tel"> Email du medecin traitant :</label>
                                    <input type="tel" id="tel" name="med" /><br/>
                                </div>
                                <div class="form-input">
                                    <label  for="gs"> Groupe Sanguin :</label>
                                    <input type="text" id="gs"  name="gs" placeholder="Exemple : O-POS" required/><br/>
                                </div>
                                <div class="text-left mb-3">
                                    <button type="submit" class="btn btn-primary" id="log" >Créer le dossier</button>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </main>
	<body>
</html>						