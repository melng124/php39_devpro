<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 11:40 PM
 */
function TinhBt2($n)
{
    $x = 3;

    echo "Cho n = $n";
    if ($n < 0) {
        return '<p style="color: red">Không cho phép tính toán với số âm</p>';
    }
    elseif ($n==0){
        return "<p style='color: #007bff'>S($n) = $n</p>";
    }
    else {
        $bt = 0;
        echo "<p>Cho x = $x</p>";
        echo '<p style="color: #007bff">S(n) = ';
        for ($i = 1; $i <= $n; $i++) {
            $j = 2 * $i;
            if ($i < $n) {
                echo $x . '*' . $j . ' + ';
            } else {
                echo $x . '*' . $j;
            }
            $bt += $x * $j;
        }
        return " = $bt</p>";
    }
}

echo TinhBt2(-3);
echo TinhBt2(0);
echo TinhBt2(4);
echo TinhBt2(10);
echo TinhBt2(120);