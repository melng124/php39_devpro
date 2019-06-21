<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/06/2019
 * Time: 1:55 AM
 */
function caculator($num){
    if($num<=0){
        echo "Không Thực Hiện Với Số Âm";
    }
    else{

        $string="";
        $sum=0;
        for($i=1;$i<=$num;$i++){
            if($i==$num){
                $string=$string."$num^".(2*$i);
                $sum+=pow($num,(2*$i));
            }
            else{
                $string=$string."$num^".(2*$i)."+";
                $sum+=pow($num,(2*$i));
            }
        }
        echo "S($num)=$string=$sum ";
    }
    echo "<br/>";
}
caculator(-3);
caculator(0);
caculator(3);

caculator(4);
caculator(10);
caculator(120);