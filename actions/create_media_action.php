<?php
header('Content-Type: application/json; charset=utf-8');
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
    http_response_code(400);
    echo "Erreur : titre invalide";
exit;
}
$annee = (int) $_POST['annee'] ;
$synopsis = $_POST['description'];
$category =  (int) $_POST['type'] ;
$file= $_FILES['visual_image'];

#Images
if(!in_array($file['type'], $accepted_files_types)) {
    http_response_code(400);
    echo "Erreur : image invalide";
exit;
}

if($file['size'] >= 5 * 1024 * 1024) {
    http_response_code(400);
    echo "Erreur : image trop grande";
exit;
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
        "image_path" => "assets/images/carte/".$file['name']
    ]);
    echo json_encode([
    'success' => true,
    'id' => $pdo->lastInsertId(),
    'titre' => $title_film,
    'annee' => $annee,
    'description' => $synopsis,
    'type' => $category,
    'image' => "assets/images/carte/" . $file['name']
]);
exit;
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
