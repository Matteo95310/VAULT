<?php

session_start();

require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/templates/xp_badges.php';

$pdo = getPDO();

// Récupérer l'identifiant de l'utilisateur connecté
$userId = $_SESSION['user_id'] ?? null;

if ($userId === null) {
    header('Location: login.php');
    exit;
}

if (empty($_SESSION['csrf_token'])) { // si on a pas le jeton CSRF, on le fabrique.
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // la fabrication et on le range dans la session
}

require 'includes/db.php';
$pdo = getPDO();

// user_id vient de la session : on ne voit que SA collection
$query = $pdo->prepare("SELECT media_id, status, rating FROM user_medias WHERE user_id = ?");
$query->execute([$_SESSION['user_id']]);
$collection = $query->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profil.css">

</head>

<body>
    <?php require 'includes/templates/header.php'; ?>
    
<div class="main-padding">
</div>


<section id="top_profil">

    <div class=" light light_1"></div>
    <div class="light light_2"></div>
    <div class="profil_container">
        <div class="photo_profil_container">
            <img class="photo_profil" src="assets/images/Photoprofil.jpg" alt="Photo de profil">
            <p class="status_connected">
                •ACTIF
            </p>

        </div>


        <div class="information_container">
            <div class="first_line">
                <p class="bagde">
                    ARCHIVISTE AGREE
                </p>
                <p class="description">
                    // REF #VX-8894
                </p>
            </div>
            <h2>
                Alex Vance
            </h2>
            <div class="third_line">
                <p class="pseudo">
                    @alexvance
                </p>
                <p class="point">
                    •
                </p>
                <p class="inscription">
                    Inscrit en Octobre 2026
                </p>


            </div>
            <div class="fourth_line">
                <div class="badge">
                    <img src="assets/images/rang.svg" alt="icône rang">
                    <p>
                        Rang : Rang II Synth-Pionnier
                    </p>
                </div>

                <div class="badge">
                    <img src="assets/images/checkmarque.svg" alt="icône check">
                    <p>
                        Compte Développeur Bac+1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="xp_level">
        <div class="total_xp_level">
            <div class="top_left_container">
                <div class="logo_flash">
                    <img src="assets/images/flashicon.svg" alt="flash icône">
                </div>
                <div class="experience_container">
                    <p class="experience_total">
                        EXPÉRIENCE TOTALE
                    </p>
                    <p class="xp_count">
                        <?php echo (int) $xpData['total_xp']; ?>
                        <span class="color_xp_points"> XP POINTS </span>
                    </p>

                </div>

            </div>
            <p class="palier">
                PALIER ACTUEL <br>
                <span class="type_script"> 
                    <?php echo (int) $xpData['level']; ?>
                </span>
            </p>

        </div>

        <div class="progress_level">
            <div class="total_progress">

                <p class="progress_where">
                    Progression vers le <span> Niveau 3 </span>
                </p>
                <p class="percentage_xp">
                    35 / 100 XP (35%)
                </p>
            </div>
            <div class="barre_black">
                <div class="barre_fade_color"></div>

            </div>

            <div class="progression_text">

                <p>
                    Niv. 2 (100 XP cumulés)
                </p>
                <p>
                    Prochain palier : 200 XP
                </p>
            </div>
        </div>

        <div class="bareme_gain">
            <div class="logo_info_text">

                <img src="assets/images/Iconinfo.svg" alt="Icon info">
                <p>
                    BAREME DES GAINS D'EXPÉRIENCE (VAULT PROTOCOLE)
                </p>

            </div>
            <div class="ajout_xp">
                <div class="plus_xp">
                    <p>
                        <span> +10 XP </span> Ajout collection
                    </p>
                </div>
                <div class="plus_xp">
                    <p>
                        <span> +20 XP </span> Statut "Terminé"
                    </p>

                </div>
                <div class="plus_xp">
                    <p>
                        <span> +5 XP </span> Note valide (★)
                    </p>

                </div>

            </div>


        </div>
    </div>


    <div class="badges">
        <div class="text_registre_badge">

        </div>
        <div class="etiquette_bagdes">

            <div class="badge_color">

            </div>
            <div class="badge_black">

            </div>
        </div>


    </div>

