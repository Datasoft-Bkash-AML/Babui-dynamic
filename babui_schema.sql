-- MySQL Database Schema for Babui Shop
-- This script creates the necessary tables for the application

-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS babui;
USE babui;

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    features TEXT,
    is_featured BOOLEAN DEFAULT FALSE,
    image VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Admin users table  
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert default admin user (password: admin123)
INSERT INTO admin_users (username, password, email) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@example.com')
ON DUPLICATE KEY UPDATE username = username;

-- Insert sample products
INSERT INTO products (name, category, price, description, features, is_featured, image) VALUES 
('Wireless Bluetooth Headphones', 'headphone', 89.99, 'High-quality wireless headphones with noise cancellation', 'Bluetooth 5.0,Noise Cancellation,30-hour battery', true, '/assets/products/headphones1.jpg'),
('Smart Fitness Watch', 'watch', 199.99, 'Advanced fitness tracking with heart rate monitor', 'Heart Rate Monitor,GPS,Water Resistant,7-day battery', true, '/assets/products/watch1.jpg'),
('Portable Bluetooth Speaker', 'speaker', 59.99, 'Compact speaker with powerful sound', 'Bluetooth 5.0,Waterproof,12-hour battery,Premium Sound', false, '/assets/products/speaker1.jpg'),
('Gaming Headset', 'headphone', 129.99, 'Professional gaming headset with surround sound', '7.1 Surround Sound,RGB Lighting,Detachable Microphone', false, '/assets/products/headphones2.jpg'),
('Luxury Smart Watch', 'watch', 399.99, 'Premium smartwatch with health monitoring', 'ECG Monitor,Blood Oxygen,Always-on Display,Wireless Charging', true, '/assets/products/watch2.jpg')
ON DUPLICATE KEY UPDATE name = name;