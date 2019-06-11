<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/9/2019
 * Time: 11:31 PM
 */
function ChuVi($num)
{
    echo '<p style="color: red">Đường kính hình tròn = '.$num.'m</p>';
    if ($num < 0) {
        return '<p>Không cho phép tính toán với số âm</p>';
    } else {
        return '<p>Chu vi hình tròn = '.$num * 3.14.'m</p>';
    }
}
function DienTich($num){
    echo '<p style="color: red">Đường kính hình tròn = '.$num.'m</p>';
    if ($num < 0) {
        return '<p>Không cho phép tính toán với số âm</p>';
    } else {
        return '<p>Diện tích hình tròn = '.($num * $num) / 4 * 3.14.'m<sup>2</sup></p>';
    }
}
echo ChuVi(-3);
echo DienTich(-3);
echo ChuVi(0);
echo DienTich(0);
echo ChuVi(5);
echo DienTich(5);
echo ChuVi(7.5);
echo DienTich(7.5);
echo ChuVi(100);
echo DienTich(100);
