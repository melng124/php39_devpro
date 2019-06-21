<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/6/2019
 * Time: 23:12 PM
 */
function giaithua($n)
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
    if (giaithua($n) == true) {
        echo "$n!= ";
        $sum=1;
        for ($i = 1; $i <= $n; $i++) {
            $sum*=$i;
            if ($i == $n) {
                echo "$i";
            } else {
                echo "$i x ";
            }
        }
        echo "=$sum";

    } else {
        if ($n ==0) {
            echo "$n!=0";
        } else {
            echo "Không cho phép tính giai thừa trên số âm ";
        }
    }
}

hienthi(-5);
echo "<br/>";
hienthi(0);
echo "<br/>";
hienthi(5);
echo "<br/>";
hienthi(8);