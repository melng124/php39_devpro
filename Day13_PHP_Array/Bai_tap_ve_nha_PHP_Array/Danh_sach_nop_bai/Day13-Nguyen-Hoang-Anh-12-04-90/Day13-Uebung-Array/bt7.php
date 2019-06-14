<?php
/*Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]
Áp dụng với 1 số mảng sau:
$arrs = [‘1’, ‘B, ‘C’, ‘E’];
$arrs = [‘a’, 0, null, false];*/

function toLowerCase($arrs = []) {
    foreach ($arrs as &$value) {
        $value = strtolower($value);
    }
    echo '<pre>';
    print_r($arrs);
}

$arrs = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];
toLowerCase($arrs);
toLowerCase($arrs2);
