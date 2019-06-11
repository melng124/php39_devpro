<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 2:27 PM
 */

//Vòng for đầu tiên để duyệt theo từng hàng từ trên xuống dưới(Chỉ duyệt mà ko in ra gì cả)
for ($i = 1; $i <= 5; $i++) {
    //Vòng for thứ 2 bắt đầu in ra các dấu * theo từng hàng
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
