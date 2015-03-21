<?php 
	$req = $dbh->query("SELECT * FROM " . TABLE_AFFICHE .' , '. TABLE_IMAGE . " ");
	$donnees = $req->fetchAll();

//Series
	$req = $dbh->query("SELECT * FROM " . TABLE_SERIE . "  LIMIT 8 ");
	$topSerie = $req->fetchAll();

	$req = $dbh->query("SELECT sp_video.*,  sp_image.img,  sp_image.id_serie FROM sp_video LEFT OUTER JOIN  sp_image ON  sp_image.id_serie = sp_video.id_serie ORDER BY sp_video.id_serie DESC LIMIT 8");
	$dernieresSeries = $req->fetchAll();


	$req = $dbh->query("SELECT nom, contenu, img FROM " . TABLE_SERIENEWS . " ");
	$serieNews = $req->fetchAll();

//Films

	$req = $dbh->query("SELECT sp_video.*,  sp_image.img,  sp_image.id_film FROM sp_video LEFT OUTER JOIN  sp_image ON  sp_image.id_film = sp_video.id_film ORDER BY sp_video.id_film DESC LIMIT 8");
	$dernierFilms = $req->fetchAll();

	$req = $dbh->query("SELECT nom, contenu, img FROM " . TABLE_CINENEWS . " ");
	$cineNews = $req->fetchAll();