<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/06/2019
 * Time: 1:34 AM
 */
function In($num){
    if($num<=0){
        echo "Không Thực Hiện Với Số Âm";
    }
    else{
        echo "Số Hàng Vừa Nhập Là :$num";
        for ($i=0;$i<=$num;$i++){
            for ($j=0;$j<$i;$j++){
                echo "*";
            }
            echo "<br/>";
        }
    }
}
In(-3);
echo "<br/>";
In(0);
echo "<br/>";
In(2);
echo "<br/>";
In(5);
echo "<br/>";
In(10);