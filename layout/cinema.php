<section>
	<ul class="filmCinema">
		<?php 
				for ($film=0; $film < count($donnees); $film++) {
					echo '
					<li>
						<h2 class="titre">' . $donnees[$film]['titre'] . ' </h2>
						<img src=" ' . $donnees[$film]['img'] .'" width="220">
						<ul>
							<li><span>Réalisateur</span><span>' . $donnees[$film]['realisateur'] . '</span></li>
							<li><span>Acteurs</span><span>' . $donnees[$film]['acteur'] . '</span></li>
							<li><span>Durée</span><span>' . $donnees[$film]['duree'] . ' </span></li>
							<li><span>Note</span><span>' . $donnees[$film]['note'] . '/5</span></li>
							<li><span>Synopsis</span><p>' . $donnees[$film]['synopsis'] . '</p></li>
						</ul>
						<button>Bande-Annonce <img src="img/play.png" width="53"></button>
					</li>';	} ?>
	</ul>
</section>