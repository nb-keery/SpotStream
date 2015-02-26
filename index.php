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
				<div id="bandeAnnonce">
					<h2 class="titre">Bande Annonce</h2>
					<ul>
					<?php include ('include/movie.php'); ?>
					<?php for ($i=0; $i < count($bandeAnnonce) ; $i++) { 
						echo '	<li>
									<iframe width="220" height="185" src="' . $bandeAnnonce[$i]['url'] . '" frameborder="0" allowfullscreen></iframe><br>
									<span class="spanEspace">' . $bandeAnnonce[$i]['titre'] . ' </span>
									<span>' . $bandeAnnonce[$i]['note'] . '/20</span>
								</li>'; }?>
					</ul>
				</div>

			<div id="news">
				<div class="nouveaute">
					<h2 class="titre">Nouveaux Films</h2>
					<table>
						<?php for ($a=0; $a < count($nouveauxFilms); $a++) { 
							echo '<tr class="';
							if ($a%2 == 0) {
							echo "gris\">";
							}
							else {
							echo "noir\">";
							}

							echo '<th>' . $nouveauxFilms[$a]['nom'] . ' </th>
									<td>' . $nouveauxFilms[$a]['genre'] . ' </td>
									<td>' . $nouveauxFilms[$a]['note'] . '/20 </td></tr>'; } ?>
					</table>
				</div>

				<div class="nouveaute">
					<h2 class="titre">Nouvelles Series</h2>
					<table>
						<?php for ($z=0; $z < count($nouvellesSeries); $z++) { 
							echo '<tr class="';
							if ($z%2 == 0) {
							echo "gris\">";
							}
							else {
							echo "noir\">";
							}

							echo '<th>' . $nouvellesSeries[$z]['nom'] . ' </th>
									<td>' . $nouvellesSeries[$z]['genre'] . ' </td>
									<td>' . $nouvellesSeries[$z]['note'] . '/20 </td></tr>'; } ?>
					</table>
				</div>
			</div>

				<div class="nouveaute">
					<h2 class="titreCentre">A l'affiche</h2>
					<ul>
					<?php for ($r=0; $r < count($affiche); $r++) { 
						echo '<li><img src="img/' . $affiche[$r]['img'] . '" height="94" width="75">
								<ul>
									<li>' . $affiche[$r]['nom'] . ' </li>
									<li>' . $affiche[$r]['duree'] . ' </li>
									<li>' . $affiche[$r]['realisateur'] . ' </li>
									<li>' . $affiche[$r]['acteur'] . '</li>
									<li>' . $affiche[$r]['note'] . '/20 </li>
								</ul>'; } ?>
				</div>

	

				<div class="nouveaute">
					<h2 class="titreCentre">Les Plus Vus</h2>
					<table id="lesPlusVus">
						<?php for ($e=0; $e < count($lesPlusVus); $e++) { 
							echo '<tr class="';
							if ($e%2 == 0) {
							echo "gris\">";
							}
							else {
							echo "noir\">";
							}
							echo '<td>' . $lesPlusVus[$e]['type'] . ' </td>
									<td>' . $lesPlusVus[$e]['nom'] . ' </td>
									<td>' . $lesPlusVus[$e]['genre'] . ' </td>
									<td>' . $lesPlusVus[$e]['vues'] . ' vues </td>
									<td>' . $lesPlusVus[$e]['note'] . '/20 </td></tr>'; } ?>
					</table>
				</div>
			</section>
		</div>
	</body>
</html>