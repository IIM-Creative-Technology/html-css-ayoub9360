<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur</title>
</head>

<body>
    <main>

        <h1>
            Espace Administrateur
        </h1>

        <div class="gestionSondage">
            <h2>Sondage</h2>
            <form action="adminUpload.php" method="post" enctype="multipart/form-data">
                <p>Nom</p>
                <input type="text" name="nomSondage">
                <p>Expiration sondage</p>
                <input type="date" name="expirationSondage">
                <p>chemin image</p>
                <input class="bouton" type="file" name="uploadedFile">
                <p>Question 1</p>
                <input type="text" name="question1">
                <p>reponseA</p>
                <input type="text" name="reponseA">
                <p>reponseB</p>
                <input type="text" name="reponseB">
                <p>reponseC</p>
                <input type="text" name="reponseC">
                <p>reponseD</p>
                <input type="text" name="reponseD">

                <input class="bouton" type="submit" name="submit">
            </form>
        </div>

    </main>
</body>

</html>