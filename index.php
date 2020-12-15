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
    [
    'squadra_di_casa' => 'Milan',
    'squadra_ospite' => 'Inter',
    'punti_fatti_dalla_squadra_di_casa'=>'55',
    'punti_fatti_dalla_squadra_ospite'=>'60'
    ],

    [
    'squadra_di_casa' => 'Lazio',
    'squadra_ospite' => 'Roma',
    'punti_fatti_dalla_squadra_di_casa'=>'45',
    'punti_fatti_dalla_squadra_ospite'=>'10'
    ],

    [
    'squadra_di_casa' => 'Juventus',
    'squadra_ospite' => 'Torino',
    'punti_fatti_dalla_squadra_di_casa'=>'45',
    'punti_fatti_dalla_squadra_ospite'=>'10'
    ],

];
//stampa con ciclo



 ?>

<!-- stampa senza ciclo -->

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1>
         <?php

         foreach ($matches as $partita) {

             echo $partita['squadra_di_casa'] . " " . "-" . " " . $partita['squadra_ospite'] . " ". "|" ." " . $partita['punti_fatti_dalla_squadra_di_casa'] . " " . "-" . " " .
               $partita['punti_fatti_dalla_squadra_ospite'] . "<br>";
         }
          ?>
          </h1>
     </body>
 </html>


 
