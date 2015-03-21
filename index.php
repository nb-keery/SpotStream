<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>Spot Stream</title>
		<link rel="shortcut icon" href="img/clap-cinema.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		
	
	<body>	
		<?php include ('conf/config.php'); ?>
		<?php include ('include/nav.php'); ?>
		<?php if ($_GET['pg']) {
				$page = $_GET['pg'].'.php';
				if (file_exists('script/'.$page)) {
					include('script/'.$page);
				}else{
					include('script/traitement.php');
				}
				if (file_exists('layout/'.$page)) {
					include('layout/'.$page);
				}else{
					include('404.php');
				}

			 	
			}else{
				include('script/"'. $page . '.php');
				include('layout/'. $page . ' .php');
			}?>
	</body>
</html>