<?php

require_once '../db.php';

$pdo = getPDO();

var_dump($_POST);



/*****************************Inscription****************************/

//recup des données du formulaire
$nickname = $_POST['nickname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmation = $_POST['password_confirmation'] ?? '';

//hashage du mot de passe envoyé
$password_hash = hash("sha256", $password);
$confirmation_hash = hash("sha256", $confirmation);

//verification si l'email est dans la base de donnée
$query = $pdo->prepare("SELECT * FROM users AS u WHERE u.email = :email");
$query->execute(['email' => $email]);

$result = $query->fetch();


//verfication des normes du pseudonyme
if(strlen($nickname) < 3 OR strlen($nickname) > 30 ) {
    header('Location: ../../register.php');
    message: 'erreur : Le pseudonyme est invalide.';

    return;
} 
//verfication si l'email est est utilisé ou non
elseif ($result != NULL ) {
    header('Location: ../../register.php?error=Un compte existe déjà avec cet e-mail');
    return;
}
//verification du mot de passe entré
elseif($password_hash != $confirmation_hash) {
    header('Location: ../../register.php?error=Mot de passe ou identifiant incorrect');
    return;
}
else {
//insertion des informations dans la base de donnée
    $query = $pdo->prepare("INSERT INTO users(username, email, password_hash, role, best_score) VALUES (:username, :email, :password_hash, :role, 0)");
    $query->execute([
        'username' => $nickname,
        'email' => $email,
        'password_hash' => $password_hash,
        'role' => 'client'
    ]);
//ouverture de la session et redirection vers la page d'accueil
    echo "inscription réussie";
    session_id($email);
    session_start();
    header('Location: ../../index.php');
    return;
}

/*****************************Déconnexion*de*la*session*****************************/





