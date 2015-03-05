<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>Spot Stream</title>
		<link rel="shortcut icon" href="img/clap-cinema.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
		
	
	<body>	
		<?php include ('include/nav.php'); ?>

		<div>
			<header>
				<img src="img/slider1.jpg" height="325" width="100%">
			</header>

			<section>
				<ul id="bandeAnnonce">
					<h2 class="titre">Bande Annonce</h2>
					<?php include ('include/movie.php'); ?>
					<?php for ($i=0; $i < count($bandeAnnonce) ; $i++) { 
						echo '	<li>
									<iframe width="209" height="155" src="' . $bandeAnnonce[$i]['url'] . '" frameborder="0" allowfullscreen></iframe>
									<span class="spanEspace"><i>' . $bandeAnnonce[$i]['titre'] . '</i><i>' . $bandeAnnonce[$i]['note'] . '/20</i></span>
								</li>'; }?>
				</ul>

				<div id="news">
					<div>
						<ul>
							<h2 class="titre">Nouveaux Films</h2>
							<?php for ($a=0; $a < count($nouveauxFilms); $a++) { 
								echo '<li class="';
								if ($a%2 == 0) {
								echo "gris\">";
								}
								else {
								echo "nuance\">";
								}

								echo '<span>' . $nouveauxFilms[$a]['nom'] . ' </span>
										<span>' . $nouveauxFilms[$a]['genre'] . ' </span>
										<span>' . $nouveauxFilms[$a]['note'] . '/20 </span></li>'; } ?>
						</ul>
						<ul>
						<h2 class="titre">Nouvelles Series</h2>
							<?php for ($z=0; $z < count($nouvellesSeries); $z++) { 
								echo '<li class="';
								if ($z%2 == 0) {
								echo "gris\">";
								}
								else {
								echo "nuance\">";
								}

								echo '<span>' . $nouvellesSeries[$z]['nom'] . ' </span>
										<span>' . $nouvellesSeries[$z]['genre'] . ' </span>
										<span>' . $nouvellesSeries[$z]['note'] . '/20 </span></li>'; } ?>
						</ul>
					</div>
					<ul class="affiche">
						<h2 class="titre">A l'affiche</h2>
						<?php for ($r=0; $r < count($affiche); $r++) { 
						echo '<li><img src="img/' . $affiche[$r]['img'] . '">
								<ul>
									<li>' . $affiche[$r]['nom'] . ' </li>
									<li>' . $affiche[$r]['duree'] . ' </li>
									<li>' . $affiche[$r]['realisateur'] . ' </li>
									<li>' . $affiche[$r]['acteur'] . '</li>
									<li>' . $affiche[$r]['note'] . '/20 </li>
								</ul>'; } ?>
					</ul>
				</div>


	

					<ul id="lesPlusVus">
						<h2 class="titreCentre">Les Plus Vus</h2>
						<?php for ($e=0; $e < count($lesPlusVus); $e++) { 
							echo '<li class="';
							if ($e%2 == 0) {
							echo "gris\">";
							}
							else {
							echo "nuance\">";
							}
							echo '<span>' . $lesPlusVus[$e]['type'] . ' </span>
									<span>' . $lesPlusVus[$e]['nom'] . ' </span>
									<span>' . $lesPlusVus[$e]['genre'] . ' </span>
									<span>' . $lesPlusVus[$e]['vues'] . ' vues </span>
									<span>' . $lesPlusVus[$e]['note'] . '/20 </span></li>'; } ?>
					</ul>
			</section>
		</div>
	</body>
</html>