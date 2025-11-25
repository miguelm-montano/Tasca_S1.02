/*El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.*/<br>

<?php 

$max = 12;
for($i = 2; $i < $max; $i++) {
    $numeros[$i] = true;
}

for($n = 2; $n < $max; $n++) {
    if($numeros[$n]) {
        for($i = $n * $n; $i < $max; $i += $n) {
            $numeros[$i] = false;
        } 
    }
}

echo "Primos: ";
for($n = 2; $n < $limite; $n++) {
    if($numeros[$n]) {
        echo $n . " ";
    }
}

?>