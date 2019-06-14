<!--6.	Viết hàm tìm max – min của 4 giá trị cho trước là a – b – c - d, với mô tả như sau-->
<!--•	Kết quả hiển thị ra màn hình có dạng sau: “Max = <giá-trị>, Min = <giá-trị>”-->
<!--        •	Áp dụng hàm vừa xây dựng để tìm max-min với một số trường hợp sau:-->
<!--        -	a = 0, b = 0, c = 2, d = 6-->
<!--        -	a = 2, b = 4, c = -6, d = -10-->
<!--        -	a = 0, b = 5, c = 5, d  = 2-->
<!--        -	a = 5, b = 0, c = 5, d = 4-->
<!--        -	…-->
<?php
function timMax($a, $b, $c, $d)
{
    $max = $a;
    if ($max < $b) {
        $max = $b;
    }
    if ($max < $c) {
        $max = $c;
    }
    if ($max < $d) {
        $max = $d;
    }
    return $max;
}
function timMin($a, $b, $c, $d)
{
    $min = $a;
    if ($min > $b) {
        $min = $b;
    }
    if ($min > $c) {
        $min = $c;
    }
    if ($min > $d) {
        $min = $d;
    }
    return $min;
}
$kiemTraMax = timMax(0, 0, 2, 6);
$kiemTraMin= timMin(0, 0, 2, 6);
echo "Max = $kiemTraMax , Min = $kiemTraMin";
echo "<br>";
$kiemTraMax = timMax(2, 4, -6, -10);
$kiemTraMin = timMin(2, 4, -6, -10);
echo "Max = $kiemTraMax , Min = $kiemTraMin";
echo "<br>";
$kiemTraMax = timMax(0, 5, 5, 2);
$kiemTraMin = timMin(0, 5, 5, 2);
echo "Max = $kiemTraMax , Min = $kiemTraMin";
echo "<br>";
$kiemTraMax = timMax(5, 0, 5, 4);
$kiemTraMin = timMin(5, 0, 5, 4);
echo "Max = $kiemTraMax , Min = $kiemTraMin";
echo "<br>";
?>