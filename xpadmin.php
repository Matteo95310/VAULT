<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/xp.css">


</head>

<body class="admin-page">
    
    <header class=" left-menu main-padding">
        <!-- Left part -->
        <div class="left">
    
            <nav>
                <ul> 
                    <li>
                        <a class="mode" >Mode Administrateur //</a>
                    </li>

                    <li>
                        <a class="console">Console Système </a> 
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Right part -->
        <div class="right">
            <div class="exp_lvl">
                <img src="assets/images/EXP bar.svg" alt="compteur d'expérience">
                <a id="level" href="#">2</a>
                <span>
                    •
                </span>

                <a id="xp" href="#">135</a>
            </div>

            <div class="profile">
                <img src="assets/images/Profile_pic.jpg" alt="compteur d'expérience">
            </div>

        </div>
    </header>


<!------------------Menu------------------------->
<aside> 
            <div class="logo">
                <img src="assets/images/Logo Vault.jpg" alt="Logo" />
                <span>VAULT </span>
                <span> • </span>
            </div> 
            
            <p class="titre"> Supervison & Catalogue </p>
        <nav>  
            <a href="#"> 
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 4.5V0H13.5V4.5H7.5V4.5M0 7.5V0H6V7.5H0V7.5M7.5 13.5V6H13.5V13.5H7.5V13.5M0 13.5V9H6V13.5H0V13.5M1.5 6H4.5V1.5H1.5V6V6M9 12H12V7.5H9V12V12M9 3H12V1.5H9V3V3M1.5 12H4.5V10.5H1.5V12V12M4.5 6V6V6V6V6V6M9 3V3V3V3V3V3M9 7.5V7.5V7.5V7.5V7.5V7.5M4.5 10.5V10.5V10.5V10.5V10.5V10.5" fill="#CBC3D7"/>
                </svg> Console Générale </a>

            <a href="#">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 0L3 3H5.25L3.75 0H5.25L6.75 3H9L7.5 0H9L10.5 3H12.75L11.25 0H13.5C13.9125 0 14.2656 0.146875 14.5594 0.440625C14.8531 0.734375 15 1.0875 15 1.5V10.5C15 10.9125 14.8531 11.2656 14.5594 11.5594C14.2656 11.8531 13.9125 12 13.5 12H1.5C1.0875 12 0.734375 11.8531 0.440625 11.5594C0.146875 11.2656 0 10.9125 0 10.5V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0V0V0M1.5 4.5V10.5V10.5V10.5H13.5V10.5V10.5V4.5H1.5V4.5M1.5 4.5V4.5V10.5V10.5V10.5V10.5V10.5V10.5V4.5V4.5" fill="#CBC3D7"/>
                </svg> Gestion Œuvres </a>

            <a href="#" class=violet> 
                <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 12V9.9C0 9.475 0.109375 9.08437 0.328125 8.72812C0.546875 8.37187 0.8375 8.1 1.2 7.9125C1.975 7.525 2.7625 7.23438 3.5625 7.04063C4.3625 6.84688 5.175 6.75 6 6.75C6.825 6.75 7.6375 6.84688 8.4375 7.04063C9.2375 7.23438 10.025 7.525 10.8 7.9125C11.1625 8.1 11.4531 8.37187 11.6719 8.72812C11.8906 9.08437 12 9.475 12 9.9V12H0V12M13.5 12V9.75C13.5 9.2 13.3469 8.67188 13.0406 8.16562C12.7344 7.65937 12.3 7.225 11.7375 6.8625C12.375 6.9375 12.975 7.06562 13.5375 7.24687C14.1 7.42812 14.625 7.65 15.1125 7.9125C15.5625 8.1625 15.9062 8.44063 16.1437 8.74687C16.3812 9.05312 16.5 9.3875 16.5 9.75V12H13.5V12M6 6C5.175 6 4.46875 5.70625 3.88125 5.11875C3.29375 4.53125 3 3.825 3 3C3 2.175 3.29375 1.46875 3.88125 0.88125C4.46875 0.29375 5.175 0 6 0C6.825 0 7.53125 0.29375 8.11875 0.88125C8.70625 1.46875 9 2.175 9 3C9 3.825 8.70625 4.53125 8.11875 5.11875C7.53125 5.70625 6.825 6 6 6V6M13.5 3C13.5 3.825 13.2062 4.53125 12.6187 5.11875C12.0312 5.70625 11.325 6 10.5 6C10.3625 6 10.1875 5.98438 9.975 5.95312C9.7625 5.92188 9.5875 5.8875 9.45 5.85C9.7875 5.45 10.0469 5.00625 10.2281 4.51875C10.4094 4.03125 10.5 3.525 10.5 3C10.5 2.475 10.4094 1.96875 10.2281 1.48125C10.0469 0.99375 9.7875 0.55 9.45 0.15C9.625 0.0875 9.8 0.046875 9.975 0.028125C10.15 0.009375 10.325 0 10.5 0C11.325 0 12.0312 0.29375 12.6187 0.88125C13.2062 1.46875 13.5 2.175 13.5 3V3M1.5 10.5H10.5V9.9C10.5 9.7625 10.4656 9.6375 10.3969 9.525C10.3281 9.4125 10.2375 9.325 10.125 9.2625C9.45 8.925 8.76875 8.67188 8.08125 8.50313C7.39375 8.33438 6.7 8.25 6 8.25C5.3 8.25 4.60625 8.33438 3.91875 8.50313C3.23125 8.67188 2.55 8.925 1.875 9.2625C1.7625 9.325 1.67188 9.4125 1.60312 9.525C1.53437 9.6375 1.5 9.7625 1.5 9.9V10.5V10.5M6 4.5C6.4125 4.5 6.76562 4.35312 7.05937 4.05937C7.35312 3.76562 7.5 3.4125 7.5 3C7.5 2.5875 7.35312 2.23438 7.05937 1.94062C6.76562 1.64687 6.4125 1.5 6 1.5C5.5875 1.5 5.23438 1.64687 4.94063 1.94062C4.64688 2.23438 4.5 2.5875 4.5 3C4.5 3.4125 4.64688 3.76562 4.94063 4.05937C5.23438 4.35312 5.5875 4.5 6 4.5V4.5M6 10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5M6 3V3V3V3V3V3V3V3V3V3" fill="#D0BCFF"/>
                </svg> Compte & XP </a>
        </nav>
    </div>
    <footer>
        <div>
            <div class="activity">
                <span>SYSTÈME ACTIF</span>
                <span >
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="8" height="8" rx="4" fill="#FFB95F"/></svg>
                </span>
            </div>

             <div>
                <a class="phr"> Serveur de données connecté </a>
            </div>

            <div>
                <p class= backgroung > 
                    <svg width="192" height="4" viewBox="0 0 192 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_2187)"> <rect width="192" height="4" rx="2" fill="#1E1F26"/> <rect width="192" height="4" fill="#FFB95F"/></g> <defs> <clipPath id="clip0_1_2187"> <rect width="192" height="4" rx="2" fill="white"/> </clipPath> </defs>
                    </svg>
                </p>
            </div>

        </div>
            

    </footer>
</aside>    

