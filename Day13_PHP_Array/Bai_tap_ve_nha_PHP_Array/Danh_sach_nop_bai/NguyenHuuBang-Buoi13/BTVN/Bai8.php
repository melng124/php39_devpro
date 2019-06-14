<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 9:54 AM
 */
function Tinh($n)
{
    $tong = 0;
    if ($n >= 0) {
        for ($i = 1; $i <= $n; $i++) {
            $tong += 1 / $i;
        }
        echo "1+1/2+...+1/$n = $tong";
    } else {
        echo "Không cho phép tính toán với số âm";
    }
}

Tinh(10);