<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 8 - 9</title>
</head>
<body>
<p>Bai 8</p>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/6/2019
 * Time: 12:52 PM
 */
for ($x = 1; $x <= 5; $x++) {
    for ($y = 1; $y <= $x; $y++){
        echo "*";
        if ($y < $x){
            echo "";
        }
    }
    echo "<br>";
}
?>
</body>
</html>
