<?php 

require_once 'Product.php';

class Cloth extends Product{

	private $brand;	
	private $nom;	


	function __construct($id,$name,$price,$brand){
		parent::__construct($id,$name,$price);
		$this->brand = $brand;
	}

	function getBrand(){
		return $this->brand;
	}


	function try(){

	}
}


?>