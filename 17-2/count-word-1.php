<?php
function countWord($str, $y){
    $toArr=str_split($str);
    $count=0;
    for ($i=0;$i<count($toArr);$i++){
        if ($toArr[$i]===$y){
            $count++;
        }
    }
    return $count;
}

$str='happy new year';
print_r(countWord($str,e));