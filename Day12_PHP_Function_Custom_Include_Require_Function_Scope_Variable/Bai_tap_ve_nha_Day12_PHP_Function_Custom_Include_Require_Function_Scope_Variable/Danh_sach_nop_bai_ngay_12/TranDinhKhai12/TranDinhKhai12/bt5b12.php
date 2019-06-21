<?php
require_once "phuongtrinhbac1.php";
function giaiptb2($a,$b,$c){
    
    if($a==0)giaiptb1($b,$c);
    else{
        echo 'Giải phương trình : '.$a.'x^2'.' + '.$b.'x + '.$c.' = 0 <br/>';
        $denta=$b * $b - 4 * $a *$c;
        if($denta<0)echo 'Phương trình vô nghiệm';
        if($denta==0)echo'Phương trình có nghiệm kép x = '.((-$b)/(2*$a));
        if($denta>0) echo 'Phương trình có 2 nghiệm phân biệt x1= '.((-$b+sqrt($denta))/(2*$a)).'và  x2= '.((-$b-sqrt($denta))/(2*$a));
        echo"<hr>";
    }   
}

giaiptb2(0,0,2);
giaiptb2(2,4,-6);
giaiptb2(0,5,5);
giaiptb2(5,0,5);
?>