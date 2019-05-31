<?php
/**
 * Created by PhpStorm.
 * User: StM7
 * Date: 5/31/2019
 * Time: 8:15 PM
 */

//ep kieu trong php
//$floatVariable = (float)1.2;
//echo gettype($floatVariable);
//echo $floatVariable;
$variable = 56;
var_dump($variable); //integer
var_dump((string)$variable); //string
var_dump((float)$variable); //float
var_dump((double)$variable); //float
var_dump((object)$variable); //object
var_dump((array)$variable); //array
var_dump((boolean)$variable); //boolean

//sự khác nhau echo khi sử dụng nháy đơn và nháy kép
$floatVariable = 3.2;
echo "Biến floatVariable = $floatVariable";
//Biến floatVariable = 3.2
echo "<br />";
echo 'Biến floatVariable = ' . $floatVariable;
echo 'String thông thường';
//Biến floatVariable = $floatVariable