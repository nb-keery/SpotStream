<?php 


	define('_DB_HOST_', 'localhost');
	define('_DB_NAME_', 'spotstream');
	define('_DB_USERNAME_', 'root');
	define('_DB_PASSWORD_', '');

	// connexion base de donnée 
	$dbh = new PDO('mysql:host='._DB_HOST_.';dbname='._DB_NAME_, _DB_USERNAME_, _DB_PASSWORD_, array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));


	// Selection a la base de donnée
	$req = "SELECT * FROM table WHERE condition ORDER BY trie ASC";
	$req = $dbh->prepare($req);
	$donnee = $req->execute();


	// Requete d'insertion de donnée
	$req=$dbh->prepare("INSERT INTO table ('champ1', 'champ2') VALUES (:champ1, :champ2)");
	$req->execute(array(
		":champ1"=> 'values1',
		":champ2"=> 'values2'
	));


	// requete de modification
	$req = $dbh->prepare("UPDATE table SET champ1=:champ1,champ2=:champ2 WHERE id=:id");
	$req->execute(array(
		":champ1"=> 'values1',
		":champ2"=> 'values2'
	));


	// Requete de suppression
	$req = $dbh->prepare("DELETE FROM table WHERE id = :id");
	$req->execute(array(
		':id' => $this->id
	));
?>