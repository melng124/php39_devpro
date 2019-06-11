<?php
function minMax($a, $b, $c, $d) {
    echo "Số nhỏ nhất trong 4 số: $a, $b, $c, $d là: " . min($a, $b, $c, $d) . '<br>';
    echo "Số lớn nhất trong 4 số: $a, $b, $c, $d là: " . max($a, $b, $c, $d) . '<br>';
}

minMax(0,0,2,6);
echo '<br>';
minMax(2,4,-6,-10);
echo '<br>';
minMax(0,5,5,2);
echo '<br>';
minMax(5,0,5,4);

