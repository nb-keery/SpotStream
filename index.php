<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>Spot Stream</title>
		<link rel="shortcut icon" href="img/clap-cinema.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
		
	
	<body>	

		<div>
		<?php include ('include/nav.php'); ?>
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
							<?php for ($i=0; $i < count($nouveauxFilms); $i++) { ?>
								<li <?php echo $i%2 == 0 ? "" : "class='nuance'"; ?> >
							<?php
								echo '<span>' . $nouveauxFilms[$i]['nom'] . ' </span>
										<span>' . $nouveauxFilms[$i]['genre'] . ' </span>
										<span>' . $nouveauxFilms[$i]['note'] . '/20 </span>
								</li>'; } ?>
						</ul>
						<ul>
						<h2 class="titre">Nouvelles Series</h2>
							<?php for ($i=0; $i < count($nouvellesSeries); $i++) { ?>
								<li <?php echo $i%2 == 0 ? "" : "class='nuance'"; ?> >
							<?php
								echo '<span>' . $nouvellesSeries[$i]['nom'] . ' </span>
										<span>' . $nouvellesSeries[$i]['genre'] . ' </span>
										<span>' . $nouvellesSeries[$i]['note'] . '/20 </span>
								</li>'; } ?>
						</ul>
					</div>
					<ul class="affiche">
						<h2 class="titre">A l'affiche</h2>
						<?php for ($i=0; $i < count($affiche); $i++) { 
						echo '<li><img src="img/' . $affiche[$i]['img'] . '">
								<ul>
									<li>' . $affiche[$i]['nom'] . ' </li>
									<li>' . $affiche[$i]['duree'] . ' </li>
									<li>' . $affiche[$i]['realisateur'] . ' </li>
									<li>' . $affiche[$i]['acteur'] . '</li>
									<li>' . $affiche[$i]['note'] . '/20 </li>
								</ul>'; } ?>
					</ul>
				</div>


	

					<ul id="lesPlusVus">
						<h2 class="titre">Les Plus Vus</h2>
						<?php for ($i=0; $i < count($lesPlusVus); $i++) { ?>
								<li <?php echo $i%2 == 0 ? "" : "class='nuance'"; ?> >
							<?php
							echo '<span>' . $lesPlusVus[$i]['nom'] . ' </span>
									<span>' . $lesPlusVus[$i]['type'] . ' </span>
									<span>' . $lesPlusVus[$i]['genre'] . ' </span>
									<span>' . $lesPlusVus[$i]['vues'] . ' vues </span>
									<span>' . $lesPlusVus[$i]['note'] . '/20 </span>
								</li>'; } ?>
					</ul>
			</section>
		</div>
	</body>
</html>