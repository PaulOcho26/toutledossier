<!-- 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire utilisateur</title>
</head>
<body>
    <h1>Formulaire principal</h1>
    <form action="autre-page.php" method="post">
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="film">Film préféré :</label>
        <input type="text" id="film" name="film" required><br><br>

        <label for="color">Couleur favorite (en anglais, ex : red, blue) :</label>
        <input type="text" id="color" name="color" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr>
    <h2>Laisser un commentaire</h2>
    <form action="commentaires.php" method="post">
        <label for="lastname_comment">Nom :</label>
        <input type="text" id="lastname_comment" name="lastname" required><br><br>

        <label for="commentaire">Commentaire :</label>
        <textarea id="commentaire" name="commentaire" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Envoyer le commentaire">
    </form>
</body>
</html> -->


<!-- La photo de profil ==>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="upload-photo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button>Envoyer</button>
    </form>
</body>

</html> -->


<!-- Le pdf ==> -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="upload-pdf.php" method="post" enctype="multipart/form-data">
    <input type="file" name="document" accept="application/pdf" required>
    <button>Envoyer PDF</button>
</form>

</body>

</html>

































