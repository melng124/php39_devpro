<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 13:01 PM
 */
function covert($a){
   for ($key=0;$key<count($a);$key++){
       $a[$key]= strtolower($a[$key]);
   }
    return $a;
}

function conver1($a){
    foreach ($a as $key => $value){
        $a[$key] =strtolower($a[$key]);
    }
    return $a;
}


print_r(covert(['a', 'b','ABC']));
echo "<br/>";
print_r(conver1(['a','b','ABC']));