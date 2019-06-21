<?php
//1.	Tính tổng – tích – hiệu - thương của các phần tử trong mảng số nguyên sau, sử dụng hàm trong PHP:

function sum($arrs = []) {
    echo "Tổng của các phần tử = ";
    foreach ($arrs as $key => $value) {
        if ($key < count($arrs) - 1) {
            echo "$value + ";
        }
        else
            echo "$value = ";
    }
    echo array_sum($arrs);
    echo '<br>';
}

function product($arrs = []) {
    echo "Tích của các phần tử = ";
    foreach ($arrs as $key => $value) {
        if ($key < count($arrs) - 1) {
            echo "$value * ";
        }
        else
            echo "$value = ";
    }
    echo array_product($arrs);
    echo '<br>';
}

function different($arrs = []) {
    echo "Hiệu của các phần tử = ";
    $different = 2 * reset($arrs);
    foreach ($arrs as $key => $value) {
        $different -= $value;
        if ($key < count($arrs) - 1) {
            echo "$value - ";
        } else
            echo "$value = ";
    }
    echo $different;
    echo '<br>';
}

function divide($arrs = []) {
    echo "Thương của các phần tử = ";
    $divide = reset($arrs) * reset($arrs);
    if ($arrs[0] == 0) {
        foreach ($arrs as $key => $value) {
            if ($key < count($arrs) - 1) {
                echo "$value / ";
            } else {
                echo "$value = ";
            }
        }
        echo '0';
        return;
    }
    foreach ($arrs as $key => $value) {
        if ($value == 0) {
            if ($key < count($arrs) - 1) {
                echo "$value / ";
            } else {
                echo "$value = ";
            }
            echo ' Không xác định';
            return;
        }
        else {
            $divide /= $value;
            if ($key < count($arrs) - 1) {
                echo "$value / ";
            } else
                echo "$value = ";
        }
    }
    echo $divide;
    echo '<br>';
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
sum($arrs);
product($arrs);
different($arrs);
divide($arrs);
echo '<hr>';
$arrs2 = [2, 5, 0];
sum($arrs2);
product($arrs2);
different($arrs2);
divide($arrs2);
echo '<hr>';
$arrs3 = [22, 5, -1];
sum($arrs3);
product($arrs3);
different($arrs3);
divide($arrs3);
echo '<hr>';
$arrs4 = [0, 5, -1];
sum($arrs4);
product($arrs4);
different($arrs4);
divide($arrs4);



