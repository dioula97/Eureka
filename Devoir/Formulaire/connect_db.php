<?php


$serveur = "localhost";
$login = "root";
$passwd = "test";
$dbname = "school";

	$connect = new PDO('mysql:host='.$serveur.';dbname='.$dbname.';charset=utf8',$login,$passwd);
 	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>