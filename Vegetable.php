<?php 

require_once 'Product.php';


class Vegetable extends Product{
	private $productorName;
	private $harvestedAt;
	private $date;

	function  __construct($id,$name,$price,$productorName,$harvestedAt){
		parent::__construct($id,$name,$price);
		$this->productorName = $productorName;
		$this->harvestedAt = $harvestedAt;
	}


	public function getProductorName(){
		return $this->productorName;
	}

	public function getHarvestedAt(){
		return $this->harvestedAt;
	}

	public function getDate(){
		return $this->date;
	}

	public function isFresh(){
		if ($harvestedAt < $date) {
			return True;
		} else {
			return False;
		}
 }
}

?>