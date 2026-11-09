

<form action="../../../actions/create_media_action.php" method="post">
<article class="panel editor">
    <div class="toolbar">
        <button class="secondary">⊕ Créer une œuvre</button>
        <button class="lilac">✎ Modifier #101</button>
    </div>

    <h2>▧ Fiche de Référencement <span class="tag">ÉDITION #101</span></h2>

    <label for="title">Intitulé de l'œuvre <small>1 à 150 car.</small></label>
    <input type="search" id="title" name="titre" placeholder="Blade Runner 2049" >

    <label>Type de média</label>
    <div class="tabs">
            <button class="chosen" >Film</button>
            <button>Série</button>
            <button>Jeu vidéo</button>
    </div>

    <label for="year">Année de sortie <small>Statut initial</small></label>
    <div class="year">
        <input type ='search' id="year" name="annee" placeholder="2017">
        <span class="tag warning">⚠ À DÉCOUVRIR</span>
    </div>

    <label>Visuel de l'affiche <small>format 2:3</small></label>
    <div class="upload">
        ▧<br>
        <u>Visuel de l'affiche</u>
        <small>PNG ou JPEG recommandé</small>
    </div>

    <label for="synopsis">Synopsis</label>
    <input type='search' id="synopsis" name="description" placeholder ='Dans Ville-neuve : enquête néo-noire réplicante à Los Angeles.'>

    <div class="form-actions">
        <button class="secondary">Annuler l'édition</button>
        <button class="lilac">↻ Fiche #101</button>
    </div>
</article>
</form>
