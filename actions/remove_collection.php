// Retirer une œuvre de sa collection laisse cette œuvre disponible dans le catalogue commun.


<?php
session_start();

require '../../includes/db.php';


// Vérification du jeton CSRF
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'])) {http_response_code(403);
exit('Requête invalide');
}

$pdo = getPDO();

$query = $pdo->prepare("DELETE FROM user_medias WHERE user_id = ? AND media_id = ?");
$query->execute([$_SESSION['user_id'], $_POST['media_id']]);
$result = $query->fetch();


header('Location: ../../profile.php');
exit;