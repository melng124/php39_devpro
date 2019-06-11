<?php
function sum($x,$n){
    if($n > 0){
        $tsum = 0;
        echo "<b>S($n) = </b>";
        for($i = 1; $i <= $n; $i++){
            $mu = 2*$i;
            $tsum +=  pow($x,2*$i);
            if($i < $n){
                echo "<b>$x*$mu + </b>";
            }
            else{
                echo "<b>$x*$mu </b>";
            }
        }
        echo "<b>= $tsum</b><br/><br/>";
    }
    else if($n == 0){
        echo "<b>Nhập n khác 0</b><br/><br/>";
    }
    else{
        echo "<b>Không cho phép tính toán với số âm</b><br/><br/>";
    }
}
sum(3,3);
sum(3,-3);
sum(3,0);
sum(3, 4);
?>