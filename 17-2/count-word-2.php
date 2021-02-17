<?php
function countLetter($str, $y){
    $toArr=str_split($str);
    $count=0;
    for ($i=0;$i<count($toArr);$i++){
        if ($toArr[$i]===$y){
            $count++;
        }
    }
    return substr_count($count);
}

$str='cong hoa xa hoi chu nghia viet nam';
print_r(countLetter($str,cong));