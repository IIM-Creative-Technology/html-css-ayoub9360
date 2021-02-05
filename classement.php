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

        <div class="main" id="classement">

            <h1 id="classement"> CLASSEMENT</h1>

            <div class="tableauSondage">
                <!-- J'ai commencer la partie en php avec la base de donnée mais je vous met ducoup la version de base
                    <?php
                        //Connexion BDD
                        include('include/setting.php');

                        //Selection des données
                        $afficheImg = $bdd -> query('SELECT * FROM sondage WHERE expirationSondage >= NOW() ORDER BY id DESC');

                        //Boucle affichant toute les images de la base de données 
                        while ($img = $afficheImg ->fetch()) {
                            echo '
                                <div class="sondage">
                                    <a href="classement2.php?cheminImage='.$img['cheminImage'].'">
                                        <img src="'.$img['cheminImage'].'">
                                    </a>
                                    <h3> '.$img['nomSondage'].'</h3>
                                </div>
                            ';
                        }
                    ?>
                -->

                <div class="sondage">
                    <a href="classement2.php?cheminImage=admin/upload/55png.png">
                        <img src="admin/upload/55png.png">
                    </a>
                    <h3> Spotify</h3>
                </div>

                <div class="sondage">
                    <a href="classement2.php?cheminImage=admin/upload/54png.png">
                        <img src="admin/upload/54png.png">
                    </a>
                    <h3> Netflix</h3>
                </div>

                <div class="sondage">
                    <a href="classement2.php?cheminImage=admin/upload/53png.png">
                        <img src="admin/upload/53png.png">
                    </a>
                    <h3> Koh Lanta</h3>
                </div>

                <div class="sondage">
                    <a href="classement2.php?cheminImage=admin/upload/52jpeg.png">
                        <img src="admin/upload/52jpeg.png">
                    </a>
                    <h3> Apple</h3>
                </div>

                <div class="sondage">
                    <a href="classement2.php?cheminImage=admin/upload/51jpg.png">
                        <img src="admin/upload/51jpg.png">
                    </a>
                    <h3> Foot</h3>
                </div>

                <div class="sondage">
                    <a href="classement2.php?cheminImage=upload/32png.png">
                        <img src="upload/32png.png">
                    </a>
                    <h3> Twitch</h3>
                </div>
            </div>

        </div>

    </main>

    <?php include('include/footer.php') ?>

</body>

</html>