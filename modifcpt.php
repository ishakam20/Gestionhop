<!DOCTYPE html>
<html>

	<head>
		<title>Mon profil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="modifcpt.css" type="text/css"/>
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
                                <h1>Modification d'un nouveau compte !</h1>
                            </div>
                            <br/>
                            <form action="modifieradmh.php" method="POST" >
                                <div class="form-input">
                                    <input type="email" name="email" placeholder="Introduisez l'email du compte que vous voulez modifier" required>
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