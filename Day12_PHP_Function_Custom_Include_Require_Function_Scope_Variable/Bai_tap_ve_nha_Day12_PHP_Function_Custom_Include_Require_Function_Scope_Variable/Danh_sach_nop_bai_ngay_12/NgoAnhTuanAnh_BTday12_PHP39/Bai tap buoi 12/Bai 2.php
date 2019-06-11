<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 2:38 PM
 */
function hinhTron($d){
    if ($d < 0){
        // Khi đường kính là số âm hiển thị thông báo.
        echo "Không cho phép tính toán với số âm";
    }
    else if($d == 0){
        echo "Chu vi và diện tích = 0";
    }
    else{
        $cv = $d *3.14;
        $dt = (($d*$d)/4) *3.14;
        echo "<p>Chu vi hình tròn = $cv</p>";
        echo "<p>Diện tích hình tròn = $dt</p>";
    }

}
hinhTron(7.5);
hinhTron(0);
hinhTron(-3);
?>
