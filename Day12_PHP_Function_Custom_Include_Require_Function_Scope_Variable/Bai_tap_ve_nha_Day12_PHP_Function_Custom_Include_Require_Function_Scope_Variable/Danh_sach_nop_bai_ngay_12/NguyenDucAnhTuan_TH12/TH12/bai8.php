<?php
function sum($n){
    if($n > 0){
        $tsum = 0;
        echo "<b>S($n) = </b>";
        for($i = 1; $i <= $n; $i++){
            $tsum +=  1/$i;
            if($i < $n){
                echo "<b>1/$i + </b>";
            }
            else{
                echo "<b>1/$i </b>";
            }
        }
        echo "<b>= $tsum</b><br/><br/>";
    }
    else if($n == 0){
        echo "<b>n phải khác 0</b><br/><br/>";
    }
    else{
        echo "<b>Không cho phép tính toán với số âm</b><br/><br/>";
    }
}
sum(4);
sum(10);
?>