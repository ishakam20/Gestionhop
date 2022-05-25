<?php 

    session_start();              
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }
    $email = ($_POST['email']);
    $pat = $bdd->prepare("SELECT * FROM medecin  WHERE email = '$email' "); 
    $pat->execute();
    $data_med = $pat->fetch();

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Modifier un compte</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="modifieradmh.css" type="text/css"/>
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
                                <h1>Modification d'un compte !</h1>
                            </div>
                            <br/>
                            <form action="modifier.php?em=<?=$email?>" method="POST">
                                <div class="form-input">
                                    <input type="text" id="nom"  value=<?php echo $data_med['Nom'] ?> name="nom" /><br/>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="prenom"  value=<?php echo $data_med['Prénom'] ?>  name="prenom" placeholder="Modifiez le prenom"/><br/> 
                                </div>
                                <div class="form-input">
                                    <input type="email" name="email2" value=<?php echo $data_med['email'] ?>  placeholder="Modifiez l'email"/>
                                </div>
                                <div class="form-input">
                                    <input type="password" name="mdp"  value=<?php echo $data_med['mdp'] ?>  placeholder="Modifiez le mot de passe" />
                                </div>
                                <div class="text-left mb-3">
                                    <button type="submit" class="btn btn-primary" id="log" >Modifier le compte</button>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </main>
	<body>
</html>						