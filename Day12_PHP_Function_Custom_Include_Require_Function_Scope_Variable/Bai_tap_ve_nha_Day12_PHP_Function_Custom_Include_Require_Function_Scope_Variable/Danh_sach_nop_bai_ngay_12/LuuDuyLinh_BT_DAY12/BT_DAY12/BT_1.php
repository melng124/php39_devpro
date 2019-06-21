<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 08/06/2019
 * Time: 23:58 PM
 */
/**
 * @param $integer
 */
function factorial($integer){
    $string='';
    $result=1;
    if($integer<0){
        echo 'Không cho tính giai thừa trên số âm';
    }
    elseif ($integer==0){
        echo '0!=1';
    }
    else{
        for($i=1;$i<=$integer;$i++){
            if($i==$integer){
                $string=$string." $i";
                $result*=$i;
                break;
            }
            $string=$string." $i x";
            $result*=$i;
        }
        echo "$integer ! = $string =$result";
    }
}
factorial(-5);
echo "<p></p>";
factorial(0);
echo "<p></p>";
factorial(5);
echo "<p></p>";
factorial(8);