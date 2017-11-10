<?php

	ini_set('display_errors','1');

abstract class Produit {

	protected $nbVendu = 0;
	protected $poid = 0;
   	public static $compteur = 0;

   	public function __Construct($nbVendu, $poid) {
   		echo "<br/>Création d'un produit";
   		$this->nbVendu = $nbVendu;
   		$this->poid = $poid;
      	self::$compteur++;
   	}

	public function getNbVendu(){
		return $this->nbVendu;
	}

	public function setNbVendu($nbVendu){
		return $this->nbVendu = $nbVendu;
	}

	public function getPoid() {
		return $this->poid;
	}

	public function setPoid($poid) {
		return $this->poid = $poid;
	} 

	public abstract function calculPrix();

}

?>