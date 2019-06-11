<?php
$a = 0;
$b = 5;
$c = 8;
$d = (-5);

function tinhGiaithua($n) {
    if ($n > 0) {
        return $n * tinhGiaithua ( $n - 1 );
    } else {
        return 1;
    }
}

// tính giai thừa
echo ("" . $a . "! = " . tinhGiaithua ( $a ) . "<br>");
echo (" " . $b . "! = 1 x 2 x 3 x 4 x 5 =" . tinhGiaithua ( $b ) . "<br>");
echo (" " . $c . "! = 1 x 2 x 3 x 4 x 5 x 6 x7 x8 =" . tinhGiaithua ( $c ) . "<br>");
echo ("" . $d . "! = " . tinhGiaithua ( $d ) . "<br>");
?>