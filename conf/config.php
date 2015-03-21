<?php $dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));

// chemin du site
define("PATH_IMG",				"img/");

// nom des tables de la base
define("TABLE_AFFICHE",			"sp_affiche");
define("TABLE_FILM",			"sp_film");
define("TABLE_GENRE",			"sp_genre");
define("TABLE_IMAGE", 			"sp_image");
define("TABLE_SERIE",			"sp_serie");
define("TABLE_CINENEWS",			"sp_cineNews");
define("TABLE_VIDEO", 			"sp_video");
define("TABLE_SERIENEWS",			"sp_serieNews");