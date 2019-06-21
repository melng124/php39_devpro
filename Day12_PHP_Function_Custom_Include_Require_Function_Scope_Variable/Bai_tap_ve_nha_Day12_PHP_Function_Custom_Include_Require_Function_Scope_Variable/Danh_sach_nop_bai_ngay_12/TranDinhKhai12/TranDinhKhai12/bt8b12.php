<?php
function sum($n){
    if($n<0)echo 'Không cho phép tính toán với số âm';
    elseif($n==0) echo 'Không cho phép chia với số 0 ';
    else{
        $sum=0;
        echo"S($n) = ";
        for($i=1;$i<=$n;$i++){
            $sum=$sum+1/$i;
            echo"1/$i ";
            if($i<$n)echo ' + ';
            else echo' = ';
        }
        echo $sum;
    }
    echo"<br/>";
}
sum(-3);
sum(0);
sum(4);
sum(10);
sum(20);
?>