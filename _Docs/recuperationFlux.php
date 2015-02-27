<?php 
// recuperation des informations d'un flux rss
// lien cinema
	// 0.http://www.cinefil.com/rss-nouvelles-bandes-annonces 
	// 1.http://rss.allocine.fr/ac/bandesannonces/anepasmanquer
	// 2.http://rss.allocine.fr/ac/cine/alafficheweb.com/movieVideos


// initialisation
$curl = curl_init();
// on appele le fichier xml
curl_setopt($curl, CURLOPT_URL, "http://next-episode.net/rss.xml");
// on empêche l'affichage du contenu
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$contenu = curl_exec($curl);

$xml = new simpleXMLElement($contenu);
// var_dump($xml);
foreach ($xml->channel->item as $v){
	var_dump($v);
}
?>