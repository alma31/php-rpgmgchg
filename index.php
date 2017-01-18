<?php
$clients = require 'users.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Tableau d'utilisateurs</title>
   </head>
   <body>
     <h1>Mes utilisateurs</h1>
     <!-- <?= var_dump($clients) ?> -->
     <table>
       <thead>
         <tr>
           <td>Id</td>
           <td>Email</td>
           <td>Créé le</td>
         </tr>
       </thead>
       <tbody>
         <!-- tr = table row = ligne du tableau -->
         <?php
         foreach ($clients as $key => $clients) :
           ?>
           <tr>
             <td>
               <?= $clients->getId(); ?>
             </td>
             <td>
               <?= $clients->getEmail(); ?>
             </td>
             <td>
               <?= $clients->getCreatedAt(); ?>
             </td>
           </tr>
        <?php
          endforeach;
         ?>
       </tbody>
     </table>
   </body>
 </html>