<?php
function pt($a, $b){
    if($a != 0){
        $kq = (-$b)/$a;
        if(b >= 0){
            echo "Phương trình bậc nhất : ".$a."x + $b = 0<br/> Có nghiêm x = $kq<br/>";
            echo "----------------------------------------<br/>";
        }
        else {
            echo "Phương trình bậc nhất : " . $a . "x - " .($b*(-1))." = 0<br/> Có nghiêm x = $kq<br/>";
            echo "----------------------------------------<br/>";
        }
    }
    else{
        echo "Phương trình bậc nhất : ".$a."x + $b = 0<br/>";
        echo "Phương trình vô nghiệm<br/>";
        echo "----------------------------------------<br/>";
    }
}
pt(0,5);
pt(2, -2);
pt(0, 0);
?>