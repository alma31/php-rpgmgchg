<?php 
require_once 'Client.php';

$client1 = new Client('niko@niko.fr', 'lekonifere', '23/02/2200');
$client2 = new Client('alma31@miaumiau.com', 'alma', '12/09/2010');

$tableau = [
$client1,
$client2 
];

return $tableau;



