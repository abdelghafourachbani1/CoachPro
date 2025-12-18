CREATE DATABASE coachpro;
USE coachpro;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('athlete','coach') NOT NULL
);

CREATE TABLE coach_profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    description TEXT,
    experience_years INT NOT NULL,
    certifications VARCHAR(255),
    photo VARCHAR(255) NOT NULL,

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE sports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sport_name VARCHAR(50) NOT NULL
);

CREATE TABLE coach_sports (
    coach_profile_id INT NOT NULL,
    sport_id INT NOT NULL,

    PRIMARY KEY (coach_profile_id, sport_id),
    FOREIGN KEY (coach_profile_id) REFERENCES coach_profiles(id) ON DELETE CASCADE,
    FOREIGN KEY (sport_id) REFERENCES sports(id) ON DELETE CASCADE
);

CREATE TABLE availabilities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    coach_profile_id INT NOT NULL,
    date_avb DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    status ENUM('available','booked') DEFAULT 'available',

    FOREIGN KEY (coach_profile_id) REFERENCES coach_profiles(id) ON DELETE CASCADE
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    athlete_id INT NOT NULL,
    coach_profile_id INT NOT NULL,
    availability_id INT NOT NULL,
    status ENUM('pending','accepted','rejected','cancelled') DEFAULT 'pending',

    FOREIGN KEY (athlete_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (coach_profile_id) REFERENCES coach_profiles(id) ON DELETE CASCADE,
    FOREIGN KEY (availability_id) REFERENCES availabilities(id) ON DELETE CASCADE
);