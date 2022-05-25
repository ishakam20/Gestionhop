<?php 

    session_start();              
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }
    $email = ($_SESSION['user']);
    $profile = $bdd->prepare("SELECT * FROM administrateur  WHERE email = ? "); 
    $profile->execute(array($email));
    $data_profile = $profile->fetch();

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Mon profil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="creercpt.css" type="text/css"/>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-container">
                        <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                            <div class="heading mb-3">
                                <h1>Création d'un nouveau compte !</h1>
 
                            </div>
                            <br/>
                            <form action="creation.php" method="POST" >
                                <div class="form-input">
                                    <input type="text" id="nom"  name="nom" placeholder="Introduisez un nom" required/><br/>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="prenom"  name="prenom" placeholder="Introduisez un prenom" required/><br/> 
                                </div>
                                <div class="form-input">
                                    <input name="email" type="email" placeholder="Introduisez un email" required>
                                </div>
                                <div class="form-input">
                                    <input name="mdp" type="password" placeholder="Introduisez un mot de passe" required>
                                </div>
                                <div class="form-input">
                                    <input name="tel" type="text" placeholder="Introduisez un numéro de télephone " required>
                                </div>

                                <div class="form-input">
                                    <select name="fct" id="fct">
                                        <option value="fct">Choisissez une fonction</option>
                                        <option value="med">Medecin </option>
                                        <option value="sec">Secrétaire </option>
                                    </select><br/><br/>
                                </div>
               
                                <div class="form-input">
                                    <input type="date" id="dateNaiss" name="date_naiss" min="1920-01-01" max="2008-01-01" />
                                </div>
                                <div class="text-left mb-3">
                                    <button type="submit" class="btn btn-primary" id="log" >Créer le compte</button>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </main>
	<body>
</html>						