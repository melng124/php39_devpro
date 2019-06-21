<?php
function tinhgt ($number){
    if($number<0) {
        echo 'Không cho phép tính giai thừa trên số âm';
        }
        elseif($number==0)echo"0!=1";
    else {
        echo "$number! = ";
        $gt=1;
        for($i=1;$i<=$number;$i++){
            $gt*=$i;
            echo$i;
            if($i<$number)echo' x ';
            else echo' = ';
        }
        echo $gt;

    }  
    echo "<br/>";  
}
tinhgt(-5);
tinhgt(0);
tinhgt(5);
tinhgt(8);


?>