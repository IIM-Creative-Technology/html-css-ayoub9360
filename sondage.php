<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/sondage.css">
</head>

<body>

    <?php include('include/nav.php') ?>

    <main>

        <div class="explication">
            <div>

                <h1>SEREZ-VOUS A LA HAUTEUR ?</h1>
                <p>
                    Affrontez vos amis sur différents sondages et prédisez l'avenir afin de savoir lequel d'entre vous
                    est le meilleur pronostiqueur dans l'âme !
                </p>
                <a href="#sondage"><input id="commencer" type="button" value="COMMENCER"></a>
            </div>
        </div>

        <div class="main" id="sondage">

            <h1> SONDAGE EN COURS</h1>

            <div class="tableauSondage">

                <?php
                    //Connexion BDD
                    include('include/setting.php');

                    //Selection des données
                    $afficheImg = $bdd -> query('SELECT * FROM sondage WHERE expirationSondage >= NOW() ORDER BY id DESC');

                    //Boucle affichant toute les images de la base de données 
                    while ($img = $afficheImg ->fetch()) {
                        echo '
                            <div class="sondage">
                                <a href="questionnaire.php?cheminImage='.$img['cheminImage'].'">
                                    <img src="'.$img['cheminImage'].'">
                                </a>
                                <h3> '.$img['nomSondage'].'</h3>
                            </div>
                        ';
                    }
                ?>

            </div>

        </div>

        <div class="explication">
            <div>

                <h1>LE SAVEZ VOUS ?</h1>
                <p>
                    Une fois que vous avez jouer, vous pouvez comparer vos résultats avec ceux de vos amis !
                </p>
                <a href="classement.php"><input id="commencer" type="button" value="CLASSEMENT"></a>
            </div>
        </div>

    </main>

    <?php include('include/footer.php') ?>

</body>

</html>