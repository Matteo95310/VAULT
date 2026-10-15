INSERT INTO users(username, email, password_hash, role, best_score) VALUES
    ('Bob', 'Bob@mail.com', 'dfondfnjodf', 'admin', 0 )
    ('Bakary', 'bakary@bofzeb.fr', 'zfgzergz', 'client', 35)
    ('Patrick', 'patrick@zejkguzej.com', 'kljbfkzj', 'client', 35)


INSERT INTO categories (name) VALUES
    ('film'),
    ('serie'),
    ('jeux video')


INSERT INTO medias(category_id, title, release_year, description, image_path) VALUES
    ('1','Men IN Black', '1997', 'https://api.cartoonely.com/media/63f880bd27084_unnamed%20(55).png'),
    ('1', 'Pulp fiction', '1994', 'https://media.gqmagazine.fr/photos/6081757cb17bbf6a1f1be4eb/master/w_1600%2Cc_limit/71zSZQzlK+L._AC_SL1200_.jpg'),
    ('1','La La Land', '2016', 'https://images.affiches-et-posters.com//albums/3/51042/affiche-film-land.jpg'),
    
    ('2', 'Dexter', '2006','https://images.affiches-et-posters.com//albums/3/5010/5010-affiche-serie-tv-dexter.jpg'),
    ('2', 'Breaking Bad', '2008', 'https://images.affiches-et-posters.com//albums/3/3861/medium/3861-poster-serie-tv-breaking-bad.jpg'),
    ('2', 'It', '2025', 'https://club-stephenking.fr/wp-content/uploads/2025/02/it-welcome-to-derry-poster-nouveau-fr-02.webp'),

    ('3','Zelda','2019','https://images.affiches-et-posters.com//albums/3/56146/medium/poster-jeu-video-the-legend-zelda-links-awakening-.'),
    ('3', 'God Of War', '2022', 'https://static.posters.cz/image/350/affiches-et-posters/playstation-god-of-war-i116582.jpg'),
    ('3', 'God Of War II', '2007', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzVDe5OMPJdM1DOYZ-FrwDTRxNopDd6x_nQ65J3FwpnTO4Z4Qn3R3_cXM&s=10'),


INSERT INTO badges(code, name, description) VALUES
    ('1001', 'collector', 'Posséder au moins 5 œuvres dans sa collection personnelle.'),
    ('1002', 'cinephile', "Avoir terminé le visionnage d'au moins 3 films du catalogue."),
    ('1003', 'gamer', 'Avoir terminé au moins 3 jeux vidéo répertoriés.'),
    ('1004', 'explorer', "Enregistrer un score d'au moins 15 au mini-jeu interactif.");


INSERT INTO user_medias (user_id, medias_id, rating, status) VALUES
    (1, 1, 4, 'completed')
    (1, 2, 5, 'completed')
    (1, 3, 3, 'completed')
    (1, 4, 2, 'planned')
    (1, 5, 1, 'planned')
    (2, 2, null, 'planned')
    (1, 9, 5, 'in_progress')
    (3, 5, 1, 'completed')


    


    
    


