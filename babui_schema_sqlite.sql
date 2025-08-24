-- SQLite Database Schema for Babui Shop
-- This script creates the necessary tables for the application

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    category TEXT NOT NULL,
    price REAL NOT NULL,
    description TEXT,
    features TEXT,
    is_featured INTEGER DEFAULT 0,
    image TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Admin users table  
CREATE TABLE IF NOT EXISTS admin_users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    email TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin user (password: admin123)
INSERT OR REPLACE INTO admin_users (id, username, password, email) VALUES 
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@example.com');

-- Insert sample products
INSERT OR REPLACE INTO products (id, name, category, price, description, features, is_featured, image) VALUES 
(1, 'Wireless Bluetooth Headphones', 'headphone', 89.99, 'High-quality wireless headphones with noise cancellation', 'Bluetooth 5.0,Noise Cancellation,30-hour battery', 1, '/assets/products/headphones1.jpg'),
(2, 'Smart Fitness Watch', 'watch', 199.99, 'Advanced fitness tracking with heart rate monitor', 'Heart Rate Monitor,GPS,Water Resistant,7-day battery', 1, '/assets/products/watch1.jpg'),
(3, 'Portable Bluetooth Speaker', 'speaker', 59.99, 'Compact speaker with powerful sound', 'Bluetooth 5.0,Waterproof,12-hour battery,Premium Sound', 0, '/assets/products/speaker1.jpg'),
(4, 'Gaming Headset', 'headphone', 129.99, 'Professional gaming headset with surround sound', '7.1 Surround Sound,RGB Lighting,Detachable Microphone', 0, '/assets/products/headphones2.jpg'),
(5, 'Luxury Smart Watch', 'watch', 399.99, 'Premium smartwatch with health monitoring', 'ECG Monitor,Blood Oxygen,Always-on Display,Wireless Charging', 1, '/assets/products/watch2.jpg');