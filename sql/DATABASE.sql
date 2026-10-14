CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    password_hash VARCHAR(50) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT TRUE,
    best_score INT UNSIGNED NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;


CREATE TABLE categories (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL
) ENGINE = InnoBD


CREATE TABLE medias (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id VARCHAR(120) NOT NULL,
    release_year DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    desscription TEXT NULL,
    image_path VARCHAR(255)

    FOREIGN KEY (category_id)
        REFERENCES  categories(id)
) ENGINE = INNODB;


CREATE TABLE user_medias (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(120) NOT NULL UNIQUE,
    status ENUM('planned','in_progress','completed') NOT NULL,
    rating INT NOT NULL,
    CHECK rating BETWEEN 1 AND 5

    FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,
) ENGINE = InnoDB; 

CREATE TABLE badges (
    id INT unsigned auto_increment PRIMARY KEY,
    code VARCHAR(120) NOT NULL UNIQUE,
    name VARCHAR(120) NOT NULL,
    description VARCHAR(120),
) ENGINE = InnoDB;


CREATE TABLE user_badges (
    id INT unsigned auto_increment PRIMARY KEY,
    user_id VARCHAR(120) NOT NULL UNIQUE,
    badge_id INT unsigned auto_increment PRIMARY KEY UNIQUE,
    awarded_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,

    FOREIGN KEY(badge_id)
        REFERENCES badges(id)
        ON DELETE CASCADE,
) ENGINE = InnoDB;
