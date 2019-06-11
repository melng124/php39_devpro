<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/6/2019
 * Time: 11:43 AM
 */
function check($a,$b){
if ($a!=0){
    $sum=-($b/$a);
    echo "nghiệm phương trình= $sum";
}
else
    if($b==0){
        echo "phương trình vô số nghiệm";
    }else{
        echo "phương trình vô nghiệm";
    }
}
check(4,5);
echo "<br/>";
check(0,5);echo "<br/>";
check(2,-2);echo "<br/>";
check(0,0);