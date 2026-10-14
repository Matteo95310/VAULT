CREATE TABLE IF NOT EXISTS users  (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    password_hash VARCHAR(50) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT TRUE,
    best_score INT UNSIGNED NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS categories (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS medias (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id INT UNSIGNED NOT NULL,
    release_year INT NULL,
    desscription TEXT NULL,
    image_path VARCHAR(255),
    
	FOREIGN KEY (category_id)
		REFERENCES categories(id)
		ON DELETE RESTRICT
    
)ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS user_medias (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED NOT NULL,
    medias_id INT UNSIGNED NOT NULL,
    status ENUM('planned','in_progress','completed') NOT NULL,
    rating INT NULL CHECK (rating BETWEEN 1 AND 5),
    
    FOREIGN KEY(user_id)
    	REFERENCES users(id)
    	ON DELETE CASCADE,
    
    FOREIGN KEY(medias_id)
    	REFERENCES medias(id)
    	ON DELETE CASCADE
) ENGINE = InnoDB; 

CREATE TABLE IF NOT EXISTS badges (
    id INT unsigned auto_increment PRIMARY KEY,
    code VARCHAR(120) NOT NULL UNIQUE,
    name VARCHAR(120) NOT NULL,
    description VARCHAR(120)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS user_badges (
    id INT unsigned auto_increment PRIMARY KEY,
    user_id INT UNSIGNED NOT NULL,
    badge_id INT UNSIGNED,
    awarded_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    FOREIGN KEY(badge_id)
        REFERENCES badges(id)
        ON DELETE CASCADE
) ENGINE = InnoDB;