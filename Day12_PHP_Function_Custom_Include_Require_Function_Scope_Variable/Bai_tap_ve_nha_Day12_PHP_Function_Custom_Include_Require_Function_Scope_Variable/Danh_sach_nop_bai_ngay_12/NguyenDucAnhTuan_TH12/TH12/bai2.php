<?php
function tinh($d){
    if($d > 0){
        $P = $d * 3.14;
        $S = (pow($d,2)/4)*3.14;
        echo "<b>Với đường kính $d:<br/> Chu vi hình tròn = $P<br/>Diện tích hình tròn: $S</b><br/>";
        echo "--------------------------------------<br/>";
    }
    else if($d == 0){
        echo "<b>Không là hình tròn</b><br/>";
        echo "--------------------------------------<br/>";
    }
    else{
        echo "<b>Không cho phép tính toán với số âm</b><br/>";
        echo "--------------------------------------<br/>";
    }
}
tinh(-3);
tinh(0);
tinh(5);
tinh(7.5);
tinh(100);
?>