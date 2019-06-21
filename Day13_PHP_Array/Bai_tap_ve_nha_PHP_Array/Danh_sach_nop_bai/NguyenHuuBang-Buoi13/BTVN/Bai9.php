<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 10:02 AM
 */
function Tinh ($x,$n){
    $tong = 0;
    if($x<0 || $n <0){
        echo "<p>Không cho phép tính toán với số âm</p>";
    }else{
        for ($i=1;$i<=$n;$i++){
            $tong+=$x*$i*2;
        }echo "<p>S($n) = $tong</p>";
    }
}
Tinh(3,3);
Tinh(3,-3);
Tinh(3,0);
Tinh(3,4);
Tinh(3,10);