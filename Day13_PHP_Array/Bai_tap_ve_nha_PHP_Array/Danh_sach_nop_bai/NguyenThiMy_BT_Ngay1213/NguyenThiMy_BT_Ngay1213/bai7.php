<!--7.	Viết hàm hiển thị các ký tự * dựa vào số n cho trước, mô tả như sau:-->
<!--•	Nếu n là số âm, thì hiển thị thông báo “Không thể hiển thị các ký tự * với số âm” và không thực hiện hiển thị-->
<!--•	Ví dụ khi số n thỏa mãn thì kết quả hiển thị sẽ như sau:-->
<!---	Với n = 2 sẽ hiển thị như sau-->
<!--*-->
<!--* *-->
<!---	Với n = 5 sẽ hiển thị như sau-->
<!--*-->
<!--* *-->
<!--* * *-->
<!--* * * *-->
<!--* * * * *-->
<!--•	Áp dụng hàm vừa xây dựng để hiển thị với một số trường hợp sau:-->
<!---	n = -3-->
<!---	n = 0-->
<!---	n = 2-->
<!---	n = 5-->
<!---	n = 10-->
<?php
function disPlay($n)
{
    if ($n < 0) {
        return 'Không hiển thị * với số âm';
    }
    else{
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
               echo " * ";
                if ($j < $i) {
                    echo " ";
                }
            }
            echo "<br>";
        }
    }
}
$hienThi = disPlay(-3);
echo $hienThi;
echo "<br>";
$hienThi = disPlay(0);
echo $hienThi;
echo "<br>";
$hienThi = disPlay(2);
echo $hienThi;
echo "<br>";
$hienThi = disPlay(5);
echo $hienThi;
echo "<br>";
$hienThi = disPlay(10);
echo $hienThi;
echo "<br>";

?>