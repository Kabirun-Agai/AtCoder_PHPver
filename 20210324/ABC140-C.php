<?php
// Your code here!
$n = trim(fgets(STDIN));

$array = explode(" ", trim(fgets(STDIN)));

$ans_array = array_fill(0, $n, 0);

$ans_array[0] = $array[0];

for ($i = 1 ; $i < count($array) ; $i++){
    $ans_array[$i] = min($array[$i-1] , $array[$i]);
    
}

$ans_array[$n-1] = $array[$n-2];

echo array_sum ($ans_array);
?>
