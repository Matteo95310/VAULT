<header class="main-padding">
    <!-- Left part -->
    <div class="left">
        <div class="logo">
            <img src="assets/images/Logo Vault.jpg" alt="Logo" />
            <span>VAULT</span>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Catalogue</a>
                </li>
                <li>

                    <a class="profile" href="profile.php">Mon profil</a>
                </li>
                <?php if ( ($role ?? null) === 'admin' ) : ?>
                <li>
                    <a class="admin" href="admin.php">Administration</a>
                </li>
                <?php endif; ?>
                <li>
                    <form action="actions/logout_action.php" method="POST">
                        <button type="submit" class="admin">Déconnexion</button>  
                    </form>
                </li>

            </ul>
        </nav>
    </div>

    <!-- Right part -->
    <div class="right">
        <div class="search_bar">
            <input type="image" src="assets/images/mag_glass.svg" alt="Loupe">
            <input type="search" placeholder="Rechercher film, série, jeu...">
            <span class="shortcut">CTRL+K</span>
        </div>
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
            <a href="register.php">Par</a>
        </div>

    </div>
</header>