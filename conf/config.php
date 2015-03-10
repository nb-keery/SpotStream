<?php $dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));

// chemin du site
define("PATH_IMG",				"img/");

// nom des tables de la base
define("TABLE_IMAGE", 			"sp_image");
define("TABLE_AFFICHE",			"sp_affiche");