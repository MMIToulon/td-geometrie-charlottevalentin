<?php

	ini_set('display_errors','1');

	require_once('src/produitKilo.php');

	$pk = new ProduitKilo(10, 50, 3);

	var_dump($pk);

	echo $pk;

?>