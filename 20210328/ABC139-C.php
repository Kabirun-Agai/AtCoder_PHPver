<?php
// Your code here!
$n = trim(fgets(STDIN));

$array = explode(" ", trim(fgets(STDIN)));

$j = 0;
$cnt = 0;
$max = 0;
while ($j < $n-1){
    
    if ($array[$j] >= $array[$j+1]){
        $cnt++;
    }else{
        if ($cnt > $max){
            $max = $cnt;
        }
        $cnt = 0;
    }
    
    $j++;
}

if ($cnt > $max){
    $max = $cnt;
}


echo $max;

?>