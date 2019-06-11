<?php
function in($n){
    if($n > 0){
        echo "<b>Với n = $n :</b><br/>";
        for($i = 1; $i <= $n; $i++){
            for($j = 1; $j <= $i ; $j++){
                echo " * ";
            }
            echo "<br/>";
        }
    }
    else if($n == 0 ){
        echo "<b>Nhập n khác 0</b><br/>";
    }
    else{
        echo "<b>Không hiển thị các kí tự * với số âm</b><br/>";
    }
}
in(2);
in(5);
in(0);
in(10);
in(-5);
?>