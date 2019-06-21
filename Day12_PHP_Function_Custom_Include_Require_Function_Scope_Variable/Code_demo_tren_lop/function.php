<?php
//Function
//khai báo 1 function hiển thị ra tên của từng bạn trong lớp
//cú pháp đặt tên hàm đang có dạng là camelCase

/**
 * @param $name string name of person
 */
function displayName($name) {
    echo "<p>Hello, $name</p>";
}
displayName('Mỹ');
displayName('Mạnh');


//cơ chế hoisting
displayAge();
function displayAge() {
    echo '<p>Tôi 23 tuổi</p>';
}

//biến sẽ ko cơ chế hoisting
//echo $varAge;
//$varAge = 5;

//Khai báo hàm có tham số
//Tạo hàm tính tổng 3 số

/**
 * Cal sum of three number
 * @param $num1 integer Number 1
 * @param $num2 integer Number 2
 * @param $num3 integer Number 3
 * @return integer Sum of three number
 */
function sum($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;

    return $sum;

}

$sum = sum(3, 4, 5);
echo "<p>Sum of three number = $sum</p>";

//khai báo hàm và đồng thời khởi tạo giá trị mặc định
// cho tham số truyền vào

/**
 * @param string $string Text to display
 */
function displayText($string = 'Hello, World') {
    echo "<p>$string</p>";
}

displayText('ABC');

//So sánh cách truyền tham trị và tham chiếu
//VD về truyền tham trị
$var1 = 5;

function changeVar1($var) {
    $var++;
}

echo '<p>Giá trị của biến $var1 trước khi gọi hàm = ' .$var1. ' </p>';

changeVar1($var1);

echo '<p>Giá trị của biến $var1 sau khi gọi hàm = ' .$var1. ' </p>';

//ví dụ về truyền tham chiếu

$var2 = 5;

function changeVar2(&$var) {
    $var++;
}

echo '<p>Giá trị của biến $var2 trước khi gọi hàm = ' .$var2. ' </p>';

changeVar2($var2);

echo '<p>Giá trị của biến $var2 sau khi gọi hàm = ' .$var2. ' </p>';

//BT1 - Sử dụng hàm viết chương trình tính chu vi, diện tích
// của hình chữ nhật có chiều rộng = 5cm, chiều dài 10cm

function circumRectangle($width, $height) {
    return ($width + $height) * 2;
}

$circum = circumRectangle(10, 5);
echo '<p>Chu vi hình chữ nhật có width = 10 và height = 5 là: ' . $circum .'</p>';

//BT2 Sử dụng hàm viết chương trình kiểm tra 1 số có phải số nguyên tố hay không,
// check với các giá trị 5, 12, 27, 29
//khi tạo hàm, cần xác định 2 khái niệm quan trọng là:
//+ Hàm của bạn có cần tham số tham số truyền vào hay ko?
//+ Có sử dụng lệnh return hay ko
function isPrime($number) {
    if ($number >= 1 && $number <= 2) {
        return true;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$var = 9;
if (isPrime($var) == TRUE) {
    echo "<p>$var là số nguyên tố</p>";
}
else {
    echo "<p>$var không là số nguyên tố</p>";
}


///Cách import file sử dụng cơ chế include và require
//require 'import.php';
//include 'import123456.php';
//require 'import123456.php';
//nên sử dụng hàm require_once hoặc require
//để đảm bảo tính chặt chẽ của toàn chương trình

require 'import.php';
require_once 'import.php';
echo '<p style=color:red>Dòng text này ở cuối cùng của file</p>';

//Phạm vi của biến
//1 - Biễn cục bộ
$varLocal = 5;
function changeVariableLocal() {
    $varLocalFunction = 6;
    echo 'Biến $varLocalFunction 
bên trong hàm đang có giá trị = ' . $varLocalFunction;
    echo '<br />';
}
changeVariableLocal();
//dòng dưới sẽ báo lỗi vì không thể truy cập biến cục bộ bên trong hàm
//cho dù bạn đã gọi hàm
echo 'Biến $varLocalFunction 
bên ngoài hàm đang có giá trị = ' . $varLocalFunction;

//2 - Biến toàn cục
//bài toán đặt ra: sử dụng hàm thay đổi giá trị của biến $varGlobal
//mà ko sử dụng tham chiếu
$varGlobal = 3;

function changeVariableGlobal() {
    GLOBAL $varGlobal;
    $varGlobal = 2;
}

echo "<p>Biến varGlobal trước khi gọi hàm đang có giá trị là : $varGlobal</p>";
changeVariableGlobal();
echo "<p>Biến varGlobal sau khi gọi hàm đang có giá trị là : $varGlobal</p>";

//3 - Biến static

function changeVariableStatic() {
    static $varStatic = 0;
    $varStatic++;
    echo 'Biến $varStatic sau mỗi lần gọi hàm đang có giá trị là: ' . $varStatic;
    echo '<br />';
}
changeVariableStatic();
changeVariableStatic();
changeVariableStatic();
changeVariableStatic();
changeVariableStatic();