<!------------------Context------------------------->

    <div class="heading-one main-padding"> 
        <div>
            <span class="pre-titleone"> VAULT // CORE </span>
            <span class="pre-title2"> / ADMINISTRATION / </span>
            <span class="pre-title3"> SURPERVISON UTILISATEURS & NIVEAUX XP </span>
            <h1>Compte Utilisateurs, Progression & Badges</h1>
            <p class="description">Supervision des comptes membres, intégrité du barème XP, synchronisation des 4 badges et statistiques de rétention.</p>
        </div>


        <div class="right">
            <footer> 
                <button class=rotation>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12V10.5H2.0625L1.7625 10.2375C1.1125 9.6625 0.65625 9.00625 0.39375 8.26875C0.13125 7.53125 0 6.7875 0 6.0375C0 4.65 0.415625 3.41562 1.24688 2.33437C2.07812 1.25312 3.1625 0.5375 4.5 0.1875V1.7625C3.6 2.0875 2.875 2.64062 2.325 3.42188C1.775 4.20312 1.5 5.075 1.5 6.0375C1.5 6.6 1.60625 7.14687 1.81875 7.67812C2.03125 8.20938 2.3625 8.7 2.8125 9.15L3 9.3375V7.5H4.5V12H0V12M7.5 11.8125V10.2375C8.4 9.9125 9.125 9.35938 9.675 8.57812C10.225 7.79688 10.5 6.925 10.5 5.9625C10.5 5.4 10.3937 4.85313 10.1812 4.32188C9.96875 3.79063 9.6375 3.3 9.1875 2.85L9 2.6625V4.5H7.5V0H12V1.5H9.9375L10.2375 1.7625C10.85 2.375 11.2969 3.04063 11.5781 3.75938C11.8594 4.47813 12 5.2125 12 5.9625C12 7.35 11.5844 8.58437 10.7531 9.66562C9.92188 10.7469 8.8375 11.4625 7.5 11.8125V11.8125" fill="#3C0091"/>
                    </svg> Recalculer les XP & Badges
                </button>
            </footer>    
        </div>
    </div>    


