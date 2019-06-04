<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3/6/2019
 * Time: 8:24 PM
 */
//Bai 1
$variable1 = "1.23";
$variable = null;
$variable = (float)$variable;
echo $variable;
$variable2 = 28;

$variable3 = "null";
$variable3 = (string)$variable3;

$variable4 = array(123, false, null, 1.23, FALSE, [], TRUE);

$variable5 = -123;
$variable5 = (float)$variable5;

$variable6 = "false";
$variable6 = (string)$variable6;

$variable7 = "php39";
?>


//bai 3
Biến $variable1 sau khi ép kiểu sang int có giá trị = 123;<br>
Biến $variable1 sau khi ép kiểu sang float có giá trị = 123;<br>
Biến $variable1 sau khi ép kiểu sang boolean có giá trị = true;<br>
Biến $variable1 sau khi ép kiểu sang string có giá trị = 123abc;<br>

Biến $variable2 sau khi ép kiểu sang int có giá trị = false; <br>
Biến $variable2 sau khi ép kiểu sang float có giá trị = false;<br>
Biến $variable2 sau khi ép kiểu sang string có giá trị = false;<br>
Biến $variable2 sau khi ép kiểu sang string có giá trị = false;<br>

