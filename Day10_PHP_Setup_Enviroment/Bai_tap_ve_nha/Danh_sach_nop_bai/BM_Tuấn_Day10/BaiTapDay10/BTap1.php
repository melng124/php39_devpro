<?php
$variable1 = '1.23';
$variable2 = 28;
$variable3 = "null";
$variable4 = [123,false,null,1.23,FALSE,[],TRUE];
$variable5 = (float)-123;
$variable6 = 'false';
$variable7 = 'php39';
echo 'Kiểu dữ liệu của Varible1 là: ' .  '<span style="color: green;">'  . gettype($variable1) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible2 là: ' . '<span style="color: blue">'  . gettype($variable2) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible3 là: ' . '<span style="color: yellow">'  . gettype($variable3) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible4 là: ' . '<span style="color: red">'  . gettype($variable4) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible5 là: ' . '<span style="color: blue">'  . gettype($variable5) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible6 là: ' . '<span style="color: #ff0a9c">'  . gettype($variable6) . '</span>' . '<br />';
echo 'Kiểu dữ liệu của Varible7 là: ' . '<span style="color: darkorange">'  . gettype($variable7) . '</span>' . '<br />';