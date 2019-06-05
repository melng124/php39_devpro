<?php
/**
 * Created by PhpStorm.
 * User: nvmanh
 * Date: 6/5/2019
 * Time: 5:44 PM
 */
//function declare

/**
 * Display message
 * @param $message string message
 *
 * @return mixed
 */
echo display("abc");
function display($message) {
  return $message;
}

//call error
//myFunction();
include_once 'include_func.php';
//call ok
myFunction();
$a = 5;
echo "a = $a";

function addNumber($number1, $number2) {
  return $number1 + $number2;

  //mac dinh neu khong khai bao return, thi ham dang tra ve null
}


echo '<br />';
//var_dump(addNumber(1.2, 2.2));

//cơ chế tham chiếu
function changeNumber(&$number1) {
  return $number1++;

  //mac dinh neu khong khai bao return, thi ham dang tra ve null
}
$number = 5;
echo '<br />';
echo "number trươc khi goi ham = $number";
$sum = changeNumber($number);
echo '<br />';
echo "number sau khi goi ham = $number";

//ham có tham số với giá trị khởi tạo
function sub($number1 = 1, $number2 = 3) {
  return $number1 - $number2;
}

echo '<br />';
echo "Phép trừ = " . sub();


/*
 * Sử dụng hàm viết chương trình tính chu vi, diện tích của hình chữ nhật có chiều rộng = 5cm, chiều dài 10cm
 */
$width = 10;
$height = 5;
/**
 * @param $width int width rectangle
 * @param $height int height rectangle
 * @return float|int circum rectangle
 */
function circumRectangle($width, $height) {
  return ($width + $height) * 2;
}

echo '<br />';
echo 'CV = ' . circumRectangle($width, $height);

/**
 * @param $width int width rectangle
 * @param $height int height rectangle
 * @return float|int area rectangle
 */
function areaRectangle($width, $height) {
  return $width * $height;
}

echo '<br />';
echo 'DT = ' . areaRectangle($width, $height);