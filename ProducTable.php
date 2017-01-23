<?php
$tab = require 'Products.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Tableau d'utilisateurs</title>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
 <h1 style="text-align: center;">Mes produit</h1>
 <table class="ui table">
  <th>Réf</th>
  <th>Nom</th>
  <th>Prix</th>
  <th>Producteur</th>
  <th>Dlc</th>

  <tr>
    <?php
    foreach ($tab as $prod) :
      ?>
    <td><?= $prod->getId()?></td>
    <td><?= $prod->getName()?></td>
    <td><?= $prod->getPrice()?>€</td>
    <?php if (is_a($prod, "Vegetable")): ?>
    <td><?= $prod->getProductorName()?></td>
    <td><?= $prod->getHarvestedAt()?></td>
  <?php else : ?>
    <td><?= $prod->getBrand()?></td>
  <?php endif ?>
  </tr>
  <?php
  endforeach;
  ?>
</body>
</html>