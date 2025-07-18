<?php
function safe($str) {
    return htmlspecialchars($str ?? '');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaire reçu</title>
</head>
<body>
    <h1>Commentaire :</h1>
    <p><?php echo nl2br(safe($_POST['commentaire'])); ?></p>
    <p><strong><?php echo strtoupper(safe($_POST['lastname'])); ?></strong></p>
</body>
</html>
