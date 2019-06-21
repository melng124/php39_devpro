<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 10/6/2019
 * Time: 8:18 AM
 */
function displayStar($n)
{
    if ($n < 0) {
        echo "Không hiển thị các kí tự với số âm ";
    } else {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
                if ($j < $i) {
                    echo "";
                }

            }
            echo "<br>";
        }
    }
}
displayStar(10);
//displayStar(5);

?>