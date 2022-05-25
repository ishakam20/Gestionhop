<?php 
    session_start();             
    require_once 'datab.php';
    
    if(!isset($_SESSION['user']))
    {
        header('Location:index3.php'); 
        die();
    }

if(isset($_GET['d']))
{ $id = $_GET['d'] ;
$pat = $bdd->prepare("SELECT * FROM patient  WHERE idPatient = '$id' "); 
$pat->execute();
$data_pat = $pat->fetch();

$cons = $bdd->prepare("SELECT * FROM consultation WHERE idPatient = '$id' "); 
$cons->execute();
$data_cons = $cons->fetchAll();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modifier</title>
        <meta charset="UTF-8" />
		<link rel="stylesheet" href="modifiermed1.css" type="text/css"/>
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
        <?php foreach ($data_cons as $d)
        {   $ciphering = "AES-128-CTR";
            $option = 0;
            $decryption_key = "Iv39eptJvuhAq5srTo7mFqiZcuwXq1n0";
            $decryption_iv = "1234567890123456";
            $taille = $d['taille'];
            $tailled = openssl_decrypt($taille,$ciphering,$decryption_key,$option,$decryption_iv);
            $poids = $d['poids'];
            $poidsd = openssl_decrypt($poids,$ciphering,$decryption_key,$option,$decryption_iv);
            $tension = $d['tension'];
            $tensiond = openssl_decrypt($tension,$ciphering,$decryption_key,$option,$decryption_iv);
            $ant = $d['antecedents'];
            $antd = openssl_decrypt($ant,$ciphering,$decryption_key,$option,$decryption_iv);
            $obs = $d['observation'];
            $obsd = openssl_decrypt($obs,$ciphering,$decryption_key,$option,$decryption_iv);
            $diag = $d['diagnostic'];
            $diagd = openssl_decrypt($diag,$ciphering,$decryption_key,$option,$decryption_iv);
            $ana = $d['analyse'];
            $anad = openssl_decrypt($ana,$ciphering,$decryption_key,$option,$decryption_iv);
            $exam = $d['examenMedical'];
            $examd = openssl_decrypt($exam,$ciphering,$decryption_key,$option,$decryption_iv);
            $res = $d['resultat'];
            $resd = openssl_decrypt($res,$ciphering,$decryption_key,$option,$decryption_iv);
            $com = $d['commentaire'];
            $comd = openssl_decrypt($com,$ciphering,$decryption_key,$option,$decryption_iv);

            $id = $d['idConsultation'] ;?>
        <main class="main">
        <form method="POST" action="update.php?idc=<?=$id?>">
        <label  for="tp"> Taille :</label>
            <input type="text" id="tp" value=<?php echo $tailled?> name="taille"/><br/>
            <label  for="tp"> Poids :</label>
            <input type="text" id="tp" value=<?php echo $poidsd?> name="poids"/><br/>
            <label  for="tp"> Tension :</label>
            <input type="text" id="tp" value=<?php echo $tensiond?> name="tens"/><br/>
            <label  for="mc"> Antécedents :</label><br/>
            <textarea id="mc" name="ant" rows="5" cols="40"><?php echo $diagd ?> </textarea><br/>
            <label  for="obs"> Observation :</label>
            <input type="text" id="obs" value=<?php echo $obsd ?>  name="obs"/><br/>
            <label  for="diag"> Diagnostique :</label><br/>
            <textarea id="diag" name="diag" rows="5" cols="40"><?php echo $diagd ?> </textarea><br/>
            <label  for="anal"> Analyse :</label><br/>
            <textarea id="anal" name="ana" rows="10" cols="40"> <?php echo $anad ?> </textarea><br/>
            <label  for="exam"> Examen médical :</label><br/>
            <textarea id="exam" name="exam" rows="5" cols="40"><?php echo $examd ?> </textarea><br/>
            <label  for="res"> Résultat :</label><br/>
            <textarea id="res" name="res" rows="10" cols="40"><?php echo $resd ?> </textarea><br/>
            <label  for="com"> Commentaire :</label>
            <input type="text" id="com"  value=<?php echo $comd ?> name="com"/><br/>
            <label  for="dateConsult"> Date de Consultation :</label>
            <input type="date" id="date" value=<?php echo $d['dateConsult'] ?> name="dateConsult" min="1920-01-01" max="2008-01-01" /><br/>
            <button class="btn1">Enregistrer la modification</button>
            <button class="btn2">Annuler</button>
        </form>
        </main>
        <?php } ?>
    </body>
</html>