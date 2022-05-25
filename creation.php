<?php 

    session_start();              
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }
    
    $now = $_SESSION['user'];
    $profile = $bdd->prepare("SELECT * FROM administrateur  WHERE email = ? "); 
    $profile->execute(array($now));
    $data_profile = $profile->fetch();

    $idh=$data_profile['idHopital'];
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $email = ($_POST['email']);
    $mdp = ($_POST['mdp']);
    $mdph = password_hash($mdp, PASSWORD_DEFAULT);
    $tel = ($_POST['tel']);
    $date = ($_POST['date_naiss']);
    $fct = ($_POST['fct']);
    $med = "med";
    $sec = "sec";

    if( $fct == $med )
    {
    $dep = $bdd->prepare("INSERT INTO medecin (`email`,`nomUser`,`mdp`,`Nom`,`Prénom`,`Tel`,`data_naiss`,`idService`,`idHopital`) VALUES ('$email','','$mdph','$nom','$prenom','$tel','$date','9','$idh') ;");
    $res=$dep->execute();
    }elseif( $fct == $sec )
    {
    $dep = $bdd->prepare("INSERT INTO secretaire (`email`,`nomUser`,`mdp`,`Nom`,`Prénom`,`Tel`,`data_naiss`,`idService`,`idHopital`) VALUES ('$email','','$mdph','$nom','$prenom','$tel','$date','9','$idh') ;");
    $res=$dep->execute();
    }

    if($res)
    { 
      header('Location:mespatientsadmh.php?add=oui');
    }else
    {
      header('Location:mespatientsadmh.php?add=non');
    } 