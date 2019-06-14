<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/11/2019
 * Time: 12:05 PM
 */
$var1 = 5;
if($var1<0){
    echo'phai la so duong';
}
else{
    $k = 1;
    for($i = 1;$i<=5;$i++){
        $k *= $i;
    }
    echo'vay giai thua cua 5 la'.$k;
}
echo"<br>";
$var2 = -5;
    $k = 1;
    for($i = -5;$i<=-1;$i++){
        $k *= $i;
    }

    echo'vay giai thua cua -5 la'.$k;


   echo"<br>";
    $var3 = 0;
if($var1<0){
    echo'phai la so duong';
}
else{
    $k = 1;
    for($i = 0;$i<=1;$i++){
        $k *= $i;
    }
    echo'vay giai thua cua 0 la'.$k;
}
echo"<br>";
$var4 = 8;
if($var1<0){
    echo'phai la so duong';
}
else{
    $k = 1;
    for($i = 1;$i<=8;$i++){
        $k *= $i;
    }
    echo'vay giai thua cua 8 la'.$k;
}
