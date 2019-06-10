<?php
$n=5;
echo'Tam giác cân * có '.$n.' dòng';
echo"<br/>";
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo'*';
    }
    echo"<br/>";
}
for($i=$n;$i>0;$i--){
    for($j=$i;$j>0;$j--){
        echo'*';
    }
    echo"<br/>";
}

?>