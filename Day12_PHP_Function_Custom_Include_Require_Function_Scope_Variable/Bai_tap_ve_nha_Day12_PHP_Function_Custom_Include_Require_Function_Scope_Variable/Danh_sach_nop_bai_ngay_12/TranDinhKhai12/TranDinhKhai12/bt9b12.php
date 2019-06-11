<?php
function sum($x,$n){
    if($n<0)echo 'Không cho phép tính toán với số âm';
    elseif($n==0) echo"S(0)=0";
    else{

        $sum=0;
        echo"Với x = $x và n = $n thì ";
        echo "S($n) = ";
        for($i=1;$i<=$n;$i++){
            $sum+=pow($x,2*$i);
            echo "$x * ".(2*$i);
            if($i<$n)echo ' + ';
            else echo' = ';
        }
        echo $sum;
    }
    echo"<br/>";
}
sum(3,-3);
sum(2,0);
sum(2,4);
sum(2,10);
sum(2,120);
?>