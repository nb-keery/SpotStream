<?php 
	$req = $dbh->query("SELECT * FROM ". TABLE_AFFICHE ."
						 ORDER BY RAND() LIMIT 4");
	$donnees = $req->fetchAll();

	$req = $dbh->query("SELECT * FROM " .TABLE_FILM . "
						 ORDER BY RAND() LIMIT 5");
	$BA = $req->fetchAll();