</section>
<section id="middle_badges">
    <div class="text_register">

        <p class="register_p_container">
            REGISTRE DE DISTINCTION
        </p>
        <div class="second_line">
            <p class="titre">
                Badges Archivistiques Débloqués
            </p>
            <p class="completion">
                Complétion trophées : <span>2 sur 4 actifs</span>
            </p>
        </div>

    </div>
    <div class="badges_container">
        <div class="badges_colors_p">
            <div class="logo_colors_p">
                <div class="container_logo">
                    <img src="assets/images/IconDiamand.svg" alt="icon diamand">
                </div>
                <div class="container_obtenu">
                    <img src="assets/images/Iconvalidation.svg" alt="icon validation">
                    <p>
                        OBTENU
                    </p>
                </div>
            </div>
            <div class="collectionneur">
                <p class="text_collectionneur">
                    Collectionneur
                </p>

                <p>
                    Posséder au moins 5 œuvres dans sa <br/>
                    collection personnelle.
                </p>


            </div>
            <div class="acquisition_p">
                <p class="condition_texte">
                    Condition <br/>
                    d'acquisition
                </p>
                <p>
                    5 / 5 enregistrées <br/>
                    (100%)
                </p>

            </div>
        </div>
        <div class="badges_colors_o">
            <div class="logo_colors_o">
                <div class="container_logo">
                    <img src="assets/images/Iconclapefilm.svg" alt="icon clape film">
                </div>
                <div class="container_obtenu">
                    <img src="assets/images/Iconvalidationorange.svg" alt="icon validation">
                    <p>
                        OBTENU
                    </p>
                </div>
            </div>
            <div class="collectionneur">
                <p class="text_collectionneur">
                    Cinéphile
                </p>

                <p>
                    Avoir terminé le visionnage d'au moins 3 <br/>
                    films du catalogue.
                </p>


            </div>
            <div class="acquisition_o">
                <p class="condition_texte">
                    Condition <br/>
                    d'acquisition
                </p>
                <p>
                    3 / 3 visionnés <br/>
                    (100%)
                </p>

            </div>

        </div>

        <div class="badges_black_white_g">
            <div class="logo_mannette">
                <div class="container_logo">
                    <img src="assets/images/Iconmannette.svg" alt="icon mannette">
                </div>
                <div class="container_verrouillé">
                    <img src="assets/images/Iconverrouillé.svg" alt="icon verrouillé">
                    <p>
                        VERROUILLÉ
                    </p>
                </div>
            </div>
            <div class="Gamer">
                <p class="text_gamer">
                    Gamer
                </p>

                <p>
                    Avoir terminé au moins 3 jeux vidéo <br/>
                    répertoriés.
                </p>
            </div>
            <div class="progression">
                <p class="progression_texte">
                    Progression
                </p>
                <p>
                    0 / 3 jeux terminés
                </p>


            </div>
            <div class="barre_black_g"></div>
        </div>
        <div class="badges_black_white_e">
            <div class="logo_explo">
                <div class="container_logo_e">
                    <img src="assets/images/Iconexplo.svg" alt="icon explorateur">
                </div>
                <div class="container_verrouillé">
                    <img src="assets/images/Iconverrouillé.svg" alt="icon verrouillé">
                    <p>
                        VERROUILLÉ
                    </p>
                </div>
            </div>
            <div class="explorateur">
                <p class="text_explorateur">
                    Explorateur
                </p>

                <p>
                    Enregistrer un score d'au moins 15 au mini-
                    <br/>jeu interactif.
                </p>
            </div>
            <div class="best_score">
                <p class="best_score_texte">
                    Meilleur score
                </p>
                <p>
                    0 / 15 pts
                </p>


            </div>
            <div class="barre_black_e"></div>
        </div>


    </div>
