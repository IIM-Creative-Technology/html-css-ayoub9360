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

        <div class="question">
            <p>
                Votre réponse a bien etais enregistrer !
            </p>

            <a href="sondage.php">
                <input type="button" value="Retour au menu" class="myButton">
            </a>

        </div>


    </main>

    <?php include('include/footer.php') ?>

</body>

</html>