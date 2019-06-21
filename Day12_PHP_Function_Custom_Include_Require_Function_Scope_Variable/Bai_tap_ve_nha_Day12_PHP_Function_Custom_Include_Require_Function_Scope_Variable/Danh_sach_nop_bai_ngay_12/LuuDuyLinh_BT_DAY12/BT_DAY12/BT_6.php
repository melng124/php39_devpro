<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/06/2019
 * Time: 1:08 AM
 */
function GTLN($numA,$numB,$numC,$numD){
    echo "Chuỗi Vừa Nhập Là :$numA $numB $numC $numD <br/>";
    $max=$numA;
    $numA>$numB?$max=$numA : $max=$numB;
    $max>$numC?$max=$max : $max=$numC;
    $max>$numD?$max=$max : $max=$numD;
    return $max;
}
function GTNN($numA,$numB,$numC,$numD){
    $min=$numA;
    $numA<$numB?$min=$numA : $min=$numB;
    $min<$numC?$min=$min : $min=$numC;
    $min<$numD?$min=$min : $min=$numD;
    return $min;
}
echo"Giá Trị Lớn Nhất Là :".GTLN(0,0,2,6)."<br/>";
echo"Giá Trị Nhỏ Nhất Là :".GTNN(0,0,2,6);
echo "<br/>";echo "<br/>";
echo"Giá Trị Lớn Nhất Là :".GTLN(2,4,-6,-10)."<br/>";
echo"Giá Trị Nhỏ Nhất Là :".GTNN(2,4,-6,-10);
echo "<br/>";echo "<br/>";
echo"Giá Trị Lớn Nhất Là :".GTLN(0,5,5,2)."<br/>";
echo"Giá Trị Nhỏ Nhất Là :".GTNN(0,5,5,2);
echo "<br/>";echo "<br/>";
echo"Giá Trị Lớn Nhất Là :".GTLN(5,0,5,4)."<br/>";
echo"Giá Trị Nhỏ Nhất Là :".GTNN(5,0,5,4);

