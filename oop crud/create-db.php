<?php 


include 'DbConfig.php';


create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);


if(mysqli_query($connect, $pages)){
	echo "Database Table Created";
} else{
	echo "There is an error";
}





?>