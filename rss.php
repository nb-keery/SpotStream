<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>RSS</title>
		<link rel="shortcut icon" href="img/clap-cinema.png" type="image/x-icon" />
	</head>

<?php 
// recuperation des informations d'un flux rss
// lien cinema
// a l'affiche
$url1 ="http://rss.allocine.fr/ac/cine/alaffiche";
// prochainement
$url2 ="http://rss.allocine.fr/ac/cine/prochainement";
// top consultation
$url3 ="http://rss.allocine.fr/ac/cine/topfilms";
// sortie de la semaine
$url4 ="http://rss.allocine.fr/ac/cine/cettesemaine";


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/cine/alaffiche");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$contenu = curl_exec($curl);
$xml = new simpleXMLElement($contenu);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/cine/prochainement");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($curl);
$xml = new simpleXMLElement($xml);

 ?>

<?php
	$dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));

	// $dbh->exec("TRUNCATE TABLE `sp_affiche`");
	// $dbh->exec("TRUNCATE TABLE `sp_image`");
	// $dbh->exec("TRUNCATE TABLE `sp_affichevideo`");
	// $dbh->exec("TRUNCATE TABLE `sp_film`");

 	foreach ($xml->channel->item as $v){
	//  $description = $v->description;
	// 	$titre = $v->title;
	// 	$titre = explode("titre", $titre)[0];
	// 	$titre = substr($titre, 0);

	// 	$duree = explode("(", $description)[1];
	// 	$duree = substr($duree, 0, 5);

 	//	$synopsis = explode("- ", $description)[1];
 	//	$synopsis = explode("</p>", $synopsis)[0];



	// 	if(strstr($description, "<br>Avec ", true)):
	// 	$nbActeur = explode("<br>Avec ", $description)[1];
	// 	$nbActeur = explode("<br>", $nbActeur)[0];
	// 	$nbActeur = explode("title='", $nbActeur);
	// 	$acteurs = '';
	// 	 for ($i=1; $i < count($nbActeur) ; $i++) :
	// 	 	$acteurIndice = $nbActeur[$i];
	// 	 	if($i == 1) $acteurs = explode("'>", $acteurIndice)[0];
	// 		else $acteurs = $acteurs.', '.explode("'>", $acteurIndice)[0];
	// 	 endfor;
	// 	else:
	// 		$realisateur = '';
	// 	endif;

	// 	$realisateur = explode("Un film de", $description)[1];
	// 	$realisateur = explode("title='", $realisateur)[1];
	// 	$realisateur = explode("'>", $realisateur)[0];

	// 	$img = $v->enclosure['url'];
	//  	$img = explode(' ', $img)[0];


	// 	$idVideo = explode("|", $description)[2];
	// 	$idVideo = explode("cmedia=", $idVideo)[1];
	// 	$idVideo = explode(".html", $idVideo)[0];
 	// $nouveauxFilms = $v->title;
 	// $nouveauxFilms = explode("'", $nouveauxFilms)[0];
		
	// $nouveauxFilms = $v->title;
 	// 	$nouveauxFilms = explode("'", $nouveauxFilms)[0];
		

 	// 	$synopsisFilm = $v->description;
	// 	$synopsisFilm = explode("- ", $synopsisFilm)[1];
 	// 	$synopsisFilm = explode("</p>", $synopsisFilm)[0];

 		$bandeAnnonce = $v->description;
 		$bandeAnnonce = explode("Bandes-annonces", $bandeAnnonce);

 		var_dump($bandeAnnonce);

	// $req = $dbh->prepare("INSERT INTO sp_affiche(titre, duree, realisateur, acteur, synopsis) VALUES(:titre, :duree, :realisateur, :acteur, :synopsis)");
	// $req->execute(array(
	// "titre" => $titre,
	// "duree" => $duree,
	// "realisateur" => $realisateur,
	// "acteur" => $acteurs,
 	// "synopsis" => $synopsis));

 	// $req = $dbh->prepare("INSERT INTO sp_image(img) VALUES(:img)");
	// $req->execute(array(
	// "img" => $img));
	 
	// $req = $dbh->prepare("INSERT INTO sp_affichevideo(affichevideo) VALUES(:affichevideo)");
	// $req->execute(array(
	// "affichevideo" => $idVideo));
	// 

	// $req = $dbh->prepare("INSERT INTO sp_film(titre, synopsis) VALUES(:titre, :synopsis)");
	// $req->execute(array(
	// "titre" => $nouveauxFilms,
 // 		"synopsis" => $synopsisFilm));
	}?>


</html>

