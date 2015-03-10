	<?php  $url = $_SERVER['REQUEST_URI'];
	      $page = explode("/", $url);
		  $nav = end($page);?>
<nav>
	<ul>
		<li style="background-image: url('')">Menu</li>
		<li <?php echo $nav == 'index.php?pg=rechercher' ? 'class="actif"' : ''; ?>><a href="">Rechercher</a></li>
		<li <?php echo $nav == 'index.php?pg=accueil' ? 'class="actif"' : ' ' ;  ?>><a href="index.php?pg=accueil">Accueil</a></li>
		<li <?php echo $nav == 'index.php?pg=cinema' ? 'class="actif"' : ' ' ;  ?>><a href="index.php?pg=cinema">Cinéma</a></li>
		<li <?php echo $nav == 'index.php?pg=serie' ? 'class="actif"' : ' ' ;  ?>><a href="index.php?pg=serie">Série</a></li>
		<li <?php echo $nav == 'index.php?pg=film' ? 'class="actif"' : ' ' ;  ?>><a href="index.php?pg=film">Film</a></li>
		<li <?php echo $nav == 'index.php?pg=forum' ? 'class="actif"' : ' ' ;  ?>><a href="index.php?pg=forum">Forum</a></li>
		<li class=""><a href="index.php?pg=">Paramètre</a></li>
	</ul>
</nav>