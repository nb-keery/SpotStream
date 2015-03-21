<?php 

if (isset($_GET['id'])) {
			$filmPage = $_GET['id'];
			$req = $dbh->query("SELECT sp_film.*,  sp_image.img,  sp_image.id_film, sp_video.iframe, sp_video.id_film
								FROM sp_film 
								LEFT OUTER JOIN sp_image ON sp_image.id_film = sp_film.id 
								LEFT OUTER JOIN sp_video ON sp_video.id_film = sp_film.id 
								WHERE sp_film.id=$filmPage");
			$film = $req->fetchAll();
			foreach ($film as $contenu) {

			echo '<article class="affichage">
				<h1 class="titre">' . $contenu['titre'] .' </h1>
				<img src="' . $contenu['img'] .'" width="290">
				<ul>
					<li><span>Réalisateur</span><span>'. $contenu['realisateur'] .'</span></li>
					<li><span>Acteurs</span><span>'. $contenu['acteur'] .'</span></li>
					<li><span>Description</span><p>'. $contenu['synopsis'] .'</p></li>
				</ul>
				<iframe height="500" src="http://www.purevid.com/?m=embed&id='. $contenu['iframe'] .'" frameborder="0" allowfullscreen></iframe>
				</article>';
			}
			}else{
				echo "Désolé ce film n'éxiste pas.";
			}
	