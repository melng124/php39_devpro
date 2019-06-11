<?php
function fact($n){
    if($n > 0){
        $ft = 1;
        echo "<b>$n! = </b>";
        for($i = 1; $i <= $n; $i++){
            $ft *= $i;
            if($i < $n){
                echo "<b>$i x </b>";
            }
            else{
                echo "<b>$i</b>";
            }
        }
        echo "<b> = $ft</b><br/>";
    }
    else if ($n == 0){
        echo "<b>0! = 1</b><br/>";
    }
    else{
        echo "<b>Không cho phép tính giai thừa trên số âm</b><br/>";
    }
}
fact(-5);
fact(0);
fact(5);
fact(8);
?>