<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 11:33 PM
 */
function TinhBt($n)
{

    echo "Cho n = $n";
    if ($n < 0) {
        return '<p style="color: red">Không cho phép tính toán với số âm</p>';
    }
    elseif ($n==0){
        return "<p style='color: #34ce57'>S($n) = $n</p>";
    }
    else {
        $Bt = 0;
        echo '<p style="color: #34ce57">S(n) = ';
        for ($i = 1; $i <= $n; $i++) {
            $Bt += 1 / $i;
            if ($i < $n) {
                echo '1/' . $i . ' + ';
            } else {
                echo '1/' . $i;
            }
        }
        return " = $Bt</p>";
    }
}
echo TinhBt(-3);
echo TinhBt(0);
echo TinhBt(4);
echo TinhBt(10);
echo TinhBt(120);