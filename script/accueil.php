<?php 
	$req = $dbh->query("SELECT * FROM " . TABLE_AFFICHE .' , '. TABLE_IMAGE . "
						WHERE id = id_image
						 ORDER BY RAND() LIMIT 4");
	$donnees = $req->fetchAll();