<!--1.	Tính tổng – tích – hiệu - thương của các phần tử trong mảng số nguyên sau, sử dụng hàm trong PHP:-->
<!--$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];-->
<!--•	Kết quả hiển thị có dạng như sau:-->
<!--Tổng các phần tử  = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = <giá-trị>-->
<!--    Tích các phần tử  = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = <giá-trị>-->
<!--        Hiệu các phần tử  = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = <giá-trị>-->
<!--            Thương các phần tử  = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = <giá-trị>-->
<!--                •	Áp dụng với 1 số mảng khác sau:-->
<!--                $arrs = [2, 5, 0];-->
<!--                $arrs = [22, 5, -1];-->
<!--                $arrs = [0, 5, -1];-->
<?php
//function tinhTong($arr){
////    $arr1 = array();
////    if (!is_array($arr)){
////        return $arr1;
////    }
//    $sum = 0;
//    $text = "Tổng các phần tử = ";
//    foreach ( $arr as $value) {
//    $text .= "$value";
//    $sum += $value;
//    if ($arr == $value) {
//        $text .= "=" .$sum;
//        continue;
//            }
//            $text .= "+";
//        }
//        return $text;
//
//}
//$tong = tinhTong(2, 5, 6, 9, 2, 5, 12, 5);
//echo $tong;
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
echo "<pre>";
var_dump($arrs);
print_r($arrs);
$sum = 0;//cộng
$Subtraction = $arrs[0];//trừ
$Multiplication =1;//nhân
$Division = 2;//chia
foreach ($arrs as $key => $value){
    $sum += $value;
    $Subtraction -= $value;
    $Multiplication *= $value;
    $Division /= $value;
}
echo "Tổng cấc phần tử = $sum <br> Trừ của các phần tử = $Subtraction <br> Tích của các phần tử = $Multiplication <br> Thương của các phần tử = $Division";
$arrs = [2, 5, 0];
echo "<pre>";
var_dump($arrs);
print_r($arrs);
$sum = 0;//cộng
$Subtraction = 2;//trừ
$Multiplication =1;//nhân
$Division = 1;//chia
foreach ($arrs as $key => $value){
    if ($value[2] == 0) {
       return false;
    }
    else{
        $sum += $value;
        $Subtraction -= $value;
        $Multiplication *= $value;
        $Division /= $value;
    }

}
echo "Tổng cấc phần tử = $sum <br> Trừ của các phần tử = $Subtraction <br> Tích của các phần tử = $Multiplication <br> Thương của các phần tử = $Division";

$arrs = [0, 5, -1];
echo "<pre>";
var_dump($arrs);
print_r($arrs);
$sum = 0;//cộng
$Subtraction = 2;//trừ
$Multiplication =1;//nhân
$Division = 0;//chia
foreach ($arrs as $key => $value){
        $sum += $value;
        $Subtraction -= $value;
        $Multiplication *= $value;
        $Division /= $value;
}
echo "Tổng cấc phần tử = $sum <br> Trừ của các phần tử = $Subtraction <br> Tích của các phần tử = $Multiplication <br> Thương của các phần tử = $Division";

?>