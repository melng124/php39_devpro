<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 3:28 PM
 */
function equation($a, $b)           // Đưa vào 2 tham số a và b
{
    if ($a == 0)      //Nếu a= 0 kiểm tra giá trị của b
    {
        if ($b != 0) {  // Nếu b khác 0, suy ra phuong trình vô nghiệm
            echo "phương trình vô nghiệm";
        }
        else {          // Nếu b == 0, suy ra phương trình có vô số nghiệm
            echo "Phương trình có vô số nghiệm ";
        }
    }
    else{       //Nếu a khác 0, phương trình có nghiệm x = -b/a;
        $x = -$b /$a;
        echo"Phương trình có nghiệm x= ".$x;
    }
}
equation(0, 5);
equation(2, -2);
equation(0, 0);
?>