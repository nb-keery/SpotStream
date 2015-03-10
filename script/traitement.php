<?php 
	$req = $dbh->query("SELECT * FROM " . TABLE_AFFICHE .' , '. TABLE_IMAGE . "
						WHERE id = id_image");
	$donnees = $req->fetchAll();