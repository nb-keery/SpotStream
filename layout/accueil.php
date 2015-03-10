<section>
	<ul id="bandeAnnonce">
		<h2 class="titre">Bande Annonce</h2>
		<?php include ('include/movie.php'); ?> <!-- acceptable just pour le moment-->
		<?php for ($i=0; $i < count($bandeAnnonce) ; $i++){ 
				echo '	<li>
							<iframe width="209" height="155" src="' . $bandeAnnonce[$i]['url'] . '" frameborder="0" allowfullscreen></iframe>
							<span>
								<i>' . $bandeAnnonce[$i]['titre'] . '</i>
								<i>' . $bandeAnnonce[$i]['note'] . '/20</i>
							</span>
						</li>'; }
		?>
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
						</li>'; 
					} 
				?>
			</ul>
			<ul>
			<h2 class="titre">Nouvelles Series</h2>
				<?php for ($i=0; $i < count($nouvellesSeries); $i++) { ?>
					<li <?php echo $i%2 == 0 ? "" : "class='nuance'"; ?> >
					<?php
						echo '<span>' . $nouvellesSeries[$i]['nom'] . ' </span>
							<span>' . $nouvellesSeries[$i]['genre'] . ' </span>
							<span>' . $nouvellesSeries[$i]['note'] . '/20 </span>
					</li>'; 
				}?>
			</ul>
		</div>
		<ul>
			<h2 class="titre">A l'affiche</h2>
			<?php 
			
			for ($i=0; $i < count($donnees) ; $i++) {
				echo '<li><img src=" ' . $donnees[$i]['img'] . '">
					<ul>
						<li>' . $donnees[$i]['titre'] . ' </li>
						<li>' . $donnees[$i]['duree'] . ' </li>
						<li>' . $donnees[$i]['realisateur'] . ' </li>
						<li>' . $donnees[$i]['acteur'] . '</li>
						<li>' . $donnees[$i]['note'] . '/5</li>
					</ul>';	} ?>
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