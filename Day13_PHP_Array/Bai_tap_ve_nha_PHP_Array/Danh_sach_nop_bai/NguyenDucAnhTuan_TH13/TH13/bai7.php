<?php
$arr1 = ['a', 'BC', 'Ca', 'E'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];
function lower($arr){
    $str = implode(' ', $arr);
    $str1 = strtolower($str);
    $str2 = explode(' ', $str1);
    return $str2;
}
echo "Mảng arr1 trước khi chuyển:<br/>";
echo "<pre>";
var_dump($arr1);
echo "<br/>";
echo "Mảng arr1 sau khi chuyển:<br/>";
echo "<pre>";
var_dump(lower($arr1));
echo "<br/>";
echo "-----------------------------------<br/>";
echo "Mảng arr2 trước khi chuyển:<br/>";
echo "<pre>";
var_dump($arr2);
echo "<br/>";
echo "Mảng arr2 sau khi chuyển:<br/>";
echo "<pre>";
var_dump(lower($arr2));
echo "<br/>";
echo "-----------------------------------<br/>";
echo "Mảng arr3 trước khi chuyển:<br/>";
echo "<pre>";
var_dump($arr3);
echo "<br/>";
echo "Mảng arr3 sau khi chuyển:<br/>";
echo "<pre>";
var_dump(lower($arr3));
echo "<br/>";
echo "-----------------------------------<br/>";
