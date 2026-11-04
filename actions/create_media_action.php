<?php
require_once '../includes/db.php';
$pdo = getPDO();

// recupere les info du formulaire

$title_film = $_POST['titre'] ?? '';
$annee = ((int) $_POST['annee'] ?? 0);
$synopsis = $_POST['description'] ?? '';

// ajout des des information dans la DATABASE

if ($title_film && $annee && $synopsis > 0) {
    $stmt = $pdo->prepare("INSERT INTO medias (title, release_year, category_id ,description) VALUES (:titre, :annee, 1, :description )");
    $stmt->execute([
        "titre"=> $title_film,
        "annee"=> $annee,
        "description"=> $synopsis
        ]);
    echo "Ajouté ! Nom: $title_film, Annee: $annee, description: $synopsis";
}


else {
    echo "Données manquantes\n";
}?>



<?php
/************************************************* MODIFICATION DUN MEDIA ***************************************/
require_once '../includes/db.php';
$pdo = getPDO();

$id  = (int)($_POST['id'] ?? 0);
$titre = $_POST['titre'] ?? '';
$annee = (int)($_POST['annee'] ?? 0);


if ($id > 0 && $titre && $annee > 0) {
    $stmt = $pdo->prepare("UPDATE users SET nom = ?, age = ? WHERE id = ?");
    $stmt->execute([$titre, $annee, $id]);
    echo "Modifié ! ID: $id → $titre ($annee ans)\n";
} else {
    echo "Données manquantes\n";
}