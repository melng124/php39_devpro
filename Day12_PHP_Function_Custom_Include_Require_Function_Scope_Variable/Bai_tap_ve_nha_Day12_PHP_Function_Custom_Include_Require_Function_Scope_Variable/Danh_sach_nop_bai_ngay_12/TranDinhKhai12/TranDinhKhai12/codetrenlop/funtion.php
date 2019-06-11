<?php
/**
 * 
 */

$n=27;
function sont($n){
    for($i=2;$i<sqrt($n);$i++){
        if($n%$i==0)return false;
    }
    return true;
}
if(sont($n)==true)echo'la so nguyen to';
else echo'khong la so nguyen to';
?>