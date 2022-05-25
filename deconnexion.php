<?php 
    session_start();                     //démarrer la session
    session_destroy();                   //la détruire
    header('Location:auth.php');        //Redériger vers index.php
    die();
?>