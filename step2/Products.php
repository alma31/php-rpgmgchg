<?php 
require_once 'Vegetable.php';
require_once 'Cloth.php';


$legume1 = new Vegetable('1','banane','1','Royal Queen','23/01/2017');
$legume2 = new Vegetable('2', 'Courgette', '1','Royal Queen','23/01/2017');

$habit1 = new Cloth('3','Pantalon','30','Devred');
$habit2 = new Cloth('4','Blouson', '50','Devred');
$habit3 = new Cloth('5','pull','30','Devred');


$tab = [
$legume1,$legume2,$habit1,$habit2,$habit3
];

return $tab;

 ?>
