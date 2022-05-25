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
    $idh = $data_profile['idHopital'];

    $pat = $bdd->prepare("SELECT * FROM patient  WHERE idService = '$ids' AND idHopital ='$idh'"); 
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
                <li><a class="a1" href="profilsec.php">Mon profil</a></li>
                <li><a class="a2" href="mespatientsec.php">Mes patients</a></li>
                <li><a href="archives.php">Les archives</a></li>
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
                $idH= $d['idHopital'];
                $hop = $bdd->prepare("SELECT * FROM hopital  WHERE idHopital = '$idH' "); 
                $hop->execute();
                $data_hop = $hop->fetch(); ?>
                <tr>
                    <td> <?php echo $d['nom'] ?> </td>
                    <td><?php echo $d['prenom'] ?></td>
                    <td><a <?php if( $data_hop['wilaya'] < 30 ) { ?> href="updatedosssec1.php?d=<?=$idp?>" <?php }else{ ?>href="updatedosssec2.php?d=<?=$idp?>"<?php } ?> > modifier </a></td>
                </tr>
                <?php } ?> 
            </table>
        </main>
	<body>
</html>						