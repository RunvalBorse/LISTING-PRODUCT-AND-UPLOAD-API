/* CREATION OF DATABASE */
CREATE DATABASE mydb;
use mydb;

/* CREATION OF PRODUCT TABLE IN DATABASE*/
CREATE TABLE `Product` (
  `product_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  `product_name` varchar(100),
  `product_price` float,
  `product_quantity` float,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
);



