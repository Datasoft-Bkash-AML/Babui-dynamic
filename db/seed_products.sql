-- Seed file for products table (MySQL)
-- Inferred schema based on view usage: id, name, category, price, is_featured, image, description, features

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) DEFAULT NULL,
  `price` DECIMAL(10,2) DEFAULT '0.00',
  `is_featured` TINYINT(1) DEFAULT 0,
  `image` VARCHAR(512) DEFAULT NULL,
  `description` TEXT DEFAULT NULL,
  `features` TEXT DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data with generic web images
INSERT INTO `products` (`name`, `category`, `price`, `is_featured`, `image`, `description`, `features`) VALUES
('Product A', 'Category 1', 10.99, 1, 'https://picsum.photos/id/101/300/200', 'Sample product A description.', 'feature1,feature2'),
('Product B', 'Category 2', 15.49, 0, 'https://picsum.photos/id/102/300/200', 'Sample product B description.', 'featureA,featureB'),
('Product C', 'Category 1', 20.00, 1, 'https://picsum.photos/id/103/300/200', 'Sample product C description.', 'featureX,featureY');