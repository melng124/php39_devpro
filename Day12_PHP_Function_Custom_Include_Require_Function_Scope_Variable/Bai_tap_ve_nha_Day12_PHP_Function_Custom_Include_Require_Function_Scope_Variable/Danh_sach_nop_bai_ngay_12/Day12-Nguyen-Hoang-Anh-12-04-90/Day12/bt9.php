<?php
function sum($n) {
    $sum = 0;
    if ($n < 0) {
        echo 'Không cho phép tính toán với số âm';
    }
    elseif ($n == 0) {
        echo "Tổng bằng 0";
    }
    else {
        for ($i = 1; $i <= $n; $i++) {
            $sum += $n * 2 * $i;
            if ($i < $n) {
                echo $n . ' * ' . 2 * $i . ' + ';
            }
            else {
                echo $n . ' * ' . 2 * $i;
            }
        }
        echo " = $sum";
    }
}

sum(-3);
echo '<hr>';
sum(0);
echo '<hr>';
sum(4);
echo '<hr>';
sum(10);
echo '<hr>';
sum(120);