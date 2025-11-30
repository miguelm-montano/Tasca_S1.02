<?php
/* Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

function assignStudentGrade(int $finalNote): void {
    if($finalNote < 0 || $finalNote > 100) {
        echo "The note entered is invalid.";
    }elseif($finalNote >= 60) {
        echo "First Division. Congrats!";
    } elseif($finalNote >= 45) {
        echo "Second Division. Good Job!";
    } elseif($finalNote >= 33) {
        echo "Third Division.";
    } else {
        echo "Failed";
    }
    
}

echo "Student A" . PHP_EOL;
assignStudentGrade(90);
echo PHP_EOL;

echo "Student B" . PHP_EOL;
assignStudentGrade(55);
echo PHP_EOL;

echo "Student C" . PHP_EOL;
assignStudentGrade(44);
echo PHP_EOL;

echo "Student D" . PHP_EOL;
assignStudentGrade(20);
echo PHP_EOL;

?>