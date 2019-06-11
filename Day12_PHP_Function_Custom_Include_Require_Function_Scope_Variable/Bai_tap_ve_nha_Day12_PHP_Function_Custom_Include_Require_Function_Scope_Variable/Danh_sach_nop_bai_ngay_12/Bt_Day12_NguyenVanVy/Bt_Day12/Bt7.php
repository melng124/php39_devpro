<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 5:41 PM
 */
function draw($num){
    if ($num<0){
        return'<p>Không thể hiển thị các ký tự * với giá trị âm</p>';
    }
    else {
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        return null;
    }
}
echo draw(-3);
echo draw(0);
echo draw(2);
echo draw(5);
echo draw(10);
