<?php
function findMaxMin($a,$b,$c,$d){
    echo"Tìm Max, Min trong 4 số $a , $b , $c , $d <br/>";
    $max=$a;
    $min=$a;
    if($b>$max) $max=$b; 
    if($c>$max) $max=$c; 
    if($d>$max) $max=$d;
    if($b<$min) $min=$b;  
    if($c<$min) $min=$c;
    if($d<$min) $min=$d;
    echo 'Max = '.$max.'<br/>';
    echo 'Min= '.$min;
    echo"<hr>";
}
findMaxMin(0,0,2,6);
findMaxMin(2,4,-6,-10);
findMaxMin(0,5,5,2);
findMaxMin(5,0,5,4);

?>