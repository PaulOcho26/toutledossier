<?php
$isSuccessful = false;
if (isset($_FILES["document"])) {
    $chemin_tmp = $_FILES["document"]["tmp_name"];
    // Générer le nom selon la date et l’heure
    $nouveau_nom = date("Y-m-d_H-i-s") . '.pdf';
    $isSuccessful = move_uploaded_file($chemin_tmp, "docs/" . $nouveau_nom);
}
?>

<?php if($isSuccessful == true) : ?>
    <h1>PDF Upload Success !</h1>
    <p>Nouveau nom : <?= htmlspecialchars($nouveau_nom) ?></p>
<?php else : ?>
    <h1>Upload Failed !</h1>
<?php endif; ?>
<a href="/">Retour à la page d'accueil</a>
