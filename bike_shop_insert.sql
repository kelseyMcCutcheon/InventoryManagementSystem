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
('B125', 'Racing Bike', 'Our premier racing bike.', '2.00', 1);

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