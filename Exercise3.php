<?php
/* Crea un programa que tingui una funció que rebi dos nombres per paràmetre, i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).*/

function calculate(float $num1, float $num2, string $operation) {
    $opeation = strtolower($operation);

    switch ($operation) {
        case "sum":
            return $num1 + $num2;
        case "subtraction":
            return $num1 - $num2;
        case "multiplication":
            return $num1 * $num2;
        case "division":
            if($num2 == 0) {
                return "Error. División entre cero";
            }
            return $num1 / $num2;

        default: 
            return "Invalid operation";
    }
   
}

echo calculate(5, 3, "sum") . PHP_EOL;
echo calculate(10, 5, "subtraction") . PHP_EOL;
echo calculate(7, 3, "multiplication") . PHP_EOL;
echo calculate(10, 2, "division") . PHP_EOL;
echo calculate (12, 0, "division");

?>