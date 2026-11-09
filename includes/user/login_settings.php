<?php

require_once '../db.php';

$pdo = getPDO();

var_dump($_POST);



/*****************************connexion****************************/

//recup des données du formulaire
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//hashage du mot de passe envoyé
$password_hash = hash("sha256", $password);

//verification si l'email est dans la base de donnée
$query = $pdo->prepare("SELECT u.email, u.password_hash FROM users AS u WHERE u.email = :email");
$query->execute(['email' => $email]);
$result = $query->fetch();

//verfication des normes du pseudonyme
if($email !== $result['email']) {
    header('Location: ../../login.php?error=aucun email n\'est associé');
    return;
}
//verification du mot de passe entré
elseif($password_hash != $result['password_hash']) {
    header('Location: ../../login.php?error=Mot de passe ou identifiant incorrect');
    return;
}
else {
//ouverture de la session et redirection vers la page d'accueil
    echo "connexion réussie";
    session_id($email);
    session_start();
    $_SESSION['utilisateur'] = $email;
    if (session_status() == PHP_SESSION_ACTIVE) {
        echo 'Une session est active.';
        header('Location: ../../index.php');
    } else {
        echo 'Aucune session active.';
    }
   // 
    return;
}