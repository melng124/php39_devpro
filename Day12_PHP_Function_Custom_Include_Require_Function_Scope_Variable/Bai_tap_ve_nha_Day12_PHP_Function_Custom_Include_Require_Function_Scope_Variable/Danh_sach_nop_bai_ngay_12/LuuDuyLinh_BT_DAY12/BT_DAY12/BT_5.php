<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/06/2019
 * Time: 0:48 AM
 */
function equation($numA,$numB,$numC){
    echo "Phương Trình Nhập Vào Có Dạng ".$numA."x<sup>2</sup> +".$numB."x+".$numC."=0<br/>";
    if($numA==0){
        if($numB==0){
            if($numC==0){
                echo "Phương Trình Có Vô Số Nghiệm";
            }
            else{
                echo "Phương Trình Vô Nghiệm";
            }
        }
        else{
            echo "Phương Trình Có 1 Nghiệm x=".(-$numC/$numB);
        }
    }
    else{
        $delta=$numB*$numB-4*($numA*$numC);
        if($delta<0){
            echo "Phương Trình Vô Nghiệm";
        }
        elseif ($delta==0){
            echo "Phương Trình Có 2 Nghiệm Kép x<sub>1</sub>=x<sub>2</sub>=".(-$numB/(2*$numA));
        }
        else{
            echo "Phương Trình Có 2 Nghiệm Phân Biệt <br/> x<sub>1</sub> =".((-$numB+sqrt($delta))/(2*$numA))." x<sub>2</sub> =".((-$numB-sqrt($delta))/(2*$numA));
        }
    }
}
equation(0,0,2);
echo "<br/>";
equation(2,4,-6);
echo "<br/>";
equation(0,5,5);
echo "<br/>";
equation(5,0,5);

