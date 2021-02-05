<?php


if (isset($_POST['nomSondage']) AND isset($_POST['expirationSondage'])){
    
    include('../include/setting.php');


    $selectID = $bdd->query('SELECT id AS id FROM sondage ORDER BY id DESC LIMIT 0,1');
    $id = $selectID->fetch();
    $id = $id['id'];
    $id++;


    //Définie les chemin d'accées
    $cheminTemporaire = $_FILES['uploadedFile']['tmp_name'];
    //$cheminDefinitif = 'upload/'.$_FILES['uploadedFile']['name'];
    $cheminDefinitif = 'upload/'.$id.pathinfo($_FILES['uploadedFile']['name'], PATHINFO_EXTENSION).'.png';

    //Deplace l'image dans le répertoire choisis
    $moveIsOk = move_uploaded_file($cheminTemporaire, $cheminDefinitif);

    $cheminDefinitif = 'admin/upload/'.$id.pathinfo($_FILES['uploadedFile']['name'], PATHINFO_EXTENSION).'.png';



    $addSondage = $bdd->prepare("INSERT INTO sondage(nomSondage, creationSondage, expirationSondage, cheminImage, question1, reponseA, reponseB, reponseC, reponseD) 
    VALUES(:nomSondage, NOW(), :expirationSondage, :cheminImage, :question1, :reponseA, :reponseB, :reponseC, :reponseD);");

    $addSondage -> execute(array(
        'nomSondage' => $_POST['nomSondage'],
        'expirationSondage' => $_POST['expirationSondage'],
        'cheminImage' => $cheminDefinitif,
        'question1' => $_POST['question1'],
        'reponseA' => $_POST['reponseA'],
        'reponseB' => $_POST['reponseB'],
        'reponseC' => $_POST['reponseC'],
        'reponseD' => $_POST['reponseD'],
    ));

    ?> 
    <h1> Les informations on bien été envoyer !</h1>
    <a href="adminIndex.php"> RETOUR A L'ACCUEIL </a>    
    <?php
}

?>