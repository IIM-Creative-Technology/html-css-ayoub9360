<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/sondage.css">
    <link rel="stylesheet" href="css/classement.css">
</head>

<body>

    <?php include('include/nav.php') ?>


    <main>

        <h1 id="classement">CLASSEMENT</h1>
    
        <div class="classement">

            <div class="deuxieme">
                <?php echo '<img src="'.$_GET['cheminImage'].'">'; ?>
                <h1>2ème</h1>
                <p>Margaux M.</p>
            </div>
            
            <div class="premier">
                <?php echo '<img src="'.$_GET['cheminImage'].'">'; ?>
                <h1>1er</h1>
                <p>Ayoub E.</p>
            </div>

            <div class="troisieme">
                <?php echo '<img src="'.$_GET['cheminImage'].'">'; ?>
                <h1>3ème</h1>
                <p>Samy M.</p>
            </div>

        </div>

    </main>

    <?php include('include/footer.php') ?>

</body>

</html>