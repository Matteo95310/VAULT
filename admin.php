
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin1.css">
</head>

<body>

  <div class="app">
    <aside class="sidebar">
      <div class="brand"><span class="brand-icon">✦</span> VAULT<span class="dot">•</span></div>
      <p class="eyebrow">SUPERVISION CATALOGUE</p>
      <nav>
        <a class="active" href="#">▦ Console Générale</a>
        <a href="#">▤ Gestion Œuvres</a>
        <a href="#">♧ Comptes XP</a>
      </nav>
      <div class="status">
        <b>SYSTÈME ACTIF <i></i></b>
        <small>Serveur de données connecté</small>
      </div>
      <div class="side-footer">VAULT ADMINISTRATION <span>v2.4.1</span></div>
    </aside>

    <main>
      <header class="topbar">
        <span>MODE ADMINISTRATEUR <b>/</b> <strong>Console Système</strong></span>
      </header>

      <section class="heading">
        <div>
          <h1><i></i> Console d'Administration du Catalogue</h1>
          <p>Gestion centralisée du catalogue et contrôle des fiches médias</p>
        </div>
        <button class="primary">＋ Nouvelle fiche</button>
      </section>



      
      <section class="dashboard">
          <?php
          require 'includes/templates/templates_admin/panel_editor.php';
          ?>

        <div class="right">
          <div class="stats">
            <article class="stat">
              <label>TOTAL CATALOGUE <span>▣</span></label>
              <strong>12 <small>œuvres</small></strong>
              <p>+2 ce cycle</p>
            </article>
            <article class="stat">
              <label>COMPTES SESSIONS <span>♧</span></label>
              <strong>8 <small>actifs</small></strong>
              <p>66.7% du corpus</p>
            </article>
            <article class="stat">
              <label>JEUX VIDÉO <span>▧</span></label>
              <strong>4 <small>titres</small></strong>
              <p>33.3% du corpus</p>
            </article>
          </div>

          <article class="panel distribution">
            <div class="dist-head">
              <div>
                <h3>Répartition Thématique du Catalogue</h3>
                <p>Distribution par type de média</p>
              </div>
              <small>TOTAL : 100% NORMALISÉ</small>
            </div>
            <div class="bar"><i></i><i></i><i></i><i></i></div>
            <div class="legend">
              <span>● Film (42%)</span>
              <span>● Série (25%)</span>
              <span>● Jeu vidéo (25%)</span>
              <span>● Autres (8%)</span>
            </div>
          </article>
        </div>
      </section>

      <section class="catalogue">
        <div class="catalogue-head">
          <h2>▤ Répertoire CentraliséContrôle des Entrées <span class="tag">12 FICHES</span></h2>
          <div class="tools">
            <button class="lilac">＋ Ajouter une fiche</button>
            <input placeholder="Filtrer par titre ou tag..." readonly>
          </div>
        </div>

        <div class="table-scroll">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>VISUEL</th>
                <th>TITRE MÉDIA</th>
                <th>CATÉGORIE</th>
                <th>SORTIE</th>
                <th>COLLECTEURS INSCRITS</th>
                <th>ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#101</td>
                <td><div class="poster p1">2049</div></td>
                <td><b>Blade Runner 2049</b><small>Enquête néo-noire à Los Angeles</small></td>
                <td><em class="film">Film</em></td>
                <td>2017</td>
                <td class="count">♟ 42 utilisateurs</td>
                <td><button class="edit">✎ Éditer</button></td>
              </tr>
              <tr>
                <td>#102</td>
                <td><div class="poster p2">CP77</div></td>
                <td><b>Cyberpunk 2077: Phantom Liberty</b><small>Conspiration et cybertechnologies à Dogtown</small></td>
                <td><em class="game">Jeu vidéo</em></td>
                <td>2023</td>
                <td class="count">♟ 38 utilisateurs</td>
                <td><button class="edit">✎</button></td>
              </tr>
              <tr>
                <td>#103</td>
                <td><div class="poster p3">ARC</div></td>
                <td><b>Arcane: League of Legends</b><small>Tensions entre Piltover et Zaun</small></td>
                <td><em class="series">Série</em></td>
                <td>2021</td>
                <td class="count">♟ 31 utilisateurs</td>
                <td><button class="edit">✎</button></td>
              </tr>
              <tr>
                <td>#104</td>
                <td><div class="poster p4">DUNE</div></td>
                <td><b>Dune: Part Two</b><small>Destinées liées sur Arrakis</small></td>
                <td><em class="film">Film</em></td>
                <td>2024</td>
                <td class="count">♟ 33 utilisateurs</td>
                <td><button class="edit">✎</button></td>
              </tr>
              <tr>
                <td>#105</td>
                <td><div class="poster p5">ER</div></td>
                <td><b>Elden Ring: Shadow of the Erdtree</b><small>Épopée dans le Royaume des Ombres</small></td>
                <td><em class="game">Jeu vidéo</em></td>
                <td>2024</td>
                <td class="count">♟ 29 utilisateurs</td>
                <td><button class="edit">✎</button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-footer">
          <span>Affichage : 5 fiches présentes</span>
          <div><button>PRÉV</button><button class="page">1</button><button>SUIV</button></div>
        </div>
      </section>

      <footer>
        VAULT CONSOLE · GESTION DES ŒUVRES
        <span>SYSTÈME OPÉRATIONNEL</span>
      </footer>
    </main>
  </div>
</body>
</html>
