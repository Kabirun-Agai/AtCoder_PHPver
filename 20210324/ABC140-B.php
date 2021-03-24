<?php
// Your code here!
$n = trim(fgets(STDIN));

$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));
$c = explode(" ", trim(fgets(STDIN)));

$ans = array_sum ($b);


for ($i = 0 ; $i < count($a)-1 ; $i++){
  
    if ($a[$i]+1 == $a[$i+1]){
      
        $ans += $c[$a[$i]-1];
    }
}

echo $ans;
?>