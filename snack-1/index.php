<?php
$campionato = [
  [
    'casa' => 'roma',
    'ospite' => 'lazio',
    'puntoCasa' => '23',
    'puntoOspite' => '0'
  ],
  [
    'casa' => 'aret',
    'ospite' => 'spal',
    'puntoCasa' => '43',
    'puntoOspite' => '1'
  ],
  [
    'casa' => 'hute',
    'ospite' => 'liuyo',
    'puntoCasa' => '2',
    'puntoOspite' => '77'
  ],
  [
    'casa' => 'reti',
    'ospite' => 'asd',
    'puntoCasa' => '56',
    'puntoOspite' => '34'
  ],
]
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <ul>
       <?php for($i = 0; $i < count($campionato); $i++){ ?>
       <li>
         <h3> <?php echo ucfirst($campionato[$i]['casa']) .  ' - ' . ucfirst($campionato[$i]['ospite']) . ' | ' . $campionato[$i]['puntoCasa'] . ' - ' . $campionato[$i]['puntoOspite']; ?></h3>
       </li>
     <?php } ?>
     </ul>

   </body>
 </html>
