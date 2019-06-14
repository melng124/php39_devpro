<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/9/2019
 * Time: 9:21 PM
 */
const PI = 3.14;
function Tinh($radius)
{
    if ($radius >= 0) {
        $primeter = 2 * PI * $radius;
        $area = PI * $radius * $radius;
        echo "<p>Chu vi hình tròn là : $primeter</p>";
        echo "<p>Diện tích hình tròn là : $area</p>";
    } else {
        echo "<p>Không cho phép tính toán với số âm</p>";
    }
}

Tinh(-3);
Tinh(0);
Tinh(5);
Tinh(7.5);
Tinh(100);