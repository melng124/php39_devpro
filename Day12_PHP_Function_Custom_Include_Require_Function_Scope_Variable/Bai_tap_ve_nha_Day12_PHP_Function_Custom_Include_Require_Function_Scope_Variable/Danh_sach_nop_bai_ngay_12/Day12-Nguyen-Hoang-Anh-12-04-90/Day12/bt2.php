<?php
function circumCircle($d) {
    if ($d < 0) {
        echo 'Không cho phép tính toán với số âm';
        echo '<br>';
    }
    else {
        echo 'Chu vi hình tròn = ' . ($d * 3.14);
        echo '<br>';
    }
}
function areaCircle($d) {
    if ($d < 0) {
        echo 'Không cho phép tính toán với số âm';
        echo '<br>';
    }
    else {
        echo 'Diện tích hình tròn = ' . (($d * $d) / 4 * 3.14);
        echo '<br>';
    }
}

circumCircle(-3);
areaCircle(-3);
circumCircle(0);
areaCircle(0);
circumCircle(5);
areaCircle(5);
circumCircle(7.5);
areaCircle(7.5);
circumCircle(100);
areaCircle(100);