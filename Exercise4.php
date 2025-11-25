/* Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s`inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s`ha de mostrar per pantalla pas per pas.*/<br>

<?php

function counting($max = 10, $mode = 2) {

    for($i = 0; $i <= $max; $i += $mode) {
        echo $i . " ";
    }
}

echo "Numbers 10, 1" . "<br>";
echo counting(10, 1) . "<br>";

echo "<br>";

echo "Numbers 12, 2" . "<br>";
echo counting(12, 2) . "<br>";

echo "<br>";

echo "Numbers 15, 3" . "<br>";
echo counting(15, 3) . "<br>";


?>