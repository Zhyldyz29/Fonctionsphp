<?php
  function fact($x){
    if($x <= 1){
      return 1;   
    }
    else{
      return $x * fact($x - 1);
    }
  }
    
  $x = 5; 
  $f = fact($x); 
  echo "La factorielle de $x est $f"; 
?>