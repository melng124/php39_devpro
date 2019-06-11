<?php
function pt($a, $b, $c){
    if($a != 0){
        $delta = pow($b ,2) - (4*$a*$c);
        if ($b >= 0 && $c >= 0){
            echo "Phương trình bậc hai: ".$a."x<sup>2</sup> + ".$b."x + $c = 0<br/>";
        }
        else if($b <0 && $c >= 0){
            echo "Phương trình bậc hai: ".$a."x<sup>2</sup> - ".($b*(-1))."x + $c = 0<br/>";
        }
        else if($b >= 0 && $c < 0){
            echo "Phương trình bậc hai: ".$a."x<sup>2</sup> + ".$b."x - ".($c*(-1))." = 0<br/>";
        }
        else{
            echo "Phương trình bậc hai: ".$a."x<sup>2</sup> - ".($b*(-1))."x - ".($c*(-1))." = 0<br/>";
        }
        if($delta > 0){
            $x1 = (-$b + sqrt($delta))/(2*$a);
            $x2 = (-$b - sqrt($delta))/(2*$a);
            echo "Có hai nghiệm phân biệt:<br/>";
            echo "x<sub>1</sub> = $x1 &nbsp; x<sub>2</sub> = $x2<br/>";
            echo "---------------------------------------------<br/>";
        }
        else if($delta == 0){
            $x = -$b/(2*$a);
            echo "Có nghiệm kép:<br/>";
            echo "x1 = x2 = $x<br/>";
            echo "---------------------------------------------<br/>";
        }
        else{
            echo "Phương trình vô nghiệm<br/>";
            echo "---------------------------------------------<br/>";
        }
    }
    else{
        echo "Không phải phương trình bậc 2<br/>";
        echo "---------------------------------------------<br/>";
    }
}
pt(0, 0, 2);
pt(2, 4, -6);
pt(0, 5,5);
pt(5, 0,5);
pt(2, -4, 2);
pt(2, -6, -5);
?>