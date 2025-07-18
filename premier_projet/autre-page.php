<?php
// Protection : échappement des entrées utilisateur
function safe($str) {
    return htmlspecialchars($str ?? '');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Données reçues</title>
</head>
<body>
    <h1>Résultat du var_dump :</h1>
    <pre><?php var_dump($_POST); ?></pre>

    <h2>Vous avez saisi :</h2>
    <ul>
        <li>Prénom : <?php echo safe($_POST['name']); ?></li>
        <li>Nom : <?php echo safe($_POST['lastname']); ?></li>
        <li>Âge : <?php echo safe($_POST['age']); ?></li>
        <li>Film préféré : <?php echo safe($_POST['film']); ?></li>
        <li>
            Couleur favorite :
            <span style="color: <?php echo safe($_POST['color']); ?>">
                <?php echo safe($_POST['color']); ?>
            </span>
        </li>
        <li>
            Ville : <?php echo safe($_POST['ville']); ?>
        </li>
    </ul>
    <p>
        <?php
        if (!empty($_POST['ville'])) {
            echo 'Vous venez de ' . safe($_POST['ville']) . ', c\'est génial !';
        }
        ?>
    </p>
</body>
</html>
