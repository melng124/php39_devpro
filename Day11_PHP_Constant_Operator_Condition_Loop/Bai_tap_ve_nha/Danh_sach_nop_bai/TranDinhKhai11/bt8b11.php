<?php
$n=5;
echo'Tam giác * có '.$n.' dòng';
echo"<br/>";
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo'*';
    }
    echo"<br/>";
}

?>