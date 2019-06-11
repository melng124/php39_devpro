<?php
function calculation($n) {
    if ($n < 0) {
        echo 'Không cho phép tính toán với số âm';
        echo '<br>';
    }
    elseif ($n == 0) {
        echo 'Không cho phép chia cho 0';
        echo '<br>';
    }
    else {
        $sum = 0;
        echo "S($n) = ";
        for ($i = 1; $i <= $n; $i++) {
            $sum += (1 / $i);
            if ($i < $n) {
                echo "1/$i + ";
            }
            else {
                echo "1/$i";
            }
        }
        echo " = $sum";
        echo '<br>';
    }
}

calculation(-3);
echo '<br>';
calculation(0);
echo '<br>';
calculation(4);
echo '<br>';
calculation(10);
echo '<br>';
calculation(120);
echo '<br>';
