CREATE DATABASE if not exists hackaton;

USE hackaton;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100),
    email CHAR(100),
    password_hash CHAR(50),
    created_at DATE,
    height INT,
    weight FLOAT
);

CREATE TABLE daily_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    entry_date DATE,
    created_at DATETIME
);

CREATE TABLE nutrition_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    fruits ENUM('none', 'once', 'more_than_once'),
    vegetables ENUM('none', 'once', 'more_than_once'),
    ultra_processed ENUM('none', 'once', 'more_than_once'),
    FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id)
);

CREATE TABLE exercise_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    did_exercise BOOLEAN,
    duration_minutes INT
);

CREATE TABLE water_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id),
    cups_drank INT
);

CREATE TABLE sun_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id),
    exposed BOOLEAN,
    duration_minutes INT
);

CREATE TABLE temperance_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    drank_alcohol BOOLEAN,
    used_tobacco BOOLEAN
);

CREATE TABLE air_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    outdoor_activity BOOLEAN
);

CREATE TABLE rest_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    slept_7_8h BOOLEAN,
    slept_before_22h BOOLEAN
);

CREATE TABLE trust_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    daily_entry_id INT,
    FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    spiritual_activity BOOLEAN
);
