<?php 

    session_start();              
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }
    
    if(isset($_GET['d']))
    {
    $ida=$_GET['d'];
    $a='non';
    $sql = "UPDATE `patient` SET `archive`='".$a."' WHERE idPatient ='$ida'";
    $exec = $bdd->query($sql) ;
    }

    if($exec)
    { 
      header('Location:mespatientsec.php?desarchiv=oui');
    }else
    {
      header('Location:mespatientsec.php?desarchiv=non');
    } 