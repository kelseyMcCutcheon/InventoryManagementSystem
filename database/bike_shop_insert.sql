drop database if exists bike_shop;
create database bike_shop;

use bike_shop;

DROP TABLE IF EXISTS parts;
CREATE TABLE IF NOT EXISTS parts (
  part_id varchar(6) NOT NULL,
  vendor_id int NOT NULL,
  product_id varchar(4) NOT NULL,
  part_name varchar(255) NOT NULL,
  part_price decimal(10,2) NOT NULL,
  stock int NOT NULL,
  PRIMARY KEY (part_id),
  KEY vendors_fk_parts (vendor_id),
  KEY items_fk_products (product_id)
);

INSERT INTO parts (part_id, vendor_id, product_id, part_name, part_price, stock) VALUES
('BF2001', '101', 'L705', 'bike frame - cruising bike', '175.00', 1),
('F0235', '202', 'M023', 'bike frame - mountain', '600.00', 1),
('F9870', '202', 'L705', 'bike frame - L705', '625.00', 1),
('BF452', '303', 'B125', 'bike frame - racing', '550.00', 1),
('F6431', '202', 'B125', 'bike frame - racing', '450.00', 1),
('BF1478', '101', 'W952', 'bike frame - W952', '90.00', 1),
('F9632', '202', 'W952', 'bike frame - W952', '625.00', 1),
('S258', '202', 'L705', 'bike seat - L705', '45.00', 1),
('BT852', '303', 'L705', 'front- tire - L705', '550.00', 1),
('BT987', '303', 'M023', 'front tire - mountain', '45.00', 1),
('BT9635', '101', 'B125', 'front tire - racing', '175.00', 1),
('BT4697', '202', 'W952', 'front tire - W952', '45.00', 1),
('C3402', '303', 'M023', 'front tire - M023', '200.00', 1),
('CS3214', '202', 'W952', 'front tire - W952', '250.00', 1),
('K98', '202', 'B125', 'front tire - B125', '190.00', 1),
('S0023', '101', 'L705', 'front tire - L705', '175.00', 1);

DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
  product_id varchar(4) NOT NULL,
  product_name varchar(255) NOT NULL,
  description text NOT NULL,
  list_price decimal(10,2) NOT NULL,
  stock int NOT NULL,
  PRIMARY KEY (product_id)
);

--
-- Dumping data for table products
--

INSERT INTO products (product_id, product_name, description, list_price, stock) VALUES
('W952', 'The Road Warrior', 'Take this on the quiet back roads or through tough terrain.', '2500.00', 1),
('B125', 'Racing Bike', 'Our premier racing bike.', '2.00', 1),
('M023', 'Premier Mountain Bike',	'This bike will have you scaling new heights.',	'780.00', 1),
('L705', 'Cruising Bike', 'For the those who enjoy a causal bike ride.', '2500.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table sellers
--

DROP TABLE IF EXISTS sellers;
CREATE TABLE IF NOT EXISTS sellers (
  seller_id int NOT NULL AUTO_INCREMENT,
  vendor_id int NOT NULL,
  sell_name varchar(60) NOT NULL,
  phone varchar(12) DEFAULT NULL,
  email_address varchar(255) NOT NULL,
  PRIMARY KEY (seller_id),
  KEY sellers_fk_vendors (vendor_id)
);

-- --------------------------------------------------------
-- I'll come back to finish this
INSERT INTO sellers (seller_id, vendor_id, sell_name, phone, email_address) VALUES
(1, '101',	'Speedster','Elliot Jones', '',	'ejones@speedster.com'),
(2, '101',	'Speedster','Elliot Jones', '',	'ejones@speedster.com');
--
-- Table structure for table users
--

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  user_id int NOT NULL AUTO_INCREMENT,
  email_address varchar(255) NOT NULL,
  PASSWORD varchar(255) NOT NULL,
  user_type tinyint(1) NOT NULL,
  PRIMARY KEY (user_id)
);

-- --------------------------------------------------------

--
-- Table structure for table vendor
--

DROP TABLE IF EXISTS vendor;
CREATE TABLE IF NOT EXISTS vendor (
  vendor_id int NOT NULL,
  vendor_name varchar(60) NOT NULL,
  line1 varchar(60) NOT NULL,
  city varchar(40) NOT NULL,
  state varchar(2) NOT NULL,
  zip_code varchar(10) NOT NULL,
  PRIMARY KEY (vendor_id)
);