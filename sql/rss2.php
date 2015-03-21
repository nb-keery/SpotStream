<?php 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://rss.allocine.fr/ac/series/top");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($curl);
$xml = new simpleXMLElement($xml);

$dbh = new PDO('mysql:host=localhost;dbname=spotstream', 'root', '', array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));

$dbh->exec("TRUNCATE TABLE `sp_serie`");
foreach ($xml->channel->item as $v){
		 $description = $v->description;
		$titreSerie = $v->title;
		$titreSerie = explode("titre", $titreSerie)[0];
		$titreSerie = explode(" - ", $titreSerie)[1];
		
	 	$statut = explode("<p>(", $description)[1];
	 	$statut = explode(")", $description);

	 	$imgSérie = $v->enclosure['url'];
	 	$imgSérie = explode(' ', $imgSérie)[0];
		

		if(strstr($description, "<br>Avec ", true)):
		$acteurSerie = explode("<br>Avec ", $description)[1];
		$acteurSerie = explode("<br>", $acteurSerie)[0];
		$acteurSerie = explode("title='", $acteurSerie);
		$acteurZ = '';
		 for ($i=1; $i < count($acteurSerie) ; $i++) :
		 	$acteurIndiceSerie = $acteurSerie[$i];
		 	if($i == 1) $acteurZ = explode("'>", $acteurIndiceSerie)[0];
			else $acteurZ = $acteurZ.', '.explode("'>", $acteurIndiceSerie)[0];
		 endfor;
		else:
			$realisateur = '';
		endif;


	$req = $dbh->prepare("INSERT INTO sp_serie(titre, acteur, img) VALUES(:titre, :acteur, :img)");
	$req->execute(array(
	"titre" => $titreSerie,
	"img" => $imgSérie,
	"acteur" => $acteurZ));

















}?>