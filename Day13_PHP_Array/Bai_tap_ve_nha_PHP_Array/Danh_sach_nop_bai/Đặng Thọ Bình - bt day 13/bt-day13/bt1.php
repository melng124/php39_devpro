<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
$tong= 0;
$hieu = 4;
$tich = 1;
$thuong = 4;
foreach ($arrs as $key1234 => $value){
    $tong += $value;
    $tich *= $value;
    $hieu -= $value;
    $thuong /= $value;
}

echo "tong = ".$tong;
echo "<br/>";
echo "tich = ".$tich;
echo "<br/>";
echo "hieu = ".$hieu;
echo "<br/>";
echo "thuong = ".$thuong;

?>
