<!-- Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
ad esempio:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

$matches=[
    'partita1'=>[
    'squadra di casa' => 'Milan',
    'squadra ospite' => 'Inter',
    'punti fatti dalla squadra di casa'=>'55',
    'punti fatti dalla squadra ospite'=>'60'
    ],

    'partita2'=>[
    'squadra di casa' => 'Lazio',
    'squadra ospite' => 'Roma',
    'punti fatti dalla squadra di casa'=>'45',
    'punti fatti dalla squadra ospite'=>'10'
    ],

    'partita3'=>[
    'squadra di casa' => 'Juventus',
    'squadra ospite' => 'Torino',
    'punti fatti dalla squadra di casa'=>'45',
    'punti fatti dalla squadra ospite'=>'10'
    ],

];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <?php var_dump($matches['partita1']); ?> <br>
         <?php var_dump($matches['partita2']); ?> <br>
         <?php var_dump($matches['partita2']); ?>



     </body>
 </html>
