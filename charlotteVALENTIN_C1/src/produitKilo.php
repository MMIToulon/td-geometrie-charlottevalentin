<?php

	ini_set('display_errors','1');
	require_once('produit.php');

class produitKilo extends Produit {

	protected $prix;

	public function __Construct($nbVendu, $poid, $prix) {
		$this->prix = $prix;
		parent::__construct($nbVendu,$poid);
	}

 	public function __toString(){
 		$show = "<hr> Produit: ".
 				"<br> Nombre vendu :".$this->nbVendu.
 				"<br> Poid: ".$this->poid.
 				"<br> Prix: ".$this->prix."<hr>";
 		return $show;
 	}

	public function getPrixKilo() {
		return $this->prix;
	}

	public function setPrixKilo($prix) {
		return $this->prix = $prix;
	}

	public function calculPrix() {
		return "<br/>Prix total: ".$this->poid * $this->prix;
	}

}


?>