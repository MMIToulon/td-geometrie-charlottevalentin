<?php

	ini_set('display_errors','1');

	require_once('src/produitUnite.php');

	$pu = new ProduitUnite(10, 50, 3);

	var_dump($pu);

	echo $pu;

?>