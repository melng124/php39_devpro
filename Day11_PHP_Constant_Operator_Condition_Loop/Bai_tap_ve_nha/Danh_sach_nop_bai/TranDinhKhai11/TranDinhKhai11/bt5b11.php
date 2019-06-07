<?php
$a=3;
//em thử dùng đệ quy
function sum($n){
    if($n<=1)return $n;
    else return sum($n-1)+1/$n;
}
echo' Với n = '.$a.'Thì tổng 1+1/2+2/3+...1/n = '.sum($a);
?>