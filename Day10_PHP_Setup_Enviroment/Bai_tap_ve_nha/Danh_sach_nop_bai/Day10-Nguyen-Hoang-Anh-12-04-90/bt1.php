<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/1/2019
 * Time: 11:16 PM
 */
$variable1 = "1.23";
echo gettype($variable1);
echo "<br>";

$variable2 = 28;
echo gettype($variable2);
echo "<br>";

$variable3 = "null";
echo gettype($variable3);
echo "<br>";

$variable4 = array(123, false, null, 1.23, FALSE, [], TRUE);
echo gettype($variable4);
echo gettype($variable4[0]);
echo gettype($variable4[1]);
echo gettype($variable4[2]);
echo gettype($variable4[3]);
echo gettype($variable4[4]);
echo gettype($variable4[5]);
echo gettype($variable4[6]);
echo "<br>";

$variable5 = (float)-123;
echo gettype($variable5);
echo "<br>";

$variable6 = "false";
echo gettype($variable6);
echo "<br>";

$variable7 = "php39";
echo gettype($variable6);
echo "<br>";