<?php 

if (isset($_GET['id'])) {
	$seriePage = $_GET['id'];
	$req = $dbh->query("SELECT sp_serie.*,  sp_image.img,  sp_image.id_serie
						FROM sp_serie 
						LEFT OUTER JOIN sp_image ON sp_image.id_serie = sp_serie.id 
						WHERE sp_serie.id=$seriePage ");
	$serie = $req->fetchAll();
	foreach ($serie as $contenu) {
		echo '<article class="affichage">
				<h1 class="titre">' . $contenu['titre'] .' </h1>
				<img src="' . $contenu['img'] .'" width="290">
				<ul>
					<li><span>Description</span><p>'. $contenu['description'] .'</p></li>
				</ul>'; }	

		$req = $dbh->query("SELECT sp_serie.*,  sp_video.iframe,  sp_video.id_serie, sp_video.saison, sp_video.episode
							FROM sp_serie 
							LEFT OUTER JOIN sp_video ON sp_video.id_serie = sp_serie.id 
							WHERE sp_serie.id=$seriePage");
		$serieVideo = $req->fetchAll();
	if (isset($_GET['ep'])) {
		$iframe = $_GET['ep'];
		echo '<iframe height="500" src="http://www.purevid.com/?m=embed&id='. $iframe .'" frameborder="0" allowfullscreen></iframe>';}
		else{
			echo '<iframe height="500" src="http://www.purevid.com/?m=embed&id=" frameborder="0" allowfullscreen></iframe>';}
		foreach ($serieVideo as $saison) {
			echo '<ul class="choixSaison"><h3>Saison '. $saison['saison'] .'</h3>';
			foreach ($serieVideo as $episode) {
				echo '<li><a href="index.php?pg=affichage-serie&id='. $saison['id'] .'&ep='. $episode['iframe'] .'">Episode '.$episode['episode'] .'</a></li>';
				}
			echo "</ul>";}
		

	}else{
		echo "Désolé cette série n'éxiste pas.";}





	