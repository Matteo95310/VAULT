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