</section>
<section id="collection_personnelle">
    <div class="container_top">

        <div class="container_text_collection">


            <div class="titre_collection">
                <div class="five_oeuvres">
                    <p> Collection Personnelle </p>

                    <div class="cinq_oeuvres">
                        <p> 5 ŒUVRES </p>
                    </div>
                </div>
                <div class="text_equilibre">
                    <p> Équilibre exact du scénario de validation : 3 Films terminés notés + 2 Séries ajoutées notées =
                        <br/> 135 XP.
                    </p>
                </div>
            </div>
        </div>

        <div class="container_magnette">

            <div class="three_magnette">
                <div class="magnette_film">
                    <img src="assets/images/Iconfilm.svg" alt="icon film">
                    <p> 3 Films terminés </p>
                </div>

                <div class="magnette_series">
                    <img src="assets/images/Iconseries.svg" alt="icon series">
                    <p> 2 Séries en liste </p>
                </div>

                <div class="magnette_moyenne">
                    <img src="assets/images/Iconmoyenne.svg" alt="icon moyenne">
                    <p> Moyenne : 4.6 / 5 </p>
                </div>
            </div>

            <div class="one_magnette_p">
                <div class="magnette_ajouter">
                    <img src="assets/images/Iconajout.svg" alt="icon ajout">
                    <p> Ajouter une œuvre </p>

                </div>
            </div>

        </div>
    </div>
    <div class="real_catalogue">
        <div class="titre_collonne">
            <div class="media">
                <p> MÉDIA </p>
            </div>

            <div class="titre_category">
                <p> TITRE & CATÉGORIE </p>
            </div>

            <div class="status">
                <p> STATUT </p>
            </div>

            <div class="note_attribut">
                <p> NOTE ATTRIBUÉE </p>
            </div>

            <div class="valeur_xp">
                <p> VALEUR XP </p>
            </div>

            <div class="actions">
                <p> ACTIONS </p>
            </div>
        </div>

        <div class="first_media">
            <div class="fisrt_collonne">
                <img src="assets/images/photo1.svg" alt="photo1">
            </div>

            <div class="second_collonne">
                <div class="titre_film">
                    <p> Blade Runner 2049 </p>
                </div>

                <div class="c_a_p">
                    <div class="film">
                        <p> FILM </p>
                    </div>
                    <div class="annee_producteur">
                        <p> 2017 • Denis Villeneuve </p>
                    </div>
                </div>

            </div>

            <div class="third_collonne">
                <div class="container_terminer">
                    <img src="assets/images/pointrose.svg" alt="point rose">
                    <p> Terminé </p>
                </div>
            </div>

            <div class="fourth_collonne">
                <div class="stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <p> 5.0 </p>
                </div>

            </div>

            <div class="five_collonne">
                <div class="xp">
                    <p> +35 XP </p>
                    <img src="assets/images/Iconeclairexp.svg" alt="icon eclaire xp">
                </div>

            </div>

            <div class="six_collonne">
                <div class="edit">
                    <img src="assets/images/Iconcrayon.svg" alt="icon crayon">
                    <img src="assets/images/Iconetoileedit.svg" alt="icon etoile edit">
                    <img src="assets/images/Iconpoubelle.svg" alt="icon poubelle">

                </div>

            </div>


        </div>

        <div class="second_media">
            <div class="fisrt_collonne">
                <img src="assets/images/photo2.svg" alt="photo2">
            </div>

            <div class="second_collonne">
                <div class="titre_film">
                    <p> Dune : Deuxième Partie </p>
                </div>

                <div class="c_a_p">
                    <div class="film">
                        <p> FILM </p>
                    </div>
                    <div class="annee_producteur">
                        <p> 2024 • Denis Villeneuve </p>
                    </div>
                </div>

            </div>

            <div class="third_collonne">
                <div class="container_terminer">
                    <img src="assets/images/pointrose.svg" alt="point rose">
                    <p> Terminé </p>
                </div>
            </div>

            <div class="fourth_collonne">
                <div class="stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconetoilegris.svg" alt="icun etoile gris">
                    <p> 4.0 </p>
                </div>

            </div>

            <div class="five_collonne">
                <div class="xp">
                    <p> +35 XP </p>
                    <img src="assets/images/Iconeclairexp.svg" alt="icon eclaire xp">
                </div>

            </div>

            <div class="six_collonne">
                <div class="edit">
                    <img src="assets/images/Iconcrayon.svg" alt="icon crayon">
                    <img src="assets/images/Iconetoileedit.svg" alt="icon etoile edit">
                    <img src="assets/images/Iconpoubelle.svg" alt="icon poubelle">

                </div>

            </div>


        </div>

        <div class="third_media">
            <div class="fisrt_collonne">
                <img src="assets/images/photo3.svg" alt="photo3">
            </div>

            <div class="second_collonne">
                <div class="titre_film">
                    <p> Interstellar </p>
                </div>

                <div class="c_a_p">
                    <div class="film">
                        <p> FILM </p>
                    </div>
                    <div class="annee_producteur">
                        <p> 2014 • Christopher Nolan </p>
                    </div>
                </div>

            </div>

            <div class="third_collonne">
                <div class="container_terminer">
                    <img src="assets/images/pointrose.svg" alt="point rose">
                    <p> Terminé </p>
                </div>
            </div>

            <div class="fourth_collonne">
                <div class="stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <p> 5.0 </p>
                </div>

            </div>

            <div class="five_collonne">
                <div class="xp">
                    <p> +35 XP </p>
                    <img src="assets/images/Iconeclairexp.svg" alt="icon eclaire xp">
                </div>

            </div>

            <div class="six_collonne">
                <div class="edit">
                    <img src="assets/images/Iconcrayon.svg" alt="icon crayon">
                    <img src="assets/images/Iconetoileedit.svg" alt="icon etoile edit">
                    <img src="assets/images/Iconpoubelle.svg" alt="icon poubelle">

                </div>

            </div>


        </div>

        <div class="fourth_media">
            <div class="fisrt_collonne">
                <img src="assets/images/photo4.svg" alt="photo4">
            </div>

            <div class="second_collonne">
                <div class="titre_film">
                    <p> Severance </p>
                </div>

                <div class="c_a_p">
                    <div class="film">
                        <p> SÉRIE </p>
                    </div>
                    <div class="annee_producteur">
                        <p> 2022 • Dan Erickson </p>
                    </div>
                </div>

            </div>

            <div class="third_collonne">
                <div class="container_terminer">
                    <img src="assets/images/pointrose.svg" alt="point rose">
                    <p> À découvrir </p>
                </div>
            </div>

            <div class="fourth_collonne">
                <div class="stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconetoilegris.svg" alt="icun etoile gris">
                    <p> 4.0 </p>
                </div>

            </div>

            <div class="five_collonne">
                <div class="xp">
                    <p> +15 XP </p>
                    <img src="assets/images/Iconeclairexp.svg" alt="icon eclaire xp">
                </div>

            </div>

            <div class="six_collonne">
                <div class="edit">
                    <img src="assets/images/Iconcrayon.svg" alt="icon crayon">
                    <img src="assets/images/Iconetoileedit.svg" alt="icon etoile edit">
                    <img src="assets/images/Iconpoubelle.svg" alt="icon poubelle">

                </div>

            </div>


        </div>

        <div class="five_media">
            <div class="fisrt_collonne">
                <img src="assets/images/photo5.svg" alt="photo5">
            </div>

            <div class="second_collonne">
                <div class="titre_film">
                    <p> Arcane </p>
                </div>

                <div class="c_a_p">
                    <div class="film">
                        <p> SÉRIE </p>
                    </div>
                    <div class="annee_producteur">
                        <p> 2021 • Fortiche / Riot </p>
                    </div>
                </div>

            </div>

            <div class="third_collonne">
                <div class="container_terminer">
                    <img src="assets/images/pointrose.svg" alt="point rose">
                    <p> À découvrir </p>
                </div>
            </div>

            <div class="fourth_collonne">
                <div class="stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <img src="assets/images/Iconstars.svg" alt="icon stars">
                    <p> 5.0 </p>
                </div>

            </div>

            <div class="five_collonne">
                <div class="xp">
                    <p> +15 XP </p>
                    <img src="assets/images/Iconeclairexp.svg" alt="icon eclaire xp">
                </div>

            </div>

            <div class="six_collonne">
                <div class="edit">
                    <img src="assets/images/Iconcrayon.svg" alt="icon crayon">
                    <img src="assets/images/Iconetoileedit.svg" alt="icon etoile edit">
                    <img src="assets/images/Iconpoubelle.svg" alt="icon poubelle">

                </div>

            </div>


        </div>

    </div>

    <div class="bilan">
        <div class="container_left">
            <img src="assets/images/Iconbilan.svg" alt="icon bilan">
            <p> Bilan arithmétique : (35 × 3 films) + (15 × 2 séries) = <span>135 XP validés</span> </p>

        </div>

        <div class="container_right">
            <div class="exportation">
                <p> Exportation données : </p>
            </div>

            <div class="container_json">
                <p> JSON </p>
            </div>

            <div class="container_csv">
                <p> CSV </p>
            </div>



        </div>

    </div>


</section>
<footer class="main-padding">
    <div class="left">
        <div class="footer_arrangment">
            <div class="footer_title">
                <span class="footer_logo">VAULT</span>
                <span>//Plateforme Pop-Culture</span>
            </div>
            <div class="footer_subtitle">
                <span>Projet Web Bac+1 - 4 Sprints - Architecture native HTML/CSS/PHP/JS</span>
            </div>
        </div>
    </div>
    <div class="right">
        <nav>
            <ul>
                <li>
                    <a href="#">Catalogue</a>
                </li>
                <li>
                    <a href="#">Progression</a>
                </li>
                <li>
                    <a href="#">Audit & Sprints</a>
                </li>
            </ul>
        </nav>
        <div class="version">
            <span>v1.4.0-stable</span>
        </div>
    </div>
</footer>
</body>


