/*Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem: <br>

La seva suma <br>
La seva mitjana <br>
La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.*/ <br>

<?php 

function points($pointsA, $pointsB, $pointsC) {

    if(($pointsA < 0 || $pointsA > 9999) || ($pointsB < 0 || $pointsB > 9999) || ($pointsC < 0 || $pointsC > 9999)) {

        return false;     
  }      

        return true;
}

function sumPoints($firstPoints, $secondPoints, $thirdPoints) {

    if(!points($firstPoints, $secondPoints, $thirdPoints)) {
        echo "Error. Incorrent Points.";
        return;
    } 
        return $firstPoints + $secondPoints + $thirdPoints;
}

function mediaPoints($firstPoints, $secondPoints, $thirdPoints) {

    if(!points($firstPoints, $secondPoints, $thirdPoints)) {
        echo "Error. Incorrent Points.";
        return;
    } 

    return sumPoints($firstPoints, $secondPoints, $thirdPoints) / 3;
}

function pointsClassification($firstPoints, $secondPoints, $thirdPoints) {
    
   if(!points($firstPoints, $secondPoints, $thirdPoints)) {
        echo "Error. Incorrent Points.";
        return;
    } 

    $totalPoints = sumPoints($firstPoints, $secondPoints, $thirdPoints);

    if($totalPoints>= 8000){
        echo "Professional classification";
    } elseif($totalPoints >= 4000){
        echo "Intermediant classification";
    } else {
        echo "Principiant classification";
    }

}

echo "<br>";

echo sumPoints(400, 1000, 10000) . "<br>";

echo sumPoints(400, 1000, 200) . "<br>";

echo mediaPoints(400, 1000, 200) . "<br>";

echo pointsClassification(400, 1000, 200) . "<br>";

echo pointsClassification(4000, 1000, 3000) . "<br>";

echo pointsClassification(4000, 1000, 1000) . "<br>";


?>