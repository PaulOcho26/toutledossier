<?php
$isSuccessful = false;
// Si le forumlaire à bien soumis un input nommé "picture"
if (isset($_FILES["picture"])) {
        // var_dump($_FILES); // débogage, à activer uniquement si besoin

    // Je récupère le chemin temporaire du fichier uploadé
    $chemin_tmp = $_FILES["picture"]["tmp_name"];

    // A l'aide du chemin temporaire, je déplace le fichier vers le dossier "photos/" avec le nom du fichier uploadé
    $isSuccessful = move_uploaded_file( $chemin_tmp, "photos/".$_FILES["picture"]["name"] );
}

?> 

<?php if($isSuccessful == true) : ?>
    <h1>Upload Success ! </h1>
    <img src="photos/<?php echo htmlspecialchars($_FILES['picture']['name']); ?>" alt="Poto uploadée">
    
<?php else :?>
    
    <h1>Upload Failed ! </h1>
<?php endif; ?>


<a href="/">Retour à la page d'accueil</a>
