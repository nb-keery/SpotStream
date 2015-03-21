<section>

	<ul id="serieTop">
		<h2 class="titre">Top des séries</h2>

		<?php 
			for ($f=0; $f < count($topSerie) ; $f++) { 
				echo '<li><a href="index.php?pg=affichage-serie&id='. $topSerie[$f]['id'] .' "><img src=" '. $topSerie[$f]['img'] .'">
				<h3>'. $topSerie[$f]['titre'] .'</h3></a></li>'; }?>
	</ul>

	<ul id="derniersAjouts">
		<h2 class="titre">Dernières Séries ajoutées</h2>
		<?php for ($h=0; $h < count($dernieresSeries); $h++) { 
				echo '<li><a href="index.php?pg=affichage-serie&id='. $dernieresSeries[$h]['id_serie']  .'"><span><img src="'. $dernieresSeries[$h]['img']  .'"></span><h3>'. $dernieresSeries[$h]['titre'].'</h3> '. $dernieresSeries[$h]['saison'].'x'.$dernieresSeries[$h]['episode'] .'</a></li>'; }
			?>
		</li>
		</h2>
	</ul>

	<div id="newsMedia">
		<h2 class="titre">Série News</h2>
		<ul>
			<?php for ($h=0; $h < count($serieNews); $h++) { ?>
			<li <?php echo $h%2 == 0 ? "" : "class='nuance'"; ?> >
				<?php
					echo '<h3>' . $serieNews[$h]['nom'] .'</h3><p>'. $serieNews[$h]['contenu'] .'</p><img src=" '. $serieNews[$h]['img'] .'" width="170" height="80%"></li>'; 
				} ?>
			</li>
		</ul>
	</div>
</section>