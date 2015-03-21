<section>

	<ul id="serieTop">
		<h2 class="titre">Top des films</h2>

		<?php 
			for ($f=0; $f < count($topSerie) ; $f++) { 
				echo '<li><a href="index.php?pg=affichage-film&id='. $topSerie[$f]['id'] .' "><img src=" '. $topSerie[$f]['img'] .'">
				<h3>'. $topSerie[$f]['titre'] .'</h3></li>';
			}?>
	</ul>

	<ul id="derniersAjouts">
		<h2 class="titre">Dernier Films ajoutés</h2>
		<?php for ($h=0; $h < count($dernierFilms); $h++) { 
				echo '<li><a href="index.php?pg=affichage-film&id='. $dernierFilms[$h]['id_film']  .'"><span><img src="'. $dernierFilms[$h]['img']  .'"></span><h3>'. $dernierFilms[$h]['titre'].'</h3></a></li>'; }
			?>
		</li>
		</h2>
	</ul>

	<div id="newsMedia">
		<h2 class="titre">Actualités cinéma</h2>
		<ul>
			<?php for ($h=0; $h < count($cineNews); $h++) { ?>
			<li <?php echo $h%2 == 0 ? "" : "class='nuance'"; ?> >
				<?php
					echo '<h3>' . $cineNews[$h]['nom'] .'</h3><p>'. $cineNews[$h]['contenu'] .'</p><img src=" '. $cineNews[$h]['img'] .'" width="170" height="80%"></li>'; 
				} ?>
			</li>
		</ul>
	</div>
</section>