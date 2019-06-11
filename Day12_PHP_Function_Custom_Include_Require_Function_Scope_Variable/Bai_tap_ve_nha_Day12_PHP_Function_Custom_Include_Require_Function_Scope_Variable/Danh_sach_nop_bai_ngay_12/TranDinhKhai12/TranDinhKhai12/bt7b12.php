<?php
function tamgiac($n){
    if($n<0)echo'Với n = '.$n.'  Không thể hiển thị các kí tự * với số âm';
    else{
        echo'Tam giác * có '.$n.' dòng';
        echo"<br/>";
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$i;$j++){
                echo'*';
            }
        echo"<br/>";
        }
    }
    echo"<hr>";
    
}
tamgiac(-3);
tamgiac(0);
tamgiac(2);
tamgiac(5);
tamgiac(10);

?>