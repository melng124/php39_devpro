<!--9.	Viết hàm tính biểu thức có dạng sau, với ^ là ký tự thể hiện cho số mũ-->
<!--S(n) = x^2 + x^4 + ⋯ + x^2n-->
<!--Yêu cầu:-->
<!--•	Chỉ cho phép tính toán khi n là số dương, nếu n là số âm, hiển thị thông báo “Không cho phép tính toán với số âm”, và không thực hiện xử lý-->
<!--•	Ví dụ khi số n = 3 thì kết quả hiển thị sẽ có dạng như sau:-->
<!--S(3) = 3*2 + 3*4 + 3*6 = 819-->
<!--•	Áp dụng hàm vừa xây dựng để hiển thị với một số trường hợp sau:-->
<!---	n = -3-->
<!---	n = 0-->
<!---	n = 4-->
<!---	n = 10-->
<!---	n = 120-->
<!---	…-->
<?php
function tinhTong($n)
{
    $tong = 0;
    $x = 2;
    $text = "S($n) = ";
    if ($n < 0) {
        return 'Không cho phép tính toán với số âm';
    }
    for ($i = 1; $i <= $n; $i++) {
        $text .= "2*$i";
        $tong += 2*$x*$i;
        if ($i == $n) {
            $text .= "=" .$tong;
            continue;
        }
        $text .= "+";
    }
    return $text;
}

$tinh = tinhTong(-3);
echo $tinh;
echo "<br>";
$tinh = tinhTong(0);
echo $tinh;
echo "<br>";
$tinh = tinhTong(3);
echo $tinh;
echo "<br>";
$tinh = tinhTong(4);
echo $tinh;
echo "<br>";
$tinh = tinhTong(10);
echo $tinh;
echo "<br>";
$tinh = tinhTong(120);
echo $tinh;
echo "<br>";

?>