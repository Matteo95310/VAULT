/***********************************
MATTEO
***********************************/

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

<!--------------------code assya----------------->

CREATE TABLE media (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id VARCHAR(120) NOT NULL,
    release_year DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    desscription TEXT NULL,
    image_path VARCHAR(255)
) ENGINE = INNODB;


CREATE TABLE user_media (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(120) NOT NULL UNIQUE,
    status VARCHAR(120) NOT NULL,
    rating TEXT NULL
) ENGINE = InnoDB; 

CREATE TABLE Badge (
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
)