SELECT
    medias.title AS titre,
    categories.name AS categorie,
    user_medias.status AS statut,
    user_medias.rating AS note
FROM user_medias
JOIN medias ON user_medias.medias_id = medias.id
JOIN categories ON medias.category_id = categories.id
WHERE user_medias.user_id = 1;

