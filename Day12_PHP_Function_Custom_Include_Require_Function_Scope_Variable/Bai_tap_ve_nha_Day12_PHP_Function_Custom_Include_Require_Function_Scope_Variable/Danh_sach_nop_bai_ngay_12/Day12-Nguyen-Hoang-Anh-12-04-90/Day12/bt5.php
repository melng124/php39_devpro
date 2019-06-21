<?php
function resolve($a, $b, $c) {
    $delta = ($b * $b) - (4 * $a * $c);
    if ($a == 0 && $b != 0) {
        echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        echo 'Có nghiệm x = ' . -$c / $b . '<br>';
    }
    elseif ($a == 0 && $b == 0 && $c != 0) {
        echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        echo "Vô nghiệm" . '<br>';
    }
    elseif ($delta < 0) {
        echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        echo 'Vô nghiệm' . '<br>';
    }
    elseif ($delta == 0) {
        echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        echo 'Có nghiệm kép: ' . 'x<sub>1</sub> = x<sub>2</sub> = ' . -$b / (2*$a) . '<br>';
    }
    else {
        echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0' . '<br>';
        echo 'Có nghiệm 2 nghiệm phân biệt: ' . 'x<sub>1</sub> = ' . (-$b + sqrt($delta)) / (2 * $a) . '; ' .
            'x<sub>2</sub> = ' . (-$b - sqrt($delta)) / (2 * $a) . '<br>';
    }
}

resolve(0, 0, 2);
echo '<br>';
resolve(2, 4, -6);
echo '<br>';
resolve(0, 5, 5);
echo '<br>';
resolve(5, 0, 5);


