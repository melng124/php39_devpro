<?php
/*Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
Áp dụng với 1 số mảng sau:
$arrs = [‘1’, ‘b, ‘c’, ‘d’];
$arrs = [‘a’, 0, null, false];*/

function toUpperCase($arrs = []) {
    foreach ($arrs as &$value) {
        $value = strtoupper($value);
    }
    echo '<pre>';
    print_r($arrs);
}

$arrs = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];
toUpperCase($arrs);
toUpperCase($arrs2);
