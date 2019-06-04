<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai1</title>
</head>
<body>
<?php
$variable1 = '123abc';
var_dump((int)$variable1);
var_dump((float)$variable1);
var_dump((string)$variable1);
var_dump((boolean)$variable1);
echo ('<br>');
$variable2 = null;
var_dump((int)$variable2);
var_dump((float)$variable2);
var_dump((string)$variable2);
var_dump((boolean)$variable2);
echo ('<br>');
$variable3 ='';
var_dump((int)$variable3);
var_dump((float)$variable3);
var_dump((string)$variable3);
var_dump((boolean)$variable3);
echo ('<br>');
$variable4 = 'abc123';
var_dump((int)$variable4);
var_dump((float)$variable4);
var_dump((string)$variable4);
var_dump((boolean)$variable4);
echo ('<br>');
$variable5 = 'null';
var_dump((int)$variable5);
var_dump((float)$variable5);
var_dump((string)$variable5);
var_dump((boolean)$variable5);
?>
</body>
</html>