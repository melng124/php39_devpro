<?php
/*
 Viết chương trình web tính chu vi, diên tích của hình tròn có đường kính = 6m sử dụng PHP
 */
const PI = 3.14;
$diameter = 6;
$perimeter = $diameter * PI;
$area = ($diameter * $diameter)/4 * PI;
echo "<p>Chu vi hình tròn có đường kính = $diameter là: " . $perimeter . "m</p>";
echo "<p>Diện tích hình tròn có đường kính = $diameter là: " . $area . "m<sup>2</sup></sup></p>";