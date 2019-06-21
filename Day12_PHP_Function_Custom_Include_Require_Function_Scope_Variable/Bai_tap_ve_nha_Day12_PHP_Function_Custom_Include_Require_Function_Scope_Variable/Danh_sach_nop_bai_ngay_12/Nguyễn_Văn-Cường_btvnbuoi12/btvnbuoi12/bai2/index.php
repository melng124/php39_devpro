<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/6/2019
 * Time: 23:12 PM
 */
function validate($n)
{
    if ($n < 0) {
        return false;
    } else {
        if ($n == 0) {
            return false;
        }
    }
    return true;
}

//$n = 4;
function hienthi($n)
{
    if (validate($n) == true) {
        $chuvi=$n*2*3.14;
        $dientich=$n*$n*3.14;
        echo "chu vi hình tròn= $chuvi";
        echo "<br/>";
        echo "diện tích hình tròn= $dientich";
    } else {
        if ($n ==0) {
            echo "chu vi và diện tích =0";
        } else {
            echo "Không cho phép tính giai thừa trên số âm ";
        }
    }
}

hienthi(-3);
echo "<br/>";
echo "<br/>";
echo "<br/>";
hienthi(0);
echo "<br/>";
echo "<br/>";
echo "<br/>";
hienthi(5);
echo "<br/>";
echo "<br/>";
echo "<br/>";
hienthi(7.5);
echo "<br/>";
echo "<br/>";
echo "<br/>";
hienthi(100);