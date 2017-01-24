<?php 

require 'Client.php';
require_once 'Products.php';
require_once 'users.php';
require_once 'Product.php';


$client1->buy($legume1);
$client2->buy($legume2);
$client2->buy($habit1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page de test</title>
</head>
<body>
<h1>ID <?php echo $client1->getId();  ?></h1>

<a>Pseudo : </a> <?php echo $client1->getId();?></br>
<a>Email : </a> <?php echo $client1->getEmail();?></br>
<a>Date création : </a> <?php echo $client1->getCreatedAt();?></br>

</br>

<h1>Achat <?php echo $client1->getId(); ?></h1>

<a>Legume : </a> <?php echo $client1->getId();?>



	
</body>
</html>
