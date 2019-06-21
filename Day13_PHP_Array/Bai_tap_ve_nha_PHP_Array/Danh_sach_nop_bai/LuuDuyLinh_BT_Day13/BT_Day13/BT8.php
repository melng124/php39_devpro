<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 13:18 PM
 */
function covert($a){
    for ($key=0;$key<count($a);$key++){
        $a[$key]= strtoupper($a[$key]);
    }
    return $a;
}
print_r(covert(['a','b','ABC']));