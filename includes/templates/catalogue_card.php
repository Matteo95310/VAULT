<article class="card">
    <img src="<?= $result['image_path']; ?> " alt="Image de <?= $result['title']; ?> ">

    <div class="content">
        <div class="info"><?= $result['release_year']; ?></div>

        <h2><?= $result['title']; ?></h2>

        <p>
            <?= $result['description']; ?>
        </p>

        <div class="evaluation">
            <span>ÉVALUATION :</span>
            <span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
        </div>

        <div class="buttons">
            <button>Statut : Terminé</button>
            <button>Dans la loge</button>
        </div>
    </div>
</article>