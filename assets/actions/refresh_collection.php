// L’utilisateur peut modifier le statut et ajouter, changer ou retirer sa note.
// Après un enregistrement réussi, une redirection évite de rejouer l’opération lors d’un rafraîchissement de page

<?php
session_start();

require '../../includes/db.php';


// Vérification du jeton CSRF
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'])) {http_response_code(403);
exit('Requête invalide');
}

$pdo = getPDO();

$rating = $_POST['rating'] === '' ? null : $_POST['rating'];

$query = $pdo->prepare("UPDATE user_medias SET status = ?, rating = ? WHERE user_id = ? AND media_id = ?");
$query->execute([$_POST['status'], $rating, $_SESSION['user_id'], $_POST['media_id']]);
$result = $query->fetch();


header('Location: ../../profile.php');
exit;
