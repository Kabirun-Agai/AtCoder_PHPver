<?php
// Your code here!
$n = trim(fgets(STDIN));
$monsters = explode(" ", trim(fgets(STDIN)));
$heros = explode(" ", trim(fgets(STDIN)));
$ans = array_sum($monsters);

for ($i = 0; $i < $n ; $i++){
    if($heros[$i] >= $monsters[$i]){
        $heros[$i] -= $monsters[$i];
        $monsters[$i] = 0;
        
        if($heros[$i] >= $monsters[$i+1]){
            $monsters[$i+1] = 0;
        }else{
            $monsters[$i+1] -= $heros[$i];
        }
    }else{
        $monsters[$i] -= $heros[$i];
    }
}

echo $ans - array_sum($monsters);
?>
