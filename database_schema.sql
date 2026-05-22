CREATE TABLE IF NOT EXISTS users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  user_firstname VARCHAR(100),
  user_lastname VARCHAR(100),
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS category (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS furniture (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(180) NOT NULL,
  description TEXT,
  price DECIMAL(10,2) DEFAULT 0,
  f_condition VARCHAR(80),
  categoryId INT,
  image_name TEXT,
  images INT DEFAULT 0,
  seen_status CHAR(1) DEFAULT 'Y',
  date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image_name VARCHAR(255),
  product_name VARCHAR(180)
);

CREATE TABLE IF NOT EXISTS offer (
  id INT AUTO_INCREMENT PRIMARY KEY,
  o_name VARCHAR(180) NOT NULL,
  product_id INT,
  discount INT DEFAULT 0,
  o_update VARCHAR(255),
  seen_status CHAR(1) DEFAULT 'Y'
);

CREATE TABLE IF NOT EXISTS enquiry (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  email VARCHAR(180) NOT NULL,
  tel_no VARCHAR(50),
  enquiry TEXT,
  status CHAR(1) DEFAULT 'N'
);

INSERT IGNORE INTO users (user_id, user_firstname, user_lastname, username, password)
VALUES (1, 'Admin', 'User', 'admin', 'admin');