<!------------------Section key------------------------->

    <section class="key main-padding">
        <div class="indication">
                <p class="total">TOTAL COMPTES
                    <svg class="icon" width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12V9.9C0 9.475 0.109375 9.08437 0.328125 8.72812C0.546875 8.37187 0.8375 8.1 1.2 7.9125C1.975 7.525 2.7625 7.23438 3.5625 7.04063C4.3625 6.84688 5.175 6.75 6 6.75C6.825 6.75 7.6375 6.84688 8.4375 7.04063C9.2375 7.23438 10.025 7.525 10.8 7.9125C11.1625 8.1 11.4531 8.37187 11.6719 8.72812C11.8906 9.08437 12 9.475 12 9.9V12H0V12M13.5 12V9.75C13.5 9.2 13.3469 8.67188 13.0406 8.16562C12.7344 7.65937 12.3 7.225 11.7375 6.8625C12.375 6.9375 12.975 7.06562 13.5375 7.24687C14.1 7.42812 14.625 7.65 15.1125 7.9125C15.5625 8.1625 15.9062 8.44063 16.1437 8.74687C16.3812 9.05312 16.5 9.3875 16.5 9.75V12H13.5V12M6 6C5.175 6 4.46875 5.70625 3.88125 5.11875C3.29375 4.53125 3 3.825 3 3C3 2.175 3.29375 1.46875 3.88125 0.88125C4.46875 0.29375 5.175 0 6 0C6.825 0 7.53125 0.29375 8.11875 0.88125C8.70625 1.46875 9 2.175 9 3C9 3.825 8.70625 4.53125 8.11875 5.11875C7.53125 5.70625 6.825 6 6 6V6M13.5 3C13.5 3.825 13.2062 4.53125 12.6187 5.11875C12.0312 5.70625 11.325 6 10.5 6C10.3625 6 10.1875 5.98438 9.975 5.95312C9.7625 5.92188 9.5875 5.8875 9.45 5.85C9.7875 5.45 10.0469 5.00625 10.2281 4.51875C10.4094 4.03125 10.5 3.525 10.5 3C10.5 2.475 10.4094 1.96875 10.2281 1.48125C10.0469 0.99375 9.7875 0.55 9.45 0.15C9.625 0.0875 9.8 0.046875 9.975 0.028125C10.15 0.009375 10.325 0 10.5 0C11.325 0 12.0312 0.29375 12.6187 0.88125C13.2062 1.46875 13.5 2.175 13.5 3V3M1.5 10.5H10.5V9.9C10.5 9.7625 10.4656 9.6375 10.3969 9.525C10.3281 9.4125 10.2375 9.325 10.125 9.2625C9.45 8.925 8.76875 8.67188 8.08125 8.50313C7.39375 8.33438 6.7 8.25 6 8.25C5.3 8.25 4.60625 8.33438 3.91875 8.50313C3.23125 8.67188 2.55 8.925 1.875 9.2625C1.7625 9.325 1.67188 9.4125 1.60312 9.525C1.53437 9.6375 1.5 9.7625 1.5 9.9V10.5V10.5M6 4.5C6.4125 4.5 6.76562 4.35312 7.05937 4.05937C7.35312 3.76562 7.5 3.4125 7.5 3C7.5 2.5875 7.35312 2.23438 7.05937 1.94062C6.76562 1.64687 6.4125 1.5 6 1.5C5.5875 1.5 5.23438 1.64687 4.94063 1.94062C4.64688 2.23438 4.5 2.5875 4.5 3C4.5 3.4125 4.64688 3.76562 4.94063 4.05937C5.23438 4.35312 5.5875 4.5 6 4.5V4.5M6 10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5V10.5M6 3V3V3V3V3V3V3V3V3V3" fill="#D0BCFF"/>
                    </svg>
                </p>
            
                <p class="value">3 <small>comptes enregistrés</small></p>
                <a class="ad">1 Admin</a>
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.875 3.75C1.53125 3.75 1.2168 3.66602 0.931641 3.49805C0.646484 3.33008 0.419922 3.10352 0.251953 2.81836C0.0839844 2.5332 0 2.21875 0 1.875C0 1.52734 0.0839844 1.21191 0.251953 0.928711C0.419922 0.645508 0.646484 0.419922 0.931641 0.251953C1.2168 0.0839844 1.53125 0 1.875 0C2.22266 0 2.53809 0.0839844 2.82129 0.251953C3.10449 0.419922 3.33008 0.645508 3.49805 0.928711C3.66602 1.21191 3.75 1.52734 3.75 1.875C3.75 2.21875 3.66602 2.5332 3.49805 2.81836C3.33008 3.10352 3.10449 3.33008 2.82129 3.49805C2.53809 3.66602 2.22266 3.75 1.875 3.75Z" fill="#958EA0"/>
                    </svg>
                </span>
                <a class="us"> 2 Utilisateurs</a>
        </div>


        <div class="indication">
                <p class="accumulate">XP CUMULÉ GLOBAL
                    <svg class="icon2" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.45833 13.5L9.77083 8.33333H6.4375L7.04167 3.60417L3.1875 9.16667H6.08333L5.45833 13.5V13.5M3.33333 16.6667L4.16667 10.8333H0L7.5 0H9.16667L8.33333 6.66667H13.3333L5 16.6667H3.33333V16.6667M6.47917 8.54167V8.54167V8.54167V8.54167V8.54167V8.54167V8.54167V8.54167" fill="#FFB95F"/>
                    </svg>
                </p>
            
                <p class="value2">245 <small class="supply" >XP distribués</small></p>
                <span class="progress-bar">
                    <svg width="74" height="6" viewBox="0 0 74 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="73.44" height="6" fill="url(#paint0_linear_1_1251)"/><defs> <linearGradient id="paint0_linear_1_1251" x1="0" y1="3" x2="73.44" y2="3" gradientUnits="userSpaceOnUse"><stop stop-color="#D0BCFF"/><stop offset="1" stop-color="#FFB95F"/></linearGradient></defs>
                    </svg>
                </span>
                <a class="bonus"> +35% ce mois</a>
        </div>

        <div class="indication">
                <p class="divide">BADGES DISTRIBUÉS
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H8.33333V6.54167C8.33333 6.86111 8.26389 7.14583 8.125 7.39583C7.98611 7.64583 7.79167 7.84722 7.54167 8L4.58333 9.75L5.16667 11.6667H8.33333L5.75 13.5L6.75 16.6667L4.16667 14.7083L1.58333 16.6667L2.58333 13.5L0 11.6667H3.16667L3.75 9.75L0.791667 8C0.541667 7.84722 0.347222 7.64583 0.208333 7.39583C0.0694444 7.14583 0 6.86111 0 6.54167V0V0M1.66667 1.66667V6.54167V6.54167V6.54167L3.33333 7.54167V1.66667H1.66667V1.66667M6.66667 1.66667H5V7.54167L6.66667 6.54167V6.54167V6.54167V1.66667V1.66667M4.16667 4.85417V4.85417V4.85417V4.85417V4.85417V4.85417V4.85417M3.33333 4.60417V4.60417V4.60417V4.60417V4.60417V4.60417V4.60417V4.60417M5 4.60417V4.60417V4.60417V4.60417V4.60417V4.60417V4.60417V4.60417" fill="#D2BBFF"/>
                    </svg>
                </p>

                <p class="value3">3 <small>sur 12 possibles</small></p>
                <a class="possess"> 25% taux de possession</a>
                <a class="assets">
                    <span>
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.875 3.75C1.53125 3.75 1.2168 3.66602 0.931641 3.49805C0.646484 3.33008 0.419922 3.10352 0.251953 2.81836C0.0839844 2.5332 0 2.21875 0 1.875C0 1.52734 0.0839844 1.21191 0.251953 0.928711C0.419922 0.645508 0.646484 0.419922 0.931641 0.251953C1.2168 0.0839844 1.53125 0 1.875 0C2.22266 0 2.53809 0.0839844 2.82129 0.251953C3.10449 0.419922 3.33008 0.645508 3.49805 0.928711C3.66602 1.21191 3.75 1.52734 3.75 1.875C3.75 2.21875 3.66602 2.5332 3.49805 2.81836C3.33008 3.10352 3.10449 3.33008 2.82129 3.49805C2.53809 3.66602 2.22266 3.75 1.875 3.75Z" fill="#958EA0"/>
                        </svg>

                    </span>
                    4 badges actifs </a>
        </div>



         <div class="indication">
                <p class="average"> NIVEAU MOYENNE
                    <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.16667 10L0 8.83333L6.16667 2.625L9.5 5.95833L13.8333 1.66667H11.6667V0H16.6667V5H15V2.83333L9.5 8.33333L6.16667 5L1.16667 10V10" fill="#CBC3D7"/>
                    </svg>
                </p>

                <p class="value4">1.67 <small class="supply" > / Niv. 5</small></p>
                <a class="level"> Max: Niveu 2 (2 comptes) </a>
        </div>
    </section>


<!------------------filter and search area------------------------->
   <section class=" filter-search main-padding">
    <div class="filter">
        <button class="all-accounts"> Tous les comptes (3) </button>
        <button class="admins"> Administrateurs (1) </button>
        <button class="users"> Utilisateurs (2)</button>

        <a class="search-bar">
            <input type="image" src="assets/images/mag_glass.svg" alt="Loupe">
            <input type="search" placeholder="Rechercher par pseudonyme ou adresse e-mail...">
        </a>
    </div>
   </section>


<!------------------Members------------------------->
<section class="members main-padding">
    <table class="board">
        <thead class="reference">
            <th> UTILISATEURS</th>
            <th> EMAIL & ROLE </th>
            <th> COLLECTION PERSONNELLE</th>
            <th> XP TOTAL & NIVEAU</th>
        </thead>

        <tbody>
<!------------------Row 1 Alexandre Vance------------------------->
            <tr>
                <td class="consumers1"> 
                <p>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect x="2" y="2" width="10" height="10" rx="5" fill="#FFB95F"/> <g filter="url(#filter0_d_1_1327)"> <rect x="2" y="2" width="10" height="10" rx="5" fill="white" fill-opacity="0.01" shape-rendering="crispEdges"/> </g> <defs> <filter id="filter0_d_1_1327" x="0" y="0" width="14" height="14" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feMorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_1_1327"/> <feOffset/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0470588 0 0 0 0 0.054902 0 0 0 0 0.0784314 0 0 0 1 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1327"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1327" result="shape"/> </filter> </defs> 
                    </svg>
                    Alex Vance
                </p> <p class="entry1">@Alexvance <span> • </span> Inscrit le 12 Jan 2025</p>
                </td>
                <td class="login">
                    <p>@alex.vance@vault.media</p> 
                    <a class="identify1"> Utilisateur</a> <a class="id1"> <span> • </span> ID #VAULT-4891</a> 
                </td>
                <td class="status1">
                        <p class="indexed"> 5 <a> oeuvres indexées </a> </p> 
                        <small> <a class="end"> 3 Terminées</a> <a class="discover"> / 2 À Découvrir</a> </small>
                </td>
                <td class="xp">
                    <span class="number"> 135 XP </span> 
                    <span class="lev"> Niveau 02</span> 
                    <p> 
                        <svg width="78" height="8" viewBox="0 0 78 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="77.69" height="8" rx="4" fill="url(#paint0_linear_1_1362)"/> <defs> <linearGradient id="paint0_linear_1_1362" x1="0" y1="4" x2="77.69" y2="4" gradientUnits="userSpaceOnUse"> <stop stop-color="#D0BCFF"/> <stop offset="1" stop-color="#FFB95F"/> </linearGradient> </defs> </svg>
                    </p>
                    <a class="lx"> 35 / 100 vers Niv.3</a> <a class="rest">65 XP restants</a>
                </td>
            </tr>
<!------------------Row 2 Marcus Holloway------------------------->

            <tr>
                <td class="consumers2">
                     <p> 
                        <svg width="22" height="44" viewBox="0 0 22 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g filter="url(#filter0_d_1_1398)"> <rect x="2" y="2" width="18" height="40" rx="9" fill="url(#pattern0_1_1398)" shape-rendering="crispEdges"/> </g> <rect x="10" y="32" width="10" height="10" rx="5" fill="#D0BCFF"/> <g filter="url(#filter1_d_1_1398)"> <rect x="10" y="32" width="10" height="10" rx="5" fill="white" fill-opacity="0.01" shape-rendering="crispEdges"/> </g> <defs> <filter id="filter0_d_1_1398" x="0" y="0" width="22" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feMorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_1_1398"/> <feOffset/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.815686 0 0 0 0 0.737255 0 0 0 0 1 0 0 0 1 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1398"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1398" result="shape"/> </filter> <pattern id="pattern0_1_1398" patternContentUnits="objectBoundingBox" width="1" height="1"> <use xlink:href="#image0_1_1398" transform="matrix(0.0278199 0 0 0.0125 -1.48912 0)"/> </pattern> <filter id="filter1_d_1_1398" x="8" y="30" width="14" height="14" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feMorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_1_1398"/> <feOffset/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0470588 0 0 0 0 0.054902 0 0 0 0 0.0784314 0 0 0 1 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1398"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1398" result="shape"/> </filter> <image id="image0_1_1398" width="143" height="80" preserveAspectRatio="none" xlink:href="data:image/jpeg;base64,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"/> </defs>
                        </svg>
                        Marcus Holloway <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.43333 12.25L3.325 10.3833L1.225 9.91667L1.42917 7.75833L0 6.125L1.42917 4.49167L1.225 2.33333L3.325 1.86667L4.43333 0L6.41667 0.845833L8.4 0L9.50833 1.86667L11.6083 2.33333L11.4042 4.49167L12.8333 6.125L11.4042 7.75833L11.6083 9.91667L9.50833 10.3833L8.4 12.25L6.41667 11.4042L4.43333 12.25V12.25M4.92917 10.7625L6.41667 10.1208L7.93333 10.7625L8.75 9.3625L10.3542 8.98333L10.2083 7.35L11.2875 6.125L10.2083 4.87083L10.3542 3.2375L8.75 2.8875L7.90417 1.4875L6.41667 2.12917L4.9 1.4875L4.08333 2.8875L2.47917 3.2375L2.625 4.87083L1.54583 6.125L2.625 7.35L2.47917 9.0125L4.08333 9.3625L4.92917 10.7625V10.7625M6.41667 6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125M5.80417 8.19583L9.1 4.9L8.28333 4.05417L5.80417 6.53333L4.55 5.30833L3.73333 6.125L5.80417 8.19583V8.19583" fill="#D0BCFF"/> </svg>
                    </p>  <p class="entry2"> @Marcu <span> • </span> Inscrit le 04 Dec 2024</p>
                </td>

                <td class="login">
                    <p> @marcus.admin@vault.media </p>
                    <a class="identify2"> ADMINISTRATEUR</a>  <a class="id2"> <span> • </span>  ID #VAULT-ROOT-01 </a>
                 </td>
                
                <td class="status2"> 
                    <p class="indexed">4 <a> oeuvres indexées</a> </p>  
                    <small> <a class= "game"> 2 Jeux </a> <a class="slash"> / </a> <a class="fm">1 Films </a class="sr"> / 1 Série <a> </a></small>  
                </td>

                <td class="xp2">
                    <span class=number2>110 XP</span>
                    <span class="lev2"> Niveau 02 </span>

                    <p>
                        <svg width="23" height="8" viewBox="0 0 23 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="22.19" height="8" rx="4" fill="url(#paint0_linear_1_1444)"/> <defs> <linearGradient id="paint0_linear_1_1444" x1="0" y1="4" x2="22.19" y2="4" gradientUnits="userSpaceOnUse"> <stop stop-color="#D0BCFF"/> <stop offset="1" stop-color="#FFB95F"/> </linearGradient> </defs> </svg>
                    </p>
                    <a class="lx2"> 10 / 100 vers Niv.3</a> <a class="rest2"> 90 XP restants</a>  
                </td>
            </tr>

<!------------------Row 3 Elena Fisher------------------------->

            <tr>
                <td class="consumers3">
                    <p>
                        <svg width="28" height="44" viewBox="0 0 28 44" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g opacity="0.8" filter="url(#filter0_d_1_1480)"> <rect x="2" y="2" width="24" height="40" rx="12" fill="url(#pattern0_1_1480)" shape-rendering="crispEdges"/> </g> <defs> <filter id="filter0_d_1_1480" x="0" y="0" width="28" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feMorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_1_1480"/> <feOffset/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.286275 0 0 0 0 0.266667 0 0 0 0 0.329412 0 0 0 1 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1480"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1480" result="shape"/> </filter> <pattern id="pattern0_1_1480" patternContentUnits="objectBoundingBox" width="1" height="1"> <use xlink:href="#image0_1_1480" transform="matrix(0.0208333 0 0 0.0124898 0 -0.0370629)"/> </pattern> <image id="image0_1_1480" width="48" height="86" preserveAspectRatio="none" xlink:href="data:image/jpeg;base64,/9j/2wBDAAgICAgJCAkKCgkNDgwODRMREBARExwUFhQWFBwrGx8bGx8bKyYuJSMlLiZENS8vNUROQj5CTl9VVV93cXecnNH/2wBDAQgICAgJCAkKCgkNDgwODRMREBARExwUFhQWFBwrGx8bGx8bKyYuJSMlLiZENS8vNUROQj5CTl9VVV93cXecnNH/wgARCABWADADASIAAhEBAxEB/8QAGwAAAgMBAQEAAAAAAAAAAAAABAUAAwYHAgH/xAAYAQADAQEAAAAAAAAAAAAAAAAAAgMEAf/aAAwDAQACEAMQAAAA53lrrr5Vfww/lhQiqFL9OChDQda471125TmtIikzhYNYJs4vSz0OrrT15zQgRhWZt4T2ddIucyTcjsM86c/xor8K/RcuEnjXx4kvCwmQLFsnG//EADAQAAIBAwMDAgQEBwAAAAAAAAECAwAEEQUSITFBURMiMkJxgRAjYZEGFiQzU8HR/9oACAEBAAE/AIrPT2sI/W2lhCT0KPnsAejVcw+lKygHFfQUVJqx0mW8immEkaRREb2ckAZq6hjhlKRyrIo+YAgH96t7ueDYVJGDkcZGR+hpiZiGamgO+QAHC0NNlwuLYgkDl2qZJUlaEOEG3cQM4pLYt6hd+EODjrmlXET5cEA8CrC6soNPtxI6iUzNwQDwR4NMbRnuwko7emvkZrVrNIoNEvHMRENvDmBuGcHwK19zcaxeSxQiLDFQp7AD9KUTPJ6aAbj2Aq90aezgMz/2nHscjuPpTllBKjB29a0DTE1C72TzekuM7qsXvr230r1TwbYxqYCNzhCQA+7gE4rWfVj1i9QAMRPk89aEpUsvpDPfJ5qe/mmtZo5lkKgYj5yobPc+cUokllgtwMNnpjBy1Wk8elWc1rcbEnUiZEz7mPQVDrH9XYJHcziCMLGVLdfsKvEafWriJWx6ky/H7ccdz2r+IdCvtJeFrmFEVxmOVCGD/UgkUl1KgVQwKgkgY45qGZ4547lRuKsMg1rUiajqEF1ACBPCW93BwlSfkzyL4JA57VobQCKe5mRnkDcnG7ArVXjnEXpbXBXJK+0D9xQ+IUj7ZGUk7TjNR3C215bvGdwXOAeRzSLE6G8kgdoVba4XKjd29wBArTo9JudPcxQTQRH4ysoYeRndjNGJAtyltMzptMY3ry2ecDxWahgjuMsbhY27BgSD9xQ02dmBSWB8c8Sf9qyikghdIL0ruYb4fjRx3B6Zq0ltuQbMRFwpV4EZeT4I4wa1p760tt5uIzGP80eCfuKMJ+VgfvUcXIUvgnoOlG2eFY5po5DC5Kh0I6jqPrVrLbM+VvUTjo6EH/Yr+a7LSrZYrcG5n2DDsw2rWqyalfOk1/dGXKBkxghc9hg9KIheNVjXD/MV4B/emNukIR+W5IHio90kJSLcMtkpnIbHQ/UVNZ3MR/Mt3Xof0IPg1p0osHacWxedVOPVQOgDDrjz4NJcSIu3OV8UZG7cfgj7QR5PJ71cXss0m4nooVR4AqGZjA/J3KDjxg9R+H//xAAdEQEAAwACAwEAAAAAAAAAAAABAAIRITEDEEEy/9oACAECAQE/AFq1hRZbA6iWr3KefNBBMZa2qyyo86zw4Dv6e41u3H5FwlkOR5jdMNTfi+k3hlfGFlr39X2ds//EAB0RAQACAwADAQAAAAAAAAAAAAECEQADIRIxgRD/2gAIAQMBAT8A1wnGbbY5dIYEvNuXzIyhsLi2Y6bdU2K+NhiNt+8hGMUoovNqqU1GPBMJ6yCdXCNvMhGTxOZHWNtRevQwcJMel5LYpUvgfr6M/9k="/> </defs>
                        </svg>
                        Elena Fisher
                    </p>  <p class="entry3"> @Elena <span> • </span> Inscrit le 28 Fev 2025 </p>
                </td> 

                <td class="login">
                    <p> @elena.f@vault.media</p>  
                    <a class="identify3"> Utilisateur </a> <a class="id3" ><span> • </span> ID #VAULT-5102</a>       
                </td>

                <td class="status3">
                    <p class="indexed"> 0 <a class="oeuvre">oeuvre indexée</a></p> 
                    <small> <a class="empty"> Colection vierge</a></small> 
                </td>

                <td class="xp3"> 
                    <span class=number3> 0 XP </span>
                    <span class="lev3"> Niveau 01</span>
                    <p>
                        <svg width="205" height="8" viewBox="0 0 205 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="222" height="8" rx="4" fill="#1E1F26"/> </svg>
                    </p>
                    <a class="lx3"> 0 / 100 vers Niv.2</a> <a class="rest3"> 100 XP restants</a>  
                </td>
            </tr>
        </tbody>
    </table>

<!------------------Pagination status bar------------------------->

    <div class="pagination-status">
        <a class="display">Affichage de 3 sur 3 comptes synchronisés  </a>

        <a class="bts">
            <button class="before"> Précédent </button>
            <button class="page"> 1 </button>
            <button class="after"> Suivant </button>
        </a>
    </div>
</section>



<!------------------Integrity------------------------->
<section class="integrity main-padding">

    <div class="rules">

        <div class="scale">
            <h1> 
                <span> 
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15.8333V14.1667H10V15.8333H0V15.8333M4.70833 11.7917L0 7.08333L1.75 5.29167L6.5 10L4.70833 11.7917V11.7917M10 6.5L5.29167 1.75L7.08333 0L11.7917 4.70833L10 6.5V6.5M13.8333 15L2.95833 4.125L4.125 2.95833L15 13.8333L13.8333 15V15" fill="#D0BCFF"/> </svg> 
                </span> Règle d'Attribution Métier & Barème XP  <span class="engine"> MOTEUR V.24 ACTIF</span>
            </h1>
            <p> Le calcul de progression est événementiel et strictement déterministe. Chaque action utilisateur modifie son score de manière univoque sans interpolation : </p>

            <div class="retribution"> 
                 <div class="rtr1">
                    <span>
                         <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect width="29.5" height="29.5" rx="4" fill="#282A30"/> <path d="M14 18.5H15.5V15.5H18.5V14H15.5V11H14V14H11V15.5H14V18.5V18.5M9.5 21.5C9.0875 21.5 8.73438 21.3531 8.44063 21.0594C8.14688 20.7656 8 20.4125 8 20V9.5C8 9.0875 8.14688 8.73438 8.44063 8.44063C8.73438 8.14688 9.0875 8 9.5 8H20C20.4125 8 20.7656 8.14688 21.0594 8.44063C21.3531 8.73438 21.5 9.0875 21.5 9.5V20C21.5 20.4125 21.3531 20.7656 21.0594 21.0594C20.7656 21.3531 20.4125 21.5 20 21.5H9.5V21.5M9.5 20H20V20V20V9.5V9.5V9.5H9.5V9.5V9.5V20V20V20V20M9.5 9.5V9.5V9.5V9.5V20V20V20V20V20V20V9.5V9.5V9.5V9.5" fill="#D0BCFF"/> </svg>
                    </span>
                    <a class="title1"> Ajout d'oeuvre </a> <a class="nb1"> +10XP</a>
                    <p class="notice1"> Lorsqu'un titre rejoint la collection personelle d'un membre</p>
                </div>

                <div>
                    <span>
                         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.5 15C6.4625 15 5.4875 14.8031 4.575 14.4094C3.6625 14.0156 2.86875 13.4812 2.19375 12.8062C1.51875 12.1312 0.984375 11.3375 0.590625 10.425C0.196875 9.5125 0 8.5375 0 7.5C0 6.4625 0.196875 5.4875 0.590625 4.575C0.984375 3.6625 1.51875 2.86875 2.19375 2.19375C2.86875 1.51875 3.6625 0.984375 4.575 0.590625C5.4875 0.196875 6.4625 0 7.5 0C8.3125 0 9.08125 0.11875 9.80625 0.35625C10.5312 0.59375 11.2 0.925 11.8125 1.35L10.725 2.45625C10.25 2.15625 9.74375 1.92188 9.20625 1.75312C8.66875 1.58437 8.1 1.5 7.5 1.5C5.8375 1.5 4.42188 2.08437 3.25312 3.25312C2.08437 4.42188 1.5 5.8375 1.5 7.5C1.5 9.1625 2.08437 10.5781 3.25312 11.7469C4.42188 12.9156 5.8375 13.5 7.5 13.5C9.1625 13.5 10.5781 12.9156 11.7469 11.7469C12.9156 10.5781 13.5 9.1625 13.5 7.5C13.5 7.275 13.4875 7.05 13.4625 6.825C13.4375 6.6 13.4 6.38125 13.35 6.16875L14.5688 4.95C14.7063 5.35 14.8125 5.7625 14.8875 6.1875C14.9625 6.6125 15 7.05 15 7.5C15 8.5375 14.8031 9.5125 14.4094 10.425C14.0156 11.3375 13.4812 12.1312 12.8062 12.8062C12.1312 13.4812 11.3375 14.0156 10.425 14.4094C9.5125 14.8031 8.5375 15 7.5 15V15M6.45 10.95L3.2625 7.7625L4.3125 6.7125L6.45 8.85L13.95 1.33125L15 2.38125L6.45 10.95V10.95" fill="#D0BCFF"/> </svg>
                    </span>
                    <a class="title2"> Statut 'Terminé'</a> <a class="nb2">+20XP</a>
                    <p class="notice2"> Validation du visionnage complet ou du jeu terminé.</p>
                </div>

                <div>
                    <span>
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.1375 11.1187L7.5 9.69375L9.8625 11.1375L9.24375 8.4375L11.325 6.6375L8.5875 6.39375L7.5 3.84375L6.4125 6.375L3.675 6.61875L5.75625 8.4375L5.1375 11.1187V11.1187M2.86875 14.25L4.0875 8.98125L0 5.4375L5.4 4.96875L7.5 0L9.6 4.96875L15 5.4375L10.9125 8.98125L12.1313 14.25L7.5 11.4563L2.86875 14.25V14.25M7.5 7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875V7.6875" fill="#D0BCFF"/> </svg>
                    </span>
                    <a class="title3"> Atribution de notes</a> <a class="nb3"> +5XP</a>
                    <p class="notice3"> Évaluation critique (1 à 5 étoiles) attribuée à l'œuvre. </p>
                </div>

                <div>
                    <span>
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 12V10.5L4.875 6L0 1.5V0H9V2.25H3.58125L7.6125 6L3.58125 9.75H9V12H0V12" fill="#D0BCFF"/> </svg>
                    </span>
                    <a class="title4"> Formule du niveau</a> <a class="nb4"> 1 + floor(XP/100) </a>
                    <p class="notice4">Paliers stricts de 100 XP par incrément de niveau.</p>
                </div>
            
            </div>    
                
                    <div class="color">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.75 11.25H8.25V6.75H6.75V11.25V11.25M7.5 5.25C7.7125 5.25 7.89062 5.17813 8.03438 5.03438C8.17813 4.89062 8.25 4.7125 8.25 4.5C8.25 4.2875 8.17813 4.10938 8.03438 3.96563C7.89062 3.82188 7.7125 3.75 7.5 3.75C7.2875 3.75 7.10938 3.82188 6.96562 3.96563C6.82187 4.10938 6.75 4.2875 6.75 4.5C6.75 4.7125 6.82187 4.89062 6.96562 5.03438C7.10938 5.17813 7.2875 5.25 7.5 5.25V5.25M7.5 15C6.4625 15 5.4875 14.8031 4.575 14.4094C3.6625 14.0156 2.86875 13.4812 2.19375 12.8062C1.51875 12.1312 0.984375 11.3375 0.590625 10.425C0.196875 9.5125 0 8.5375 0 7.5C0 6.4625 0.196875 5.4875 0.590625 4.575C0.984375 3.6625 1.51875 2.86875 2.19375 2.19375C2.86875 1.51875 3.6625 0.984375 4.575 0.590625C5.4875 0.196875 6.4625 0 7.5 0C8.5375 0 9.5125 0.196875 10.425 0.590625C11.3375 0.984375 12.1312 1.51875 12.8062 2.19375C13.4812 2.86875 14.0156 3.6625 14.4094 4.575C14.8031 5.4875 15 6.4625 15 7.5C15 8.5375 14.8031 9.5125 14.4094 10.425C14.0156 11.3375 13.4812 12.1312 12.8062 12.8062C12.1312 13.4812 11.3375 14.0156 10.425 14.4094C9.5125 14.8031 8.5375 15 7.5 15V15M7.5 13.5C9.175 13.5 10.5938 12.9188 11.7563 11.7563C12.9188 10.5938 13.5 9.175 13.5 7.5C13.5 5.825 12.9188 4.40625 11.7563 3.24375C10.5938 2.08125 9.175 1.5 7.5 1.5C5.825 1.5 4.40625 2.08125 3.24375 3.24375C2.08125 4.40625 1.5 5.825 1.5 7.5C1.5 9.175 2.08125 10.5938 3.24375 11.7563C4.40625 12.9188 5.825 13.5 7.5 13.5V13.5M7.5 7.5V7.5V7.5V7.5V7.5V7.5V7.5V7.5V7.5V7.5" fill="#FFB95F"/> </svg>
                        <a class="light">Règle de synchronisation : </a> <a class="dark">En cas de suppression d'une œuvre par un administrateur, les XP et badges des comptes associés sont immédiatement recalculés sans historique résiduel.</a> 
                    </div>
        </div>


        <div class=" control"> 
            <h1> 
                <span>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.5 15C5.40278 15 3.62847 14.6771 2.17708 14.0312C0.725694 13.3854 0 12.5972 0 11.6667V3.33333C0 2.41667 0.732639 1.63194 2.19792 0.979167C3.66319 0.326389 5.43056 0 7.5 0C9.56944 0 11.3368 0.326389 12.8021 0.979167C14.2674 1.63194 15 2.41667 15 3.33333V11.6667C15 12.5972 14.2743 13.3854 12.8229 14.0312C11.3715 14.6771 9.59722 15 7.5 15V15M7.5 5.02083C8.73611 5.02083 9.97917 4.84375 11.2292 4.48958C12.4792 4.13542 13.1806 3.75694 13.3333 3.35417C13.1806 2.95139 12.4826 2.56944 11.2396 2.20833C9.99653 1.84722 8.75 1.66667 7.5 1.66667C6.23611 1.66667 4.99653 1.84375 3.78125 2.19792C2.56597 2.55208 1.86111 2.9375 1.66667 3.35417C1.86111 3.77083 2.56597 4.15278 3.78125 4.5C4.99653 4.84722 6.23611 5.02083 7.5 5.02083V5.02083M7.5 9.16667C8.08333 9.16667 8.64583 9.13889 9.1875 9.08333C9.72917 9.02778 10.2465 8.94792 10.7396 8.84375C11.2326 8.73958 11.6979 8.61111 12.1354 8.45833C12.5729 8.30556 12.9722 8.13194 13.3333 7.9375V5.4375C12.9722 5.63194 12.5729 5.80556 12.1354 5.95833C11.6979 6.11111 11.2326 6.23958 10.7396 6.34375C10.2465 6.44792 9.72917 6.52778 9.1875 6.58333C8.64583 6.63889 8.08333 6.66667 7.5 6.66667C6.91667 6.66667 6.34722 6.63889 5.79167 6.58333C5.23611 6.52778 4.71181 6.44792 4.21875 6.34375C3.72569 6.23958 3.26389 6.11111 2.83333 5.95833C2.40278 5.80556 2.01389 5.63194 1.66667 5.4375V7.9375C2.01389 8.13194 2.40278 8.30556 2.83333 8.45833C3.26389 8.61111 3.72569 8.73958 4.21875 8.84375C4.71181 8.94792 5.23611 9.02778 5.79167 9.08333C6.34722 9.13889 6.91667 9.16667 7.5 9.16667V9.16667M7.5 13.3333C8.13889 13.3333 8.78819 13.2847 9.44792 13.1875C10.1076 13.0903 10.7153 12.9618 11.2708 12.8021C11.8264 12.6424 12.2917 12.4618 12.6667 12.2604C13.0417 12.059 13.2639 11.8542 13.3333 11.6458V9.60417C12.9722 9.79861 12.5729 9.97222 12.1354 10.125C11.6979 10.2778 11.2326 10.4062 10.7396 10.5104C10.2465 10.6146 9.72917 10.6944 9.1875 10.75C8.64583 10.8056 8.08333 10.8333 7.5 10.8333C6.91667 10.8333 6.34722 10.8056 5.79167 10.75C5.23611 10.6944 4.71181 10.6146 4.21875 10.5104C3.72569 10.4062 3.26389 10.2778 2.83333 10.125C2.40278 9.97222 2.01389 9.79861 1.66667 9.60417V11.6667C1.73611 11.875 1.95486 12.0764 2.32292 12.2708C2.69097 12.4653 3.15278 12.6424 3.70833 12.8021C4.26389 12.9618 4.875 13.0903 5.54167 13.1875C6.20833 13.2847 6.86111 13.3333 7.5 13.3333V13.3333" fill="#FFB95F"/> </svg>
                </span>
                Control d'Intégrité <span class="pt"> <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_d_1_1627)"> <rect x="8" y="8" width="10" height="10" rx="5" fill="#FFB95F"/> </g> <defs> <filter id="filter0_d_1_1627" x="0" y="0" width="26" height="26" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feOffset/> <feGaussianBlur stdDeviation="4"/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.72549 0 0 0 0 0.372549 0 0 0 1 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_1627"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_1627" result="shape"/> </filter> </defs> </svg> </span>
            </h1> 

            <div class="statuss">
                <p class="relational">STATUT RELATIONNEL</p>
                <h2> Synchronisation automatique active</h2>
                <p> Moteur relationnel cohérent (0 anomalie détectée sur 3 comptes) </p>
            </div>

            <div class="badges">
                <p> 4 BADGES CANONIQUES</p>
            
                <div> 
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.25 12.5417C4.55 11.8806 3.74792 11.375 2.84375 11.025C1.93958 10.675 0.991667 10.5 0 10.5V4.08333C0.981944 4.08333 1.925 4.26076 2.82917 4.61562C3.73333 4.97049 4.54028 5.48333 5.25 6.15417C5.95972 5.48333 6.76667 4.97049 7.67083 4.61562C8.575 4.26076 9.51806 4.08333 10.5 4.08333V10.5C9.49861 10.5 8.54826 10.675 7.64896 11.025C6.74965 11.375 5.95 11.8806 5.25 12.5417V12.5417M5.25 11.025C5.8625 10.5681 6.51389 10.2035 7.20417 9.93125C7.89444 9.65903 8.60417 9.47917 9.33333 9.39167V5.36667C8.62361 5.49306 7.92604 5.74826 7.24062 6.13229C6.55521 6.51632 5.89167 7.02917 5.25 7.67083C4.60833 7.02917 3.94479 6.51632 3.25938 6.13229C2.57396 5.74826 1.87639 5.49306 1.16667 5.36667V9.39167C1.89583 9.47917 2.60556 9.65903 3.29583 9.93125C3.98611 10.2035 4.6375 10.5681 5.25 11.025V11.025M5.25 4.66667C4.60833 4.66667 4.05903 4.43819 3.60208 3.98125C3.14514 3.52431 2.91667 2.975 2.91667 2.33333C2.91667 1.69167 3.14514 1.14236 3.60208 0.685417C4.05903 0.228472 4.60833 0 5.25 0C5.89167 0 6.44097 0.228472 6.89792 0.685417C7.35486 1.14236 7.58333 1.69167 7.58333 2.33333C7.58333 2.975 7.35486 3.52431 6.89792 3.98125C6.44097 4.43819 5.89167 4.66667 5.25 4.66667V4.66667M5.25 3.5C5.57083 3.5 5.84549 3.38576 6.07396 3.15729C6.30243 2.92882 6.41667 2.65417 6.41667 2.33333C6.41667 2.0125 6.30243 1.73785 6.07396 1.50937C5.84549 1.2809 5.57083 1.16667 5.25 1.16667C4.92917 1.16667 4.65451 1.2809 4.42604 1.50937C4.19757 1.73785 4.08333 2.0125 4.08333 2.33333C4.08333 2.65417 4.19757 2.92882 4.42604 3.15729C4.65451 3.38576 4.92917 3.5 5.25 3.5V3.5M5.25 2.33333V2.33333V2.33333V2.33333V2.33333V2.33333V2.33333V2.33333V2.33333V2.33333M5.25 7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083V7.67083" fill="#FFB95F"/> </svg>
                    <a class="ac"> Collectionneur </a> <a class="jx"> 5 oeuvres ajoutées</a>
                </div> 

                <div> 
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.16667 0L2.33333 2.33333H4.08333L2.91667 0H4.08333L5.25 2.33333H7L5.83333 0H7L8.16667 2.33333H9.91667L8.75 0H10.5C10.8208 0 11.0955 0.114236 11.324 0.342708C11.5524 0.571181 11.6667 0.845833 11.6667 1.16667V8.16667C11.6667 8.4875 11.5524 8.76215 11.324 8.99063C11.0955 9.2191 10.8208 9.33333 10.5 9.33333H1.16667C0.845833 9.33333 0.571181 9.2191 0.342708 8.99063C0.114236 8.76215 0 8.4875 0 8.16667V1.16667C0 0.845833 0.114236 0.571181 0.342708 0.342708C0.571181 0.114236 0.845833 0 1.16667 0V0V0M1.16667 3.5V8.16667V8.16667V8.16667H10.5V8.16667V8.16667V3.5H1.16667V3.5M1.16667 3.5V3.5V8.16667V8.16667V8.16667V8.16667V8.16667V8.16667V3.5V3.5" fill="#D0BCFF"/> </svg>
                    <a class="ac"> Cinéphile </a> <a class="jx"> 3 films vus</a>
                </div> 


                <div>
                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.47875 8.16667C0.982917 8.16667 0.598889 7.9941 0.326667 7.64896C0.0544444 7.30382 -0.0476389 6.88333 0.0204167 6.3875L0.632917 2.0125C0.720417 1.42917 0.980486 0.947917 1.41313 0.56875C1.84576 0.189583 2.35375 0 2.93708 0H8.71208C9.29542 0 9.8034 0.189583 10.236 0.56875C10.6687 0.947917 10.9288 1.42917 11.0162 2.0125L11.6287 6.3875C11.6968 6.88333 11.5947 7.30382 11.3225 7.64896C11.0503 7.9941 10.6663 8.16667 10.1704 8.16667C9.96625 8.16667 9.77667 8.13021 9.60167 8.05729C9.42667 7.98438 9.26625 7.875 9.12042 7.72917L7.80792 6.41667H3.84125L2.52875 7.72917C2.38292 7.875 2.2225 7.98438 2.0475 8.05729C1.8725 8.13021 1.68292 8.16667 1.47875 8.16667V8.16667M1.71208 6.9125L3.37458 5.25H8.27458L9.93708 6.9125C9.95653 6.93194 10.0343 6.96111 10.1704 7C10.2774 7 10.3624 6.9684 10.4256 6.90521C10.4888 6.84201 10.5107 6.75694 10.4913 6.65L9.84958 2.15833C9.81069 1.87639 9.68431 1.64062 9.47042 1.45104C9.25653 1.26146 9.00375 1.16667 8.71208 1.16667H2.93708C2.64542 1.16667 2.39264 1.26146 2.17875 1.45104C1.96486 1.64062 1.83847 1.87639 1.79958 2.15833L1.15792 6.65C1.13847 6.75694 1.16035 6.84201 1.22354 6.90521C1.28674 6.9684 1.37181 7 1.47875 7C1.49819 7 1.57597 6.97083 1.71208 6.9125V6.9125M8.74125 4.66667C8.90653 4.66667 9.04507 4.61076 9.15687 4.49896C9.26868 4.38715 9.32458 4.24861 9.32458 4.08333C9.32458 3.91806 9.26868 3.77951 9.15687 3.66771C9.04507 3.5559 8.90653 3.5 8.74125 3.5C8.57597 3.5 8.43743 3.5559 8.32563 3.66771C8.21382 3.77951 8.15792 3.91806 8.15792 4.08333C8.15792 4.24861 8.21382 4.38715 8.32563 4.49896C8.43743 4.61076 8.57597 4.66667 8.74125 4.66667V4.66667M7.57458 2.91667C7.73986 2.91667 7.8784 2.86076 7.99021 2.74896C8.10201 2.63715 8.15792 2.49861 8.15792 2.33333C8.15792 2.16806 8.10201 2.02951 7.99021 1.91771C7.8784 1.8059 7.73986 1.75 7.57458 1.75C7.40931 1.75 7.27076 1.8059 7.15896 1.91771C7.04715 2.02951 6.99125 2.16806 6.99125 2.33333C6.99125 2.49861 7.04715 2.63715 7.15896 2.74896C7.27076 2.86076 7.40931 2.91667 7.57458 2.91667V2.91667M3.34542 4.66667H4.22042V3.64583H5.24125V2.77083H4.22042V1.75H3.34542V2.77083H2.32458V3.64583H3.34542V4.66667V4.66667M5.82458 4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333V4.08333" fill="#D2BBFF"/> </svg>
                    <a class="ac"> Gamer </a> <a class="jx"> 3 jeux joués</a>
                </div> 

                <div>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.20833 8.45833L7.29167 7.29167L8.45833 3.20833L4.375 4.375L3.20833 8.45833V8.45833M5.83333 6.70833C5.59028 6.70833 5.38368 6.62326 5.21354 6.45312C5.0434 6.28299 4.95833 6.07639 4.95833 5.83333C4.95833 5.59028 5.0434 5.38368 5.21354 5.21354C5.38368 5.0434 5.59028 4.95833 5.83333 4.95833C6.07639 4.95833 6.28299 5.0434 6.45312 5.21354C6.62326 5.38368 6.70833 5.59028 6.70833 5.83333C6.70833 6.07639 6.62326 6.28299 6.45312 6.45312C6.28299 6.62326 6.07639 6.70833 5.83333 6.70833V6.70833M5.83333 11.6667C5.02639 11.6667 4.26806 11.5135 3.55833 11.2073C2.84861 10.901 2.23125 10.4854 1.70625 9.96042C1.18125 9.43542 0.765625 8.81806 0.459375 8.10833C0.153125 7.39861 0 6.64028 0 5.83333C0 5.02639 0.153125 4.26806 0.459375 3.55833C0.765625 2.84861 1.18125 2.23125 1.70625 1.70625C2.23125 1.18125 2.84861 0.765625 3.55833 0.459375C4.26806 0.153125 5.02639 0 5.83333 0C6.64028 0 7.39861 0.153125 8.10833 0.459375C8.81806 0.765625 9.43542 1.18125 9.96042 1.70625C10.4854 2.23125 10.901 2.84861 11.2073 3.55833C11.5135 4.26806 11.6667 5.02639 11.6667 5.83333C11.6667 6.64028 11.5135 7.39861 11.2073 8.10833C10.901 8.81806 10.4854 9.43542 9.96042 9.96042C9.43542 10.4854 8.81806 10.901 8.10833 11.2073C7.39861 11.5135 6.64028 11.6667 5.83333 11.6667V11.6667M5.83333 10.5C7.12639 10.5 8.22743 10.0455 9.13646 9.13646C10.0455 8.22743 10.5 7.12639 10.5 5.83333C10.5 4.54028 10.0455 3.43924 9.13646 2.53021C8.22743 1.62118 7.12639 1.16667 5.83333 1.16667C4.54028 1.16667 3.43924 1.62118 2.53021 2.53021C1.62118 3.43924 1.16667 4.54028 1.16667 5.83333C1.16667 7.12639 1.62118 8.22743 2.53021 9.13646C3.43924 10.0455 4.54028 10.5 5.83333 10.5V10.5M5.83333 5.83333V5.83333V5.83333V5.83333V5.83333V5.83333V5.83333V5.83333V5.83333V5.83333" fill="#FFB95F"/> </svg>
                    <a class="ac"> Explorateur </a> <a class="jx"> Score mini-jeu ≥ 15</a>
                </div> 
            

                    <button class="logic">
                    <svg width="13" height="13" view Box="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.43333 12.25L3.325 10.3833L1.225 9.91667L1.42917 7.75833L0 6.125L1.42917 4.49167L1.225 2.33333L3.325 1.86667L4.43333 0L6.41667 0.845833L8.4 0L9.50833 1.86667L11.6083 2.33333L11.4042 4.49167L12.8333 6.125L11.4042 7.75833L11.6083 9.91667L9.50833 10.3833L8.4 12.25L6.41667 11.4042L4.43333 12.25V12.25M4.92917 10.7625L6.41667 10.1208L7.93333 10.7625L8.75 9.3625L10.3542 8.98333L10.2083 7.35L11.2875 6.125L10.2083 4.87083L10.3542 3.2375L8.75 2.8875L7.90417 1.4875L6.41667 2.12917L4.9 1.4875L4.08333 2.8875L2.47917 3.2375L2.625 4.87083L1.54583 6.125L2.625 7.35L2.47917 9.0125L4.08333 9.3625L4.92917 10.7625V10.7625M6.41667 6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125V6.125M5.80417 8.19583L9.1 4.9L8.28333 4.05417L5.80417 6.53333L4.55 5.30833L3.73333 6.125L5.80417 8.19583V8.19583" fill="#E2E2EB"/> </svg>
                    Vérifier la cohérence de la base
                    </button>
                
        </div>
    </div>
</section>

</body>

