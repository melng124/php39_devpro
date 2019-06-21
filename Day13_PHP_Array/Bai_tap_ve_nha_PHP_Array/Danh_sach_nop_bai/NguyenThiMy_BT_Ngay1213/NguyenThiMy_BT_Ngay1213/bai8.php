<!--S(n) = 1 + 1/2 + 1/3 + 1/4 +… 1/n-->
<!--Yêu cầu:-->
<!--•	Chỉ cho phép tính toán khi n là số dương, nếu n là số âm, hiển thị thông báo “Không cho phép tính toán với số âm”, và không thực hiện xử lý-->
<!--•	Ví dụ khi số n = 10 thì kết quả hiển thị sẽ có dạng như sau:-->
<!--S(10) = 1/1 + 1/2 + 1/3 + 1/4 + 1/5 + 1/6 + 1/7 + 1/8 + 1/9 + 1/10 = 2.9289682539683-->
<!--•	Áp dụng hàm vừa xây dựng để hiển thị với một số trường hợp sau:-->
<!---	n = -3-->
<!---	n = 0-->
<!---	n = 4-->
<!---	n = 10-->
<!---	n = 120-->
<!---	…-->
<?php
function toTal($n)
{
    $tong = 0;
    $resultText = "S($n) = ";
    if ($n < 0) {
        return 'Không cho phép tính toán với số âm';
    }
    else{
        for ($i = 1; $i <= $n; $i++) {
            $resultText .= " 1/$i ";
            $tong += 1/$i;
            if ($i == $n) {
                $resultText .= "=" .$tong;
                continue;
            }
            $resultText .= "+";
        }
        return $resultText;
    }
}
$tinh = toTal(-3);
echo $tinh;
echo "<br>";
$tinh = toTal(0);
echo $tinh;
echo "<br>";
$tinh = toTal(4);
echo $tinh;
echo "<br>";
$tinh = toTal(10);
echo $tinh;
echo "<br>";
$tinh = toTal(120);
echo $tinh;
echo "<br>";
?>