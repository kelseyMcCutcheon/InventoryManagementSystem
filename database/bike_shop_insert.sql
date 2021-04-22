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
('S0023', '101', 'L705', 'front tire - L705', '175.00', 1),
('J8790', '202', 'M023', 'handle bar - M023', '120.00', 1),
('S2301', '303', 'W952', 'handle bar - W952', '120.00', 1),
('S124', '202', 'L705', 'handle bar - L705', '90.00', 1),
('S1029', '101', 'B125', 'handle bar - B125', '90.00', 1),
('S3297', '101', 'L705', 'bike seat - L705', '60.00', 1),
('S4501', '101', 'W952', 'bike seat - W952', '50.00', 1),
('S267', '101', 'M023', 'bike seat - M023', '50.00', 1),
('S678', '101', 'B125', 'bike seat - B125', '60.00', 1),
('BP0504', '202', 'W952', 'bike pedals - W952', '600.00', 1),
('BP9802', '202', 'M023', 'bike pedals - M023', '450.00', 1),
('BP301', '101', 'L705', 'bike pedals - L705', '90.00', 1),
('BP942', '101', 'B125', 'bike pedals - B125', '50.00', 1),
('RTW025', '101', 'M023', 'rear tire w/chain & mount - M023', '175.00', 1),
('RTW985', '202', 'B125', 'rear tire w/chain & mount - B125', '600.00', 1),
('RTW7135', '202', 'L705', 'rear tire w/chain & mount - L705', '625.00', 1),
('RT7391', '303', 'W952', 'rear tire w/chain & mount - W952', '550.00', 1),
('BDR001', '202', 'M023', 'derailleurs w/cables - M023', '450.00', 1),
('BDR510', '101', 'L705', 'derailleurs w/cables - L705', '90.00', 1),
('BDT311', '202', 'B125', 'derailleurs w/cables - B125', '625.00', 1),
('BDT888', '202', 'W952', 'derailleurs w/cables - W952', '45.00', 1),
('FF45', '303', 'L705', 'front & rear fenders - L705', '550.00', 1),
('FF99', '303', 'W952', 'front & rear fenders - W952', '45.00', 1),
('BBS087', '101', 'M023', 'brake systems w/cables - M023', '175.00', 1),
('BBS986', '202', 'L705', 'brake systems w/cables - L705', '45.00', 1),
('BBS055', '303', 'B125', 'brake systems w/cables - B125', '200.00', 1),
('BBS777', '202', 'W952', 'brake systems w/cables - W952', '250.00', 1),
('BR7896', '202', 'W952', 'reflectors - W952 bike', '190.00', 1),
('BR4563', '101', 'B125', 'reflectors - B125 bike', '175.00', 1),
('BR0021', '202', 'L705', 'reflectors - L705 bike', '120.00', 1),
('BR9164', '303', 'M023', 'reflectors - M023 bike', '190.00', 1);

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
 ('1', '101','Elliot Jones', null,	'ejones@speedster.com'),
 ('2', '202', 'Sally Saw', '888-865-6547', 'ss@acme.com'),
 ('3', '202', 'Steve Perez', '888-865-1235', 'sp@acme.com'),
 ('4', '303', 'John Cuts', '800-654-9874', 'jc@gmail.com'),
 ('5', '202', 'Jane Smith', '888-865-4569', 'js@acme.com'),
 ('6', '101', 'Mary Course', null, 'mcourse@speedster.com'),
 ('7', '101', 'Sarah Hopkins', null, 'shopkins@speedster.com');
--
-- Table structure for table users
--

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  user_id int NOT NULL AUTO_INCREMENT,
  email_address varchar(255) NOT NULL,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
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

INSERT INTO vendor (vendor_id, vendor_name, line1, city, state, zip_code) VALUES
('101', 'Speedster', '42 West Overland Drive', 'Augusta', 'ME', '04333'),
('202', 'Acme', '100 Mountain View Road', 'Colchester', 'VT', '05446'),
('303', 'Widget', '1 Main Street Suite 4A', 'Manchester', 'NH', '03108');