-- Create Database
CREATE DATABASE IF NOT EXISTS contact_form_db;
USE contact_form_db;

-- Create Table
CREATE TABLE IF NOT EXISTS contact_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    date_of_birth DATE,
    message TEXT,
    latitude VARCHAR(50),
    longitude VARCHAR(50),
    photo LONGBLOB,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
