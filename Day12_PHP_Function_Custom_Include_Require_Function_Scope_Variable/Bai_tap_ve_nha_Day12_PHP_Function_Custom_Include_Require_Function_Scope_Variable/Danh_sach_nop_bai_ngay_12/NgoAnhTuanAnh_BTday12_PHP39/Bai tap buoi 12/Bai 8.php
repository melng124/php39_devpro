<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 10/6/2019
 * Time: 8:28 AM
 */
function sum($n){
    $sum = 0;
    if($n < 0){
        echo " Không cho phép tính với số âm";
    }
    else if (($n ==0)){
        echo "Không thực hiện xử lý";
    }
    else{
        for($i = 1; $i <= $n; $i++){
            $sum += 1/$i;
;        }
        echo "Kết quả : $sum";
    }
}
sum(0);
sum(10);
sum(-3);
?>