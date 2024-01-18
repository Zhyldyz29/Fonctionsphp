<?php
function modifTableau(&$t){
    $t[0] = 33;
}

$tablo = [1,2,3];
/*print_r($tablo); */

modifTableau($tablo);

var_dump($tablo);


?>