<?php 
/*El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.*/

function calculateEratostenes($max) {
    
    //iniciamos contando todos como primos
    for($i = 2; $i < $max; $i++) {
        $numeros[$i] = true;
    }

    //marcamos multiplos
    for($n = 2; $n < $max; $n++) {
    if($numeros[$n]) {
        for($i = $n * $n; $i < $max; $i += $n) {
            $numeros[$i] = false;
        } 
     }
}

//guardamos los primos 
    $primos = [];
    for($n = 2; $n < $max; $n++) {
        if($numeros[$n]) {
        $primos[] = $n;
    }
    }
    return $primos;

}

$primosGroupA = calculateEratostenes(12);
echo "Primos: " . implode(" ", $primosGroupA) . PHP_EOL;

$primosGroupB = calculateEratostenes(18);
echo "Primos: " . implode(" ", $primosGroupB);

?>