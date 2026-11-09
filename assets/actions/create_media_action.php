<?php
require_once '../includes/db.php';

$accepted_files_types=[
        'image/png',
        'image/jpeg',
        'image/webp'
];

$pdo = getPDO();

// recupere les info du formulaire

# titre
$title_film = $_POST['titre'];
if($title_film === null || strlen($title_film) < 1) {
    header("Location: /admin.php?status=400&error=titre_invalide");
    die();
}
$annee = (int) $_POST['annee'] ;
$synopsis = $_POST['description'];
$category =  (int) $_POST['type'] ;
$file= $_FILES['visual_image'];

#Images
if(!in_array($file['type'], $accepted_files_types)) {
    header("Location: /admin.php?status=400&error=image_invalide");
        die();
}

if($file['size'] >= 5 * 1024 * 1024) {
    header("Location: /admin.php?status=400&error=l'image que vous avez upload est trop grande");
    die();
}

// ajout des des information dans la DATABASE et ajout du fichier dans le dossier
    $path = __DIR__ . "/../assets/images/carte/".$file['name'];
    move_uploaded_file($file['tmp_name'], $path);
    $stmt = $pdo->prepare("INSERT INTO medias (title, release_year, category_id ,description, image_path) VALUES (:titre, :annee, :category, :description ,:image_path)");
    $stmt->execute([
        "titre" => $title_film,
        "annee" => $annee,
        "description" => $synopsis,
        "category" => $category,
        "image_path" => "/assets/images/carte/".$file['name']
    ]);
    echo "Ajouté ! Nom: $title_film, Annee: $annee, description: $synopsis";
 ?>

<!--
<?php
/*/************************************************* MODIFICATION DUN MEDIA ***************************************/
/*require_once '../includes/db.php';
$pdo = getPDO();

$id  = (int)($_POST['id'] );
$titre = $_POST['titre'] ;
$annee = (int)($_POST['annee'] );


if ($id && $titre && $annee ) {
    $stmt = $pdo->prepare("UPDATE medias SET title = ?, annee = ? WHERE id = ?");
    $stmt->execute([$titre, $annee, $id]);
    echo "Modifié ! ID: $id → $titre ($annee ans)\n";
} else {
    echo "Données manquantes\n";
}*/
?>
-->
