-- SQL script to create a table for storing contact messages from the Contact Us form

CREATE DATABASE IF NOT EXISTS CodeToDream;

USE CodeToDream;

CREATE TABLE IF NOT EXISTS contact_us (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Add some sample data for testing
INSERT INTO contact_us (name, email, message) 
VALUES 
('John Doe', 'john@example.com', 'I am interested in your website services.'),
('Jane Smith', 'jane@example.com', 'Can you help with mobile app development?');
