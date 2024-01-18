<?php
function ajoute3($x)
{
    // passage par valeur de $x
    $x += 3;
    return ($x);

}
function ajouteRef(&$x) {  
 // passage par valeur de $x
 $x =12;
}
       
/*$y = 0;
echo ajoute3($y) ."<br>";
echo $y . "<br>"; */

$z = 0;
ajouteRef($z);
echo $z;

?>