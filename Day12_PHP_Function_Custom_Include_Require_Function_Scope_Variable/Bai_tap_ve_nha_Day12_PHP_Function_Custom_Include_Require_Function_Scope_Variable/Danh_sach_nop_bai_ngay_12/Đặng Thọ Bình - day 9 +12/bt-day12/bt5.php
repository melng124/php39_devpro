<?php
$mang1 = array(0,0,2,6);
$mang2 = array(2,4,-6,10);
$mang3 = array(0,5,5,2);
$mang4= array(5,0,5,4);
$gia_tri_lon_nhat = max(max($mang1),max($mang2),max($mang3),max($mang4));
$gia_tri_nho_nhat = min(min($mang1),min($mang2),min($mang3),min($mang4));
echo "Giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>";
echo "Giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>";
?>
