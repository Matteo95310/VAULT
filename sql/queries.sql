/**************
● Une requête liste les œuvres d’un utilisateur avec leur titre, leur 
catégorie, leur statut et leur note.
********************/


SELECT M.title, UM.medias_id, UM.status, UM.rating, C.name as category
FROM user_medias as UM
LEFT JOIN medias as M
    ON UM.medias_id = M.id
LEFT JOIN categories as C 
    ON M.category_id = C.id
WHERE UM.user_id = 1;


/******************
● Une requête compte les œuvres d’un utilisateur par statut.
******************/

SELECT UM.status, COUNT(status) 
FROM user_medias as UM
WHERE  UM.user_id = 1
GROUP BY status;

/************************
● Une requête calcule la note moyenne d’un utilisateur en ignorant 
les notes absentes ; sans note, le résultat est identifié comme une 
absence de moyenne.
**************************/

SELECT AVG(UM.rating) as average 
FROM user_medias as UM
WHERE UM.user_id = 1;




/************************
 Calculee les XP 
**************************/

SELECT CASE
    WHEN COUNT(*) = 0 THEN 0
    ELSE SUM(
        CASE
            WHEN UM.status = 'completed' THEN 35
            WHEN UM.status = 'in_progress' THEN 10
            WHEN UM.status = 'planned' THEN 15
            ELSE 0
        END
    )
END AS total_xp
FROM user_medias AS UM
WHERE UM.user_id = 1;

 une collection vide donne 0 et le jeu 
de test principal donne 135. 

 
/************************
Niveau de progression
**************************/

SELECT total_xp DIV 5 AS level,
       total_xp MOD 5 AS progress,
       total_xp
FROM (
    SELECT CASE
        WHEN COUNT(*) = 0 THEN 0
        ELSE SUM(
            CASE
                WHEN UM.status = 'completed' THEN 35
                WHEN UM.status = 'in_progress' THEN 10
                WHEN UM.status = 'planned' THEN 15
                ELSE 0
            END
        )
    END AS total_xp
    FROM user_medias AS UM
    WHERE UM.user_id = 1
) AS calcul;


/************************
● Des requêtes identifient les utilisateurs éligibles à chacun des quatre 
badges.

Badge collector : au moins 5 œuvres
**************************/

SELECT u.id, u.username
FROM users AS u
JOIN user_medias AS UM ON UM.user_id = u.id
GROUP BY u.id, u.username
HAVING COUNT(*) >= 5;

/************************
Badge cinephile : au moins 3 films terminés
**************************/
SELECT u.id, u.username
FROM users AS u
JOIN user_medias AS UM ON UM.user_id = u.id
JOIN medias AS M ON M.id = UM.medias_id
JOIN categories AS C ON C.id = M.category_id
WHERE UM.status = 'completed'
AND C.name = 'film'
GROUP BY u.id, u.username
HAVING COUNT(*) >= 3;

/************************
Badge gamer : au moins 3 jeux vidéo terminés
**************************/
SELECT u.id, u.username
FROM users AS u
JOIN user_medias AS UM ON UM.user_id = u.id
JOIN medias AS M ON M.id = UM.medias_id
JOIN categories AS C ON C.id = M.category_id
WHERE UM.status = 'completed'
AND C.name = 'jeux video'
GROUP BY u.id, u.username
HAVING COUNT(*) >= 3;

/************************
Badge explorer : score d'au moins 15
**************************/
SELECT id, username
FROM users
WHERE best_score >= 15;