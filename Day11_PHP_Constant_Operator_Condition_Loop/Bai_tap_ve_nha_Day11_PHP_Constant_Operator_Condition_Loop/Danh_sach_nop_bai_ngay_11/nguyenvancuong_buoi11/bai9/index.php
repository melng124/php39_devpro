<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/6/2019
 * Time: 1:00 AM
 */
$n=5;
for ($i=1;$i<=$n;$i++){
    for ($j=0;$j<$i;$j++){
        echo "*";
    }
    echo"<br/>";
}
for ($i=1;$i<=$n;$i++){
    for ($j=$n-$i;$j>=0;$j--){
        echo "*";
    }
    echo"<br/>";
}