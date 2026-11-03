<?php 

$ventes = [
    ["vendeur" => "Alice",   "montant" => 150],
    ["vendeur" => "Bob",     "montant" => 80],
    ["vendeur" => "Charlie", "montant" => 220],
    ["vendeur" => "David",   "montant" => 45],
    ["vendeur" => "Emma",    "montant" => 310],
    ["vendeur" => "Franck",  "montant" => 95],
];

$totalMontant   = 0;
$venteMax       = [
    "vendeur"   => null,
    "montant"   => 0
];

// 1. Liste des vendeurs
Foreach($ventes as $vente):
    $vendeur = $vente['vendeur'];
    $montant = $vente['montant'];

    // 3. Calculer et afficher le montant total des ventes de la journée.
    $totalMontant = $totalMontant + $montant;

    // 4. Déterminer et afficher le nom du vendeur ayant réalisé la vente la plus importante.
    if($montant > $venteMax['montant']) {
        $venteMax = $vente;
    }

    echo "Vendeur : $vendeur, Vente : $montant<br>";
    echo "<br>";

    // 6. Chaque vendeur reçoit une prime de 10 % sur sa vente si celle-ci dépasse strictement 200 €.
    // Calculer et afficher le montant total des primes à verser.
    $prime = ($montant > 200) 
        ? $montant * 0.1
        : 0;

    echo "Prime : " . $prime . " €";
    echo "<br>";


    // 2. Pour chaque vente, afficher la catégorie correspondante
    $info = match(true) {
        $montant < 100 => "Petite vente",
        ($montant > 100 && $montant <= 200) => "Moyenne vente",
        default   => "Grosse vente"  
    };
    echo $info;
    echo "<br>";

    // 5. Pour chaque vendeur, afficher :
    $objectif = match(true) {
        $montant >= 150 => "Objectif atteint",
        default   => "Objectif non atteint"  
    };
    echo $objectif;


    echo "<br>-----<br>";
endforeach;

// 3. Calculer et afficher le montant total des ventes de la journée.
echo "TOTAL : " . $totalMontant;

echo "<br><br>";
echo "Vente Max : " . $venteMax['vendeur'] . " - " . $venteMax['montant'];
