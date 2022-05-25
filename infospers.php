<!DOCTYPE html>
<html>

	<head>
		<title>Mon profil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="infospers.css" type="text/css"/>
	</head>
	<body>
        <nav>
			<ul>
                <li><a class="a1" href="profiladmg.php">Mon profil</a></li>
                <li><a class="a2" href="infospers.php">Informations personnelles </a></li>
                <li><a href="infosmed.php">Informations médicales </a></li>
                <li><a href="deconnexion.php"> deconnexion </a></li>
			</ul>
		</nav>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-container">
                        <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                            <div class="heading mb-3">
                                <h1>Consultation les informations personnelles des patients</h1>
                            </div>
                            <br/>
                            <form action="consulterpat.php" method="POST" >
                                <div class="form-input">
                                    <input type="number" id="hop" name="hop" min="0" max="10" placeholder="introduisez l'identifiant de l'hopital souhaité" required/><br/>
                                </div>
                                <div class="form-input">
                                    <input type="number" id="hop" name="serv" min="0" max="10" placeholder="introduisez l'identifiant du service souhaité" required/><br/>
                                </div>
                                <div class="text-left mb-3">
                                    <button type="submit" class="btn btn-primary" id="log" >Consulter</button>
                                    <!--il renvoie a la page consultpat-->
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </main>
	<body>
</html>						