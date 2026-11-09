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
            <form method="POST" action="assets/actions/collection_action.php">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                <input type="hidden" name="media_id" value="<?= (int) $result['id'] ?>">
                <button type="submit">Ajouter à ma collection</button>
            </form>
        </div>
    </div>
</article>