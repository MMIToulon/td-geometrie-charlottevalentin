<?php

	ini_set('display_errors','1');
	require_once('produit.php');

class produitUnite extends Produit {

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

	public function getPrixUnite() {
		return $this->prix;
	}

	public function setPrixUnite($prix) {
		return $this->prix = $prix;
	}

	public function calculPrix() {
		return "<br/>Prix total: ".$this->prix * $this->nbVendu;
	}

}

?>