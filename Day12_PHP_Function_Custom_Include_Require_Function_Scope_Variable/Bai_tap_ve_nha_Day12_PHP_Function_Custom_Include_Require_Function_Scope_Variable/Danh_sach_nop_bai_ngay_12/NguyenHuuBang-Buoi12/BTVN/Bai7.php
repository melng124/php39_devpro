<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 9:47 AM
 */
function triangle($n)
{
    if ($n < 0) {
        echo "Không thể hiển thị các kí tự * với số âm";
    } else {
        for ($x = 1; $x <= $n; $x++) {
            for ($y = 1; $y <= $x; $y++) {
                echo "*";

            }
            echo "<br>";
        }
    }
}

triangle(-3);
echo "<br/>";
triangle(0);
echo "<br/>";
triangle(2);
echo "<br/>";
triangle(5);
echo "<br/>";
triangle(10);

