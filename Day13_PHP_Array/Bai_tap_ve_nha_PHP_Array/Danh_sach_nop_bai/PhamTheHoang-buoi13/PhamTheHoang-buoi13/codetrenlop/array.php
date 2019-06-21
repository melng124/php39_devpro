<?php
$arr=[12,50,60,90,12,25,60];
$sum=0;
$tic=1;
foreach($arr as $key => $value){
    $sum+=$value;
    $tic*=$value;
}
echo"Tổng = $sum <br/>";
echo"Tích = $tic";
?>