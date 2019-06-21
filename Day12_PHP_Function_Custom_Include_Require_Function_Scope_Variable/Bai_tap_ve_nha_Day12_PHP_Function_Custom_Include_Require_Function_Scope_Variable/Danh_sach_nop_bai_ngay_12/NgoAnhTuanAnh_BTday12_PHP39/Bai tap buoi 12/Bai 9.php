<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 10/6/2019
 * Time: 8:37 AM
 */
function multilply($n){
    $result = 0;
    if($n < 0){
        echo "Không cho phép tính toán với số âm";
    }
    else{
        for ($i = 1; $i <= $n; $i++){
            $result += $i*2*$n;
        }
        echo "Kết quả : ".$result;
    }
}
multilply(4);
?>