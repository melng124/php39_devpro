<?php
function tinh($d){
    if($d<0) echo 'Không cho phép tính  trên số âm';
    else{
        echo"Với đường kính =  $d <br/>";
        echo 'Chu vi hình tròn   =  '. ( 3.14 * $d);
        echo"<br/>";
        echo 'Diện tích hình tròn   =  '. ( 3.14 * ($d*$d)/4);
        echo"<br/>";
    }     
    echo"<hr>";
}
tinh(-3);
tinh(0);
tinh(5);
tinh(7.5);
tinh(100);
?>