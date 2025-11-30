<?php 
/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/

function calculateCallPrice(int $minuts): int {
    $basePrice = 10;
    $extraPerMinute = 5;
    $baseCall = 3;
  
   if($minuts <= $baseCall) {
    return $basePrice;
   }

   return $basePrice +($minuts - $baseCall) * $extraPerMinute;
}

echo "First call" . PHP_EOL;
echo "The cost of a call of 2 minutes is: " . calculateCallPrice(2) . " centims.";
echo "\n\n";

echo "Second call" . PHP_EOL;
echo "The cost of a call of 5 minutes is: " . calculateCallPrice(5) . " centims";
echo "\n\n";

echo "Second call" . PHP_EOL;
echo "The cost of a call of 10 minutes is: " . calculateCallPrice(10) . " centims";

?>