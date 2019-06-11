<?php
$x1=1;
$n1=2;
//em thử dùng đệ quy
function sum($x,$n){
    if($n<=1)return $n*2;
    else return sum($x,$n-1)+$x*2*$n;
}
echo' Với n = '.$n1.'và x = '.$x1.'Thì tổng x*2+x*4+...+x*2n = '.sum($x1,$n1);
?>