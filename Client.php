<?php 
require_once 'User.php';
require_once 'Product.php';

class Client extends User {
	private $billAmount;
	private $cart;

	public function buy($product){
		 $this->addProductToCart($product);
		 $this->setBillAmount($product);
	}

	public function getBillAmount(){
		return $this->billAmount;
	}

	public function getCart(){
		return $this->cart;
	}

	public function setBillAmount($product){
		$price = $product->getPrice();
		 $this->billAmount = $price + $this->billAmount;
	}
	public function addProductToCart($product){
		return $this->cart[] = $product;
	}

}



