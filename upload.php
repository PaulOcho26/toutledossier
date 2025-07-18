$chemin_tmp = $_FILES["la-photo"]["tmp_name"];
$nom_fichier = $_FILES["la-photo"]["name"];
move_uploaded_file($chemin_tmp, $nom_fichier);