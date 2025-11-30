<?php 
/* Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/ 

function isBitten(): bool {
    if(rand(0,1) == 1) {
        return true;
    } else {
        return false;
    }
}

if(isBitten()) {
    echo "Charlie hungry, Charlie bite finger!!!!";
} else {
    echo "Your fingers are safe.";
}

?>