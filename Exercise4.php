<?php
/* Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s`inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s`ha de mostrar per pantalla pas per pas.*/

function countUpToANumber($max = 10, $mode = 2): void {

    for($i = 0; $i <= $max; $i += $mode) {
        echo $i . " ";
    }
}

echo "Numbers 10, 1" . PHP_EOL;
countUpToANumber(10, 1);
echo PHP_EOL;

echo "Numbers 12, 2" . PHP_EOL;
countUpToANumber(12, 2);
echo PHP_EOL;

echo "Numbers 15, 3" . PHP_EOL;
countUpToANumber(15, 3);
echo "\n\n";

?>