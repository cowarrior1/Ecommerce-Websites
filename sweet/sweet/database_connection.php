<?php

$conection=mysql_connect("localhost","root","");
$db_selected=mysql_select_db("cupcakes",$conection);



//Check for table exits

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  mysql_query("CREATE DATABASE cupcakes");


mysql_query("


CREATE TABLE IF NOT EXISTS `forms_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



	");

}


mysql_query("


CREATE TABLE IF NOT EXISTS `forms_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(20) NOT NULL,
    `item_name` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



	");



?>