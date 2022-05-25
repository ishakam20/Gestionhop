<?php 
    session_start();             
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:auth.php'); 
        die();
    }
    $email = ($_SESSION['user']);
    $profile = $bdd->prepare("SELECT * FROM medecin  WHERE email = '$email' "); 
    $profile->execute();
    $data_profile = $profile->fetch();

    $id = $data_profile['idMedecin'];

    $pat = $bdd->prepare("SELECT * FROM patient  WHERE idMedecin = '$id' "); 
    $pat->execute();
    $data_pat = $pat->fetchAll();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Mes patients</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="mespatientsmed.css" type="text/css"/>
	</head>
	<body>
		<nav>
			<ul>
                <li><a class="a1" href="profilmed.php">Mon profil</a></li>
                <li><a class="a2" href="mespatientsmed.php">Mes patients</a></li>
                <li><a href="autrespat.php">Autres patients</a></li>
                <li><a href="autres.php">Autres</a></li>
                <li><a href="deconnexion.php"> deconnexion </a></li>
			</ul>
		</nav>
        <main class="main">
        <?php if(isset( $_GET['modif']) && $_GET['modif']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  Le rapport médical a bien été modifié</div>";
            }elseif(isset( $_GET['modif']) && $_GET['modif']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  La modification a échoué !</div>";
            }
            if(isset( $_GET['add']) && $_GET['add']==='oui')
            {
            echo "<div class=\"alert alert-success\" role=\"alert\">  La consultation a bien été ajouté</div>";
            }elseif(isset( $_GET['add']) && $_GET['add']==='non') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">  L'ajout a échoué !</div>";
            }
        ?>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nom </th>
                    <th>Prenom</th>
                    <th colspan="2">Action</th>
                </tr>
            <?php foreach($data_pat as $d)
            {   $idp = $d['idPatient'] ;
                $idH = $d['idHopital'];
                $hop = $bdd->prepare("SELECT * FROM hopital  WHERE idHopital = '$idH' "); 
                $hop->execute();
                $data_hop = $hop->fetch(); ?>
                <tr>
                    <td><?php echo $d['nom'] ?> </td>
                    <td><?php echo $d['prenom'] ?> </td>
                    <td><a <?php if( $data_hop['wilaya'] < 30 ) { ?> href="consultermed1.php?d=<?=$idp?>" <?php }else{ ?>href="consultermed2.php?d=<?=$idp?>"<?php } ?>> Consulter</a></td>
                    <td><a <?php if( $data_hop['wilaya'] < 30 ) { ?> href="modifiermed1.php?d=<?=$idp?>" <?php }else{ ?>href="modifiermed2.php?d=<?=$idp?>"<?php } ?> > Modifier </a></td>
                </tr>
            <?php } ?> 
            </table>
        </main>
        </footer>
	<body>
</html>						