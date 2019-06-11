<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/06/2019
 * Time: 0:39 AM
 */
function equation($numA,$numB){
    echo "Phương Trình Có Dạng ".$numA."x + ".$numB." =0<br/>";
    if ($numA == 0) {
        if ($numB == 0) {
            echo "Phương Trình Có Vô Số Nghiệm";
        } else {
            echo "Phương Trình Vô Nghiệm";
        }
    } else {
        echo "Phương Trình Có 1 Nghiệm Là x =" . (-$numB / $numA);
    }
}
equation(0,5);
echo "<p></p>";
equation(2,-2);
echo "<p></p>";
equation(0,0);