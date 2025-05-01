CREATE DATABASE if not exists hackaton;

USE hackaton;

CREATE TABLE users(
    id INT PRIMARY KEY,
    name CHAR(100),
    email CHAR(100),
    password_hash CHAR(50),
    created_at DATE
    height int,
    weight float
);

create table daily_entries(
    id INT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    entry_date DATE,
    created_at DATETIME
);

CREATE TABLE nutrition_entries (
    id INT PRIMARY KEY,
    daily_entry_id INT,
    fruits ENUM('none', 'once', 'more_than_once'),
    vegetables ENUM('none', 'once', 'more_than_once'),
    ultra_processed ENUM('none', 'once', 'more_than_once'),
        FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id)
);

create table exercise_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    did_exercise boolean,
    duration_minutes int
);

create table water_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id),
    cups_drank int
);

create table sun_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY (daily_entry_id) REFERENCES daily_entries(id),
    exposed boolean,
    duration_minutes int
);

create table temperance_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    drank_alcohol boolean,
    used_tobacco BOOLEAN
);

create table air_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    outdoor_activity boolean
);

create table rest_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    slept_7_8h boolean,
    slept_before_22h boolean
);

create table trust_entries (
    id int PRIMARY KEY,
    daily_entry_id int,
        FOREIGN KEY(daily_entry_id) REFERENCES daily_entries(id),
    spiritual_activity boolean
);
