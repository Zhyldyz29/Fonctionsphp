<?php // ecrire une fonction factorielle
declare(strict_types=1);
// factorielle iterative
function fact($x) {
    if ($x<=0) return "pas de factorielle négative";
    if (!is_int($x)) return "l'argument doit être un entier";
    // si je fais facto(1)
   
    $total =1;

for ($i=1; $i<= $x; $i++) {

    $total *= $i;
}

    return $total;
}

function factRec($y) {
    if ($y <=1) { return 1;} 
    return $y *factRec($y-1);
}

echo (fact(5))."<br>"; // donnera 120

echo (factRec(5)); // donnera 120

?>