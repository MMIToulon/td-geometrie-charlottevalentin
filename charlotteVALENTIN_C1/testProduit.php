<?php

	require_once('src/produit.php');
	require_once('src/produitKilo.php');
	require_once('src/produitUnite.php');

	ini_set('display_errors','1');

	$c1 = new produitKilo(50,10,10);
	echo $c1->calculPrix();
	echo "<br/>".Produit::$compteur;

	$c2 = new produitUnite(60,2.5,10);
	echo $c2->calculPrix();
	echo "<br/>".Produit::$compteur;


?>