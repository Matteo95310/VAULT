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
 Une requête calcule ses XP ; une collection vide donne 0 et le jeu 
de test principal donne 135. 
**************************/

SELECT AVG(UM.rating) as average 
FROM user_medias as UM
WHERE UM.user_id = 1;

SELECT total_xp DIV 5 AS level,
       total_xp MOD 5 AS in_progress,
       total_xp
FROM (
    SELECT SUM(
        CASE
            WHEN UM.status = 'completed' THEN 35
            WHEN UM.status = 'in_progress' THEN 10
            WHEN UM.status = 'planned' THEN 10
            ELSE 0
        END
    ) AS total_xp
    FROM user_medias AS UM
    WHERE UM.user_id = 1
) AS calcul;

/************************
● Une requête calcule le niveau et la progression à partir des XP.
**************************/
SELECT u.id u.username
FROM user u
JOIN user_medias UM ON um.user_id = u.id
JOIN medias m ON m.id = UM. medias_id
JOIN categories c ON c.id = m.category_id
WHERE UM.status = 'Completed', c.name='film' 
GROUP BY u.id, u.username
HAVING COUNT (*) > = 3;

/************************
● Des requêtes identifient les utilisateurs éligibles à chacun des quatre 
badges.
**************************/
SELECT u.id u.username
FROM users u
JOIN user_medias UM on UM.user_id =u.id
GROUP BY u.id u.username
HAVING COUNT (*) = 5;
