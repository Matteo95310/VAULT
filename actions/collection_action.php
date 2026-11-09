// Ajouter une œuvre crée une entrée avec le statut planned et une note absente.
// Ajouter à nouveau la même œuvre ne crée pas de doublon.

<?php

session_start();
require '../../includes/db.php';

// Pas connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}

// Vérifier le jeton CSRF
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'])) {http_response_code(403);
    exit('Requête invalide');
}

$pdo = getPDO();

$query = $pdo->prepare("INSERT IGNORE INTO user_medias (user_id, media_id, status, rating) VALUES (?, ?, 'planned', NULL)");
$query->execute([$_SESSION['user_id'], $_POST['media_id']]);

header('Location: ../../index.php');
exit;