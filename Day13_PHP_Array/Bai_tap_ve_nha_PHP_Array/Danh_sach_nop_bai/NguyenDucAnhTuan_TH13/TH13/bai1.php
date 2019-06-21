<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$arrs1 = [2, 5, 0];
$arrs2 = [22, 5, -1];
$arrs3 = [0, 5, -1];
function arr($arr){
    $tong = 0;
    $hieu = 0;
    $tich = 1;
    $thuong = 1;
    foreach ($arr as $key => $value){
        $tong += $value;
        $tich *= $value;
        if($key == 0){
            $hieu = $arr[0];
        }
        else{
            $hieu -= $value;
        }
        if($key == 0){
            $thuong = $arr[0];
        }
        else{
            if($arr[$key] == 0){
                continue;
            }
            $thuong /= $value;
        }
    }
    return "Tổng các phần tử = $tong<br/>Hiệu các phần tử = $hieu<br/>Tích các phần tử = $tich<br/>Thương các phần tử = $thuong<br/>";
}
echo "<pre>";
print_r($arrs);
echo "<br/>";
echo arr($arrs);
echo "<pre>";
print_r($arrs1);
echo "<br/>";
echo arr($arrs1);
echo "<pre>";
print_r($arrs2);
echo "<br/>";
echo arr($arrs2);
echo "<pre>";
print_r($arrs3);
echo "<br/>";
echo arr($arrs3);
