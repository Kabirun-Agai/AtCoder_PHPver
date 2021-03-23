<?php
// Your code here!
$str = trim(fgets(STDIN));

$str = str_replace(PHP_EOL, '', $str); //改行コード削除

$str = str_split($str);

array_unshift($str , "a");

for($i = 1 ; $i < count($str) ; $i++){

    if ($i % 2 === 0 && $str[$i] === "R"){
        echo "No";
        exit;
    }else if($i % 2 !== 0 && $str[$i] === "L"){
        echo "No";
        exit;
    }
 
}

echo "Yes";

?>