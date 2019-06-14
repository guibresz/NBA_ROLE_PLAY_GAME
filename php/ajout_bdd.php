<?php

try{

	$bdd = new PDO('mysql:dbname=nba;host=localhost', 'root', '');
}

catch(Exception $e){
	die('Erreur:' .$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO joueur(categorie, nom, tir, rebond, passe, interception, contre, vitesse, tir_3_points) VALUES(:categorie, :nom, :tir, :rebond, :passe, :interception, :contre, :vitesse, :tir_3_points)');

$req->execute(array(
		'categorie' => $_POST['categorie'],
		'nom' => $_POST['nom'],
		'tir' => $_POST['tir'],
		'rebond' => $_POST['rebond'],
		'passe' => $_POST['passe'],
		'interception' => $_POST['interception'],
		'contre' => $_POST['contre'],
		'vitesse' => $_POST['vitesse'],
		'tir_3_points' => $_POST['tir_3_points']
		));

?>

<meta http-equiv="refresh" content="0;URL=../html/ajouter.html">
