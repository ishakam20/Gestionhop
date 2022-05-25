<?php 
    session_start();             
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:auth.php'); 
        die();
    }


    $idh = ($_POST['hop']) ;
    $ids = ($_POST['serv']);

    $pat = $bdd->prepare("SELECT * FROM patient  WHERE idService = '$ids' AND idHopital ='$idh' AND archive = 'non' "); 
    $pat->execute();
    $data_pat = $pat->fetchAll();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Consulter</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="consultersec.css" type="text/css"/>
	</head>
	<body>
		<nav class="nav">
        <ul>
                <li><a class="a1" href="profiladmg.php">Mon profil</a></li>
                <li><a href="infospers.php">Informations personnelles </a></li>
                <li><a href="infosmed.php">Informations médicales </a></li>
                <li><a href="deconnexion.php"> deconnexion </a></li>
			</ul>
		</nav>
        <main class="main">
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nom </th>
                    <th>Prenom</th>
                    <th>Action</th>
                </tr>
                <?php foreach($data_pat as $d)
            {   
                $idp= $d['idPatient'];
                $hop = $bdd->prepare("SELECT * FROM hopital  WHERE idHopital = '$idH' "); 
                $hop->execute();
                $data_hop = $hop->fetch(); ?>
                <tr>
                    <td> <?php echo $d['nom'] ?> </td>
                    <td><?php echo $d['prenom'] ?></td>
                    <td><a <?php if( $data_hop['wilaya'] < 30 ) { ?> href="consmed1.php?d=<?=$idp?>" <?php }else{ ?>href="consmed2.php?d=<?=$idp?>"<?php } ?> > Consulter </a></td>
                </tr>
                <?php } ?> 
            </table>
        </main>
	<body>
</html>						