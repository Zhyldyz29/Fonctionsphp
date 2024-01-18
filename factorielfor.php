<?php // ecrire une fonction factorielle

function fact($x) {
    // exemple f
$total = 1;
for ($i=1; $i<= $x; $i++) {

    $total =$total*$i;
}

    return $total;
}
$x = 5;
$fact = fact($x);

echo "total = $fact"; // donnera 120


?>