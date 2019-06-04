<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<?php
$variable1=1.23;
$variable1=(string)$variable1;
var_dump($variable1);
echo ('<br>');
$variable2=28;
var_dump($variable2);
echo ('<br>');
$variable3='null';
var_dump($variable3);
echo ('<br>');
$variable4=array(123, false, null, 1.23, FALSE, [], TRUE);
var_dump($variable4);
echo ('<br>');
$variable5=-123;
$variable5=(float)$variable5;
var_dump($variable5);
echo ('<br>');
$variable6='false';
var_dump($variable6);
echo ('<br>');
$variable7='php39';
var_dump($variable7);
?>
</body>

</html>
