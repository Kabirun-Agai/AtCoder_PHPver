<?php
// Your code here!
$n = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));

sort($array);
$tmp = 0;
$index = 0;

for($i = 0 ; $i < $n-1 ;$i++){

    $tmp = ($array[$index] + $array[$index+1]) / 2;
    unset($array[$index]);
    $array[$index+1] = $tmp;
    $array = array_values($array);
   
}

echo $array[0];
?>
