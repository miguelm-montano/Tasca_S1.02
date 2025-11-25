/* Crea un programa que tingui una funció que rebi dos nombres per paràmetre, i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).*/<br>

<?php

function calculate($num1, $num2, $operation) {
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

echo calculate(5, 3, "sum") . "<br>";
echo calculate(10, 5, "subtraction") . "<br>";
echo calculate(7, 3, "multiplication") . "<br>";
echo calculate(10, 2, "division") . "<br>";
echo calculate (12, 0, "division");

?>