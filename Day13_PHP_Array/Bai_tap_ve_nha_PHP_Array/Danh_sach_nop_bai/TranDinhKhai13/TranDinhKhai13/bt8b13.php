<?php
$arrs = ['1','a','b','b'];
$arrs1 = ['a', 0, null, false];
function chuyen($a){
    for($i=0;$i<count($a);$i++){
        $a[$i]=strtoupper((string)$a[$i]);
    }
    echo"<pre>";
   return $a;
}
var_dump(chuyen($arrs));
var_dump(chuyen($arrs1));
?>