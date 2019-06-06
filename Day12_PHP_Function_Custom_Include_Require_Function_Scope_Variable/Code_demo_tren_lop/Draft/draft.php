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

//include. require
echo '<br />';

include 'import.php';
include 'import.php';

require 'import.php';
//require 'import1.php';
require_once 'import.php';

echo '<p style=color:red>Đoạn code chạy sau cùng</p>';


//scope variable
//local variable
$localVariable = 6;

function changeVariable() {
    //thực hiện gán lại giá trị biến
    $localVariable = 0; //là biến cục bộ
//    echo 'Biên $localVariable bên trong hàm đang có giá trị = ' . $localVariable;
}
echo '<br />';
echo 'Biên $localVariable trước khi gọi hàm đang có giá trị = ' . $localVariable;
//gọi hàm
changeVariable();
echo '<br />';
echo 'Biên $localVariable sau khi gọi hàm đang có giá trị = ' . $localVariable;
//theo lý thuyết suy nghĩ của các bạn mới thì 2 biến trùng tên sẽ là 1 biến duy nhât
//nên nghĩ rằng sau khi đi qua hàm thì giá trị biến đó đã bị thay đổi, tức là sẽ có giá trị mới = 0

//global variable
$globalVariable = 6;
function changeVariableGlobal() {
    //sử dụng từ khóa global
    global $globalVariable;
    //thực hiện gán lại giá trị biến
    $globalVariable = 9;
}
echo '<br />';
echo 'Biên $globalVariable trước khi gọi hàm đang có giá trị = ' . $globalVariable;
//gọi hàm
changeVariableGlobal();
echo '<br />';
echo 'Biên $globalVariable sau khi gọi hàm đang có giá trị = ' . $globalVariable;


//static variable
function changeVariableStatic() {
    static $staticVariable = 0;
    $staticVariable++;
    echo '<br />';
    echo 'Biến $staticVariable sau mỗi lần gọi hàm đang có giá trị = ' . $staticVariable;
}

//gọi hàm
changeVariableStatic();
changeVariableStatic();
changeVariableStatic();
?>
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" value="txtAnh" name="txtAnh" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
    echo "<pre><br />";
    print_r($_POST);
    echo "</pre>";
    die;
}

?>