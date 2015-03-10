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

$xml = new simpleXMLElement($contenu);
// var_dump($xml);
foreach ($xml->channel->item as $v){
	 $idVideo = $v->description;
	$idVideo = explode("|", $idVideo)[2];
	$idVideo = explode("cmedia=", $idVideo)[1];
	$idVideo = explode(".html", $idVideo)[0];
	//$idVideo = (int)substr($idVideo, -28, 8);
	//if($idVideo != 0){
	//	echo '<iframe src="http://www.allocine.fr/_video/iblogvision.aspx?cmedia='.$idVideo.'" style="width:480px; height:270px" frameborder="0"></iframe>';
	//}
	var_dump($idVideo);
	
}
?>