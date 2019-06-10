<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 9</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/6/2019
 * Time: 1:02 PM
 */
$n=5;
for($i=1; $i <= $n; $i++)
{
    for($j=1; $j <= $i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}
for($i=$n; $i >= 1; $i--)
{
    for($j=1; $j <= $i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}
?>
</body>
</html>
