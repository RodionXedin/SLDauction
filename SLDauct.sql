/*
Date: 2012-03-26 14:19:00
*/

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  username text NOT NULL,
  firstname text NOT NULL,
  secondname text NOT NULL,
  regkey text NOT NULL,
  regdate date NOT NULL,
  confirationdate date DEFAULT NULL,
  password text NOT NULL,
  email text NOT NULL,
  address text NOT NULL,
  PRIMARY KEY (ID)
) DEFAULT CHARSET=utf8;
-- ----------------------------
-- Table structure for categories
-- ----------------------------
CREATE TABLE categories (
  id int(11) NOT NULL AUTO_INCREMENT,
  name text NOT NULL,
  description text NOT NULL,
  PRIMARY KEY(ID)
) DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for items
-- ----------------------------

CREATE TABLE items (
  id int(11) NOT NULL AUTO_INCREMENT,
  owner_id int(11) NOT NULL REFERENCES users(id),
  category_id int(11) NOT NULL REFERENCES categories(id),
  price double NOT NULL,
  income_date date NOT NULL,
  period int(11) NOT NULL,
  description longtext,
  manufacturer text NOT NULL,
  name text NOT NULL,
  condition varchar(255) DEFAULT NULL,
  last_bid_id int(11) REFERENCES users(id),
  last_bid int(11),
  PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;
