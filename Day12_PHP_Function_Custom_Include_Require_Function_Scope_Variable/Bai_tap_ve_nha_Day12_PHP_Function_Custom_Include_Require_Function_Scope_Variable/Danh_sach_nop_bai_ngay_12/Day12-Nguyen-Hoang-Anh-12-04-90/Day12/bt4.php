<?php
function resolve($a, $b) {
    if ($a == 0) {
        echo "Phương trình vô nghiệm" . '<br>';
    }
    else
        echo 'Phương trình ' . $a . "x + $b = 0 có nghiệm x = " . -$b / $a . '<br>';
}

resolve(0, 5);
echo '<br>';
resolve(2, -2);
echo '<br>';
resolve(0, 0);