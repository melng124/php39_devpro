<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 3:24 PM
 */
function kiemtraSNT($n){
    for ($i = 2; $i < $n; $i++){
        if($n % $i == 0){
            return 0;
        }
    }
    return 1;
}
$a = kiemtraSNT(3);
if ($a == 0){
    echo "Đây ko phải số nguyên tố";
}
else{
    echo "Đây là số nguyên tố";
}
?>