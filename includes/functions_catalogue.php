<?php

require 'includes/db.php';



function getCards() {
    $pdo = getPDO();

    $query      = $pdo->query('SELECT * FROM medias ORDER BY title');
    $results    = $query->fetchAll();

    foreach($results as $key => $result) {
        include 'templates/catalogue_card.php';
    }

}