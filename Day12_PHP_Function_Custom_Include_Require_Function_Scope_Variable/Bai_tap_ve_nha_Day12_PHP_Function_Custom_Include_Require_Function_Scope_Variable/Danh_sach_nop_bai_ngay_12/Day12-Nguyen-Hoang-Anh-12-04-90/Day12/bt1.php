<?php
function factorial($number)
{
    if ($number < 0) {
        echo 'Không cho phép tính giai thừa trên số âm';
        echo '<br>';
    }
    elseif ($number == 0) {
        echo '0! = 1';
        echo '<br>';
    }
    else {
        $factorial = 1;
        echo "$number! = ";
        for($i=1; $i <= $number-1; $i++) {
            $factorial*=($i+1);
            echo "$i x ";
        }
        echo " $number = $factorial";
        echo '<br>';
    }
}

factorial(-5);
factorial(0);
factorial(5);
factorial(8);