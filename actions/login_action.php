<!-------
Une connexion réussie crée une session et renouvelle son identifiant.
Une connexion refusée affiche un message générique, sans révéler si l’adresse email existe.
La déconnexion invalide la session ; le profil devient inaccessible sans nouvelle connexion.
Un visiteur non connecté peut consulter le catalogue, mais toute action personnelle lui demande de se connecter.
-->

<?php

require '../includes/db.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordHash = hash('sha256', $password);

$pdo = getPDO();
$query = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$query->execute([':email' => $email]);
$result = $query->fetch();

if(empty($result)) {
    echo "Le compte existe pas";
    return;
}

var_dump($result);
die;

if(empty($password_hash === $password_hash)) {

    echo "Mot de passe correct";
} else{
    echo "Mot de passe incorrect";
}

var_dump($password_hash);
die;


$session = match(true) {
    $password_hash  => "Nouvelle session",
    $password_hash => index.php
    default > => "Echec de connexion"
};
echo $session; 





echo "=== AJOUTER UN UTILISATEUR ===\n\n"; 
 
    $email= $_GET['email'] ?? ''; 
    $password = (int) $_GET['password'] ?? '';

   
// 1. Récupérer la ligne user en BDD à partir de l'adresse email.
// 2. Vérifier si une ligne est retourné, sinon le mail existe pas.
// 3. Vérifier si le hash du mot de passe en BDD est le meme que le hash du formulaire.
// 4. Si oui, on créé une session et on redirige sur index, si non, echec de connexion.





// Une connexion réussie crée une session et renouvelle son identifiant.
// Une connexion refusée affiche un message générique, sans révéler si l’adresse email existe.

/*
$connexion = [
    ["admin" => "Bob", "email" => "Bob@mail.com", "password_hash" => "$2a$12$/21zDwADvlRjTeM9tsmL9.j.yRWs0LqySqE21Ey89SQP1FLMM1Vsa"],
    ["admin" => "Bakary", "email" => "bakary@bofzeb.fr", "password_hash" => "$2a$12$D4GArDDc.C32x0Swp1x.2.Wky.XA0GbWoK/uS4LYvgn2YRaxci8/O"],
    ["admin" => "Patrick", "email" => "patrick@zejkguzej.com", "password_hash" => "$2a$12$KzUIyvMx3MEpaeesz5Y3Uu7.9MxgOA0ZGWuiCQk6lwhmjHjxYKvVe"],
];



 $connexion = match (true) { 
        $admin < 'email', 'password_hash' => "Connexion réussis", 
        default   => "Accès refuser" 
    }; 
    echo $connexion;

    // GET 
    $username = $_GET['username'] ?? ''; 
    $password_hash   = $_GET['password_hash'] ?? ''; 
 
    if(empty($username) || empty($password_hash)) { 
        echo "Veuillez remplir tous les champs."; 
    } else { 
        $connexion = ($password_hash) ? "1er hash" : "2eme hash"; 
        echo "Bonjour $username, vous êtes $connexion."; 
    }


// La déconnexion invalide la session ; le profil devient inaccessible sans nouvelle connexion.

$deconnexion = match (true) { 
        $admin <  => "Déconnexion réussis", 
        default   => "Page non deconnecter" 
    }; 
    echo $deconnexion;
    */