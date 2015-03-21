<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>RSS</title>
		<link rel="shortcut icon" href="img/clap-cinema.png" type="image/x-icon" />
	</head>

<?php 

$dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));




// // Affiche
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/cine/alaffiche");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $contenu = curl_exec($curl);
// $xml = new simpleXMLElement($contenu);
// $dbh->exec("TRUNCATE TABLE `sp_affiche`");
// $dbh->exec("TRUNCATE TABLE `sp_image`");

// foreach ($xml->channel->item as $v){
// 		$description = $v->description;
// 		$titre = $v->title;
// 		$titre = explode("titre", $titre)[0];
// 		$titre = substr($titre, 0);

// 		$duree = explode("(", $description)[1];
// 		$duree = substr($duree, 0, 5);

//  		$synopsis = explode("- ", $description)[1];
//  		$synopsis = explode("</p>", $synopsis)[0];

//  		if(strstr($description, "<br>Avec ", true)):
// 		$nbActeur = explode("<br>Avec ", $description)[1];
// 		$nbActeur = explode("<br>", $nbActeur)[0];
// 		$nbActeur = explode("title='", $nbActeur);
// 		$acteurs = '';
// 		 for ($i=1; $i < count($nbActeur) ; $i++) :
// 		 	$acteurIndice = $nbActeur[$i];
// 		 	if($i == 1) $acteurs = explode("'>", $acteurIndice)[0];
// 			else $acteurs = $acteurs.', '.explode("'>", $acteurIndice)[0];
// 		 endfor;
// 		else:
// 			$realisateur = '';
// 		endif;

// 		$realisateur = explode("Un film de", $description)[1];
// 		$realisateur = explode("title='", $realisateur)[1];
// 		$realisateur = explode("'>", $realisateur)[0];

// 		$img = $v->enclosure['url'];
// 	 	$img = explode(' ', $img)[0];

// $req = $dbh->prepare("INSERT INTO sp_affiche(titre, duree, realisateur, acteur, synopsis, lien_image) VALUES(:titre, :duree, :realisateur, :acteur, :synopsis, :lien_image)");
// $req->execute(array(
// "titre" => $titre,
// "duree" => $duree,
// "realisateur" => $realisateur,
// "acteur" => $acteurs,
// "synopsis" => $synopsis,
// "lien_image" => $img)); }

// $req = $dbh->prepare("INSERT INTO sp_image(img) VALUES(:img)");
// $req->execute(array(
// "img" => $img)); }


// //Film
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/cine/prochainement");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $xml = curl_exec($curl);
// $xml = new simpleXMLElement($xml);

// //Série
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/series/top");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $xml = curl_exec($curl);
// $xml = new simpleXMLElement($xml);

// foreach ($xml->channel->item as $v){

// 		$description = $v->description;
// 		$titreSerie = $v->title;
// 		$titreSerie = explode("titre", $titreSerie)[0];
// 		$titreSerie = explode(" - ", $titreSerie)[1]; 


	
	// // $dbh->exec("TRUNCATE TABLE `sp_affichevideo`");
	// // $dbh->exec("TRUNCATE TABLE `sp_film`");
	// // $dbh->exec("TRUNCATE TABLE `sp_topSerie`");


// //Serie News

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/actualites/series");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $xml = curl_exec($curl);
// $xml = new simpleXMLElement($xml);
// $dbh->exec("TRUNCATE TABLE `sp_serieNews`");
 	
// foreach ($xml->channel->item as $v){
// 	$nom = $v->title;

// 	$description = $v->description;
// 	$contenu = explode("- ", $description)[0];
// 	$contenu = explode("<p>&gt;&gt", $description)[0];

// 	$imgSerieNews = $v->enclosure['url'];
// 	$imgSerieNews = explode(' ', $imgSerieNews)[0];

// $req = $dbh->prepare("INSERT INTO sp_serieNews(nom, contenu, img) VALUES(:nom, :contenu, :img)");
// $req->execute(array(
// "nom" => $nom,
// "contenu" => $contenu,
// "img" => $imgSerieNews)); }

// //Films News

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/actualites/cine");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($curl);
$xml = new simpleXMLElement($xml);
$dbh->exec("TRUNCATE TABLE `sp_cinenews`");
 	
foreach ($xml->channel->item as $v){
	$nom = $v->title;

	$description = $v->description;
	$contenu = explode("- ", $description)[0];
	$contenu = explode("<p>&gt;&gt", $description)[0];

	$imgCineNews = $v->enclosure['url'];
	$imgCineNews = explode(' ', $imgCineNews)[0];

$req = $dbh->prepare("INSERT INTO sp_cinenews(nom, contenu, img) VALUES(:nom, :contenu, :img)");
$req->execute(array(
"nom" => $nom,
"contenu" => $contenu,
"img" => $imgCineNews)); }





	 	// $synopsis = explode("</p>", $synopsis)[0];
		// $titre = explode("titre", $titre)[0];

		
		// $idVideo = explode("|", $description)[2];
		// $idVideo = explode("cmedia=", $idVideo)[1];
		// $idVideo = explode(".html", $idVideo)[0];
 	// 	$nouveauxFilms = $v->title;
 	// 	$nouveauxFilms = explode("'", $nouveauxFilms)[0];
		
		// $nouveauxFilms = $v->title;
 	// 	$nouveauxFilms = explode("=", $nouveauxFilms)[0];
 	// 	var_dump($nouveauxFilms);
		

 	// 	$synopsisFilm = $v->description;
		// $synopsisFilm = explode("- ", $synopsisFilm)[1];
 	// 	$synopsisFilm = explode("</p>", $synopsisFilm)[0];

 		// $bandeAnnonce = $v->description;
 		// if(strstr($bandeAnnonce, "Bandes-annonces", true)):
 		// $bandeAnnonce = explode("Bandes-annonces", $bandeAnnonce)[0];
 		// $bandeAnnonce = explode("cmedia=", $bandeAnnonce)[1];
 		// $annonce= '';
 		// for ($a=0; $a < count($bandeAnnonce); $a++) : 
 		// 	$annonceIndice = $bandeAnnonce[$a];
 		// 	if($a == 1) $annonce = explode("&cfilm", $annonceIndice)[0];
	 	// 	else $annonce = explode("&cfilm", $annonceIndice)[0];
	 	//  endfor;
	 	// else:
	 	// 	$bandeAnnonce = '19549214';
	 	// endif;


	// $req = $dbh->prepare("INSERT INTO sp_topSerie(titre, img, acteur) VALUES(:titre, :img, :acteur)");
	// $req->execute(array(
	// "titre" => $titreSerie,
	// "img" => $imgSérie,
	// "acteur" => $acteurZ));
 	

	


	 
	// $req = $dbh->prepare("INSERT INTO sp_affichevideo(affichevideo) VALUES(:affichevideo)");
	// $req->execute(array(
	// "affichevideo" => $idVideo));
	

	// $req = $dbh->prepare("INSERT INTO sp_film(titre, synopsis, bandeAnnonce) VALUES(:titre, :synopsis, :bandeAnnonce)");
	// $req->execute(array(
	// "titre" => $nouveauxFilms,
 // 	"synopsis" => $synopsisFilm,
 // 	"bandeAnnonce" => $bandeAnnonce)); ?>


</html>

