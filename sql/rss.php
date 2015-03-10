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

// initialisation
$curl = curl_init();
// on appele le fichier xml
curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/cine/alaffiche");
// on empêche l'affichage du contenu
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$contenu = curl_exec($curl);

$xml = new simpleXMLElement($contenu); ?>

<?php
	$dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));


//$req = $dbh->query("SELECT * FROM sp_affiche");

	//while ($donnee = $req->fetch()) {
	//	echo $donnee['titre'];	}

	$dbh->exec("TRUNCATE TABLE `sp_affiche`");

 foreach ($xml->channel->item as $v){
 		 $description = $v->description;
		$titre = $v->title;
		$titre = explode("titre", $titre)[0];
		$titre = substr($titre, 0);

		$duree = explode("(", $description)[1];
		$duree = substr($duree, 0, 5);



	 if(strstr($description, "<br>Avec ", true)):
	 $nbActeur = explode("<br>Avec ", $description)[1];
	 $nbActeur = explode("<br>", $nbActeur)[0];
	 $nbActeur = explode("title='", $nbActeur);
	 $acteurs = '';
	 for ($i=1; $i < count($nbActeur) ; $i++) :
	 	$acteurIndice = $nbActeur[$i];
	 	if($i == 1) $acteurs = explode("'>", $acteurIndice)[0];
		else $acteurs = $acteurs.', '.explode("'>", $acteurIndice)[0];
	 endfor;
	else:
		$realisateur = '';
	endif;

	$realisateur = explode("Un film de", $description)[1];
	 $realisateur = explode("title='", $realisateur)[1];
	 $realisateur = explode("'>", $realisateur)[0];



	$req = $dbh->prepare("INSERT INTO sp_affiche(titre, duree, realisateur, acteur) VALUES(:titre, :duree, :realisateur, :acteur)");
	$req->execute(array(
	"titre" => $titre,
	"duree" => $duree,
	"realisateur" => $realisateur,
	"acteur" => $acteurs));
	 
	}?>


</html>

