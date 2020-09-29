<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/question.css">

</head>

<body>

    <?php include('include/nav.php') ?>


    <main>

        <div class="imgPrincipale">
            <?php
            
                echo '<img src="'.$_GET['cheminImage'].'">';

            ?>
        </div>
        <!-- J'ai commencer la partie en php avec la base de donnée mais je vous met ducoup la version de base
            <div class="question">

                <p>
                    <?php 

                        include('include/setting.php');
                        $selectQuestion = $bdd->query('SELECT question1 FROM sondage WHERE cheminImage = "' . $_GET["cheminImage"] . '"');
                        $question = $selectQuestion->fetch();
                        $question = $question['question1'];
                        echo $question;
                        
                    ?>                    
                </p>
            </div>

            <div class="reponse">

                <div>
                    <a href="reponseEnregistrer.php?cheminImage=<?php echo $_GET['cheminImage']; ?>">
                        <p>
                            <?php
                                $selectReponseA = $bdd->query('SELECT reponseA FROM sondage WHERE cheminImage = "' . $_GET["cheminImage"] . '"');
                                $reponse = $selectReponseA->fetch();
                                $reponse = $reponse['reponseA'];
                                echo $reponse;
                            ?>
                        </p>
                    </a>
                </div>

                <div>
                    <a href="reponseEnregistrer.php?cheminImage=<?php echo $_GET['cheminImage']; ?>">
                        <p>
                            <?php
                                $selectReponseB = $bdd->query('SELECT reponseB FROM sondage WHERE cheminImage = "' . $_GET["cheminImage"] . '"');
                                $reponse = $selectReponseB->fetch();
                                $reponse = $reponse['reponseB'];
                                echo $reponse;
                            ?>
                        </p>
                    </a>
                </div>

                <div>
                    <a href="reponseEnregistrer.php?cheminImage=<?php echo $_GET['cheminImage']; ?>">
                        <p>
                            <?php
                                $selectReponseC = $bdd->query('SELECT reponseC FROM sondage WHERE cheminImage = "' . $_GET["cheminImage"] . '"');
                                $reponse = $selectReponseC->fetch();
                                $reponse = $reponse['reponseC'];
                                echo $reponse;
                            ?>
                        </p>
                    </a>
                </div>

                <div>
                    <a href="reponseEnregistrer.php?cheminImage=<?php echo $_GET['cheminImage']; ?>">
                        <p>
                            <?php
                                $selectReponseD = $bdd->query('SELECT reponseD FROM sondage WHERE cheminImage = "' . $_GET["cheminImage"] . '"');
                                $reponse = $selectReponseD->fetch();
                                $reponse = $reponse['reponseD'];
                                echo $reponse;
                            ?>
                        </p>
                    </a>
                </div>

            </div>
        -->

        <div class="question">

            <p>
                Quel sera l'artiste le plus streamer sur la plateforme ?
            </p>
        </div>

        <div class="reponse">

            <div>
                <a href="reponseEnregistrer.php?cheminImage=admin/upload/55png.png">
                    <p>
                        Reponse A
                    </p>
                </a>
            </div>

            <div>
                <a href="reponseEnregistrer.php?cheminImage=admin/upload/55png.png">
                    <p>
                        Reponse B
                    </p>
                </a>
            </div>

            <div>
                <a href="reponseEnregistrer.php?cheminImage=admin/upload/55png.png">
                    <p>
                        Reponse C
                    </p>
                </a>
            </div>

            <div>
                <a href="reponseEnregistrer.php?cheminImage=admin/upload/55png.png">
                    <p>
                        Reponse D
                    </p>
                </a>
            </div>
    </main>

    <?php include('include/footer.php') ?>

</body>

</html>