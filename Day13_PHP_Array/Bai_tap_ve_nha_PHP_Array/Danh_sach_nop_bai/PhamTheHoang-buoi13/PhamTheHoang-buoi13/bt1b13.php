<?php
$arr1=[2,5,6,9,2,5,6,12,5];
$arr2=[22,5,-1];
$arr3=[0,5,-1];
$arr4=[2,5,0];
function tinh($arr){
$sum=$arr[0];
$sum1="Tổng các phần tử = ".$arr[0];
$sub=$arr[0];
$sub1="Hiệu các phần tử = ".$arr[0];
$tich=$arr[0];
$tich1='Tích các phần tử = '.$arr[0];
$thuong=$arr[0];
$thuong1='Thương các phần tử = '.$arr[0];
foreach($arr as $key=>$value){    
    if($key!=0){
        $sum+=$value;
        $sum1.=" + $value ";
        $sub-=$value;
        $sub1.=" - $value ";
        $tich*=$value;
        $tich1.=" * $value ";
        if($value==0) continue;
        else{
        $thuong/=$value;
        $thuong1.=" / $value ";
    }
}
}
echo "<pre>";
return var_dump($arr)."<br/>".  $sum1.' = ' .$sum."<br/>". $sub1.' = '.$sub."<br/>".$tich1.' = '.$tich."<br/>".$thuong1.' = '.$thuong."<br/> <hr>";
}
echo tinh($arr1);
echo tinh($arr2);
echo tinh($arr3);
echo tinh($arr4);
 


?>