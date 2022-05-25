<?php 

    session_start();              
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }
    $email2 = ($_POST['email2']);
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $mdp = ($_POST['mdp']);
    $mdph = password_hash($mdp, PASSWORD_DEFAULT);
    if(isset($_GET['em']))
    {  
    $email = $_GET['em'] ;
    $pat = $bdd->prepare("SELECT * FROM medecin  WHERE email = '$email' "); 
    $pat->execute();
    $data_med = $pat->fetch();
    $row = $pat->rowCount(); 
    if($row == 1)
    {   
        $sql = "UPDATE `medecin` SET `email`='".$email2."',`Nom`='".$nom."',`Prénom`='".$prenom."',`mdp`='".$mdph."' WHERE email ='$email'";
        $exec = $bdd->query($sql) ;
    }else
    {
        $sql = "UPDATE `secretaire` SET `email`='".$email2."',`Nom`='".$nom."',`Prénom`='".$prenom."',`mdp`='".$mdph."' WHERE email ='$email'";
        $exec = $bdd->query($sql) ;
    }
}

if($exec)
{ 
  header('Location:mespatientsadmh.php?mod=oui');
}else
{
  header('Location:mespatientsadmh.php?mod=non');
} 
?>