/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/ <br>

<?php 

function totalCall($minuts) {
    $basePrice = 10.0;
    $priceExtraMinutes = 0.05;
    $baseCall = 3;
    $extraMinutes = 0;


    if($minuts <= 3) {
        return $basePrice;
    } elseif($minuts > 3) {
        $extraMinutes = ($minuts - $baseCall);
        return ($extraMinutes * $priceExtraMinutes) + $basePrice;
    }
}

echo "First call" . "<br>";
echo "The cost of a call of 2 minutes is: " . totalCall(2) . " centims.";

echo "<br>";
echo "Second call" . "<br>";
echo "The cost of a call of 5 minutes is: " . totalCall(5) . " centims";

echo "<br>";
echo "Second call" . "<br>";
echo "The cost of a call of 10 minutes is: " . totalCall(10) . " centims";

?>