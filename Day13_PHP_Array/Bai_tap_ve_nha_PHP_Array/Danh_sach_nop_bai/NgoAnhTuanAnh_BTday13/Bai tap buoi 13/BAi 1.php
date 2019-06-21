<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13/6/2019
 * Time: 8:44 AM
 */
$arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];
print_r($arr);
$sum = 0;
$sub =4;
$multiply = 1;
$div =4;
foreach ($arr as $key => $value){
    $sum += $value;
    $sub -= $value;
    $multiply *= $value;
    $div /= $value;
}
echo "Tổng các phần tử =".$sum;
echo "<br>";
echo "Hiệu các phần tử = ".$sub;
echo "<br>";
echo "Tích các phần tử = ".$multiply;
echo "<br>";
echo "Thương các phần tử = ".$div;
echo "<br>";
?>