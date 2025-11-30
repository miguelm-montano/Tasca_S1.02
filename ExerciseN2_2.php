<?php 
/*Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem:

La seva suma
La seva mitjana
La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.*/

function validatePoints(array $points): bool {

    foreach ($points as $p) {
        if ($p < 0 || $p > 9999) return false;
    }
    return true;
}

function sumPoints(array $points): int {

    if(!validatePoints($points)) {
        echo "Error. Incorrent Points.";
        return 0;
    } 
        return array_sum($points);
}

function calculateAverage(array $points): float {

     if(!validatePoints($points)) {
        echo "Error. Incorrent Points.";
        return 0.0;
    } 
       
    return sumPoints($points) / count($points);
}

function pointsClassification(array $points): void {
    
   if(!validatePoints($points)) {
        echo "Error. Incorrent Points.";
        return;
    } 

    $totalPoints = sumPoints($points);

    if($totalPoints>= 8000){
        echo "Professional classification\n";
    } elseif($totalPoints >= 4000){
        echo "Intermediant classification\n";
    } else {
        echo "Principiant classification\n";
    }

}

$game1 = [400, 1000, 200];
$game2 = [4000, 1000, 3000];

echo "Sum game1: " . sumPoints($game1) . PHP_EOL;
echo "Average game1: " . calculateAverage($game1) . PHP_EOL;
pointsClassification($game1);

echo "Sum game2: " . sumPoints($game2) . PHP_EOL;
pointsClassification($game2);


?>