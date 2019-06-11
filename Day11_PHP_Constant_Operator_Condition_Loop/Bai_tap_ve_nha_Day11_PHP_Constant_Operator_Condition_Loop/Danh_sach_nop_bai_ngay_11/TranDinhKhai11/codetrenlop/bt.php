<?php
for($i=0;$i<=100;$i+=2){
    echo $i;
    echo"<br/>";
}
$b="Lap trinh web";
for($j=0;$j<strlen($b);$j++){
    
    $c=substr($b,$j,1);
    echo $c;
    echo "<br/>";
}
?>