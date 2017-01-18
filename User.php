 <?php
 class User{
 	private $email;
 	private $id;
 	private $createdAt;

 	public function __construct($email,$id,$createdAt){
 		$this->email = $email;
 		$this->id = $id;
 		$this->createdAt = $createdAt;

 	}


 	function getEmail(){
 		return $this->email;
 	}

 	function getId(){
 		return $this->id;
 	}

 	function getCreatedAt(){
 		return $this->createdAt;
 	}
 }