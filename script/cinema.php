<?php 
	$req = $dbh->query("SELECT * FROM ". TABLE_AFFICHE ." LEFT OUTER JOIN ". TABLE_IMAGE ." ON ". TABLE_AFFICHE .".id = ". TABLE_IMAGE.".id ");
	$donnees = $req->fetchAll();