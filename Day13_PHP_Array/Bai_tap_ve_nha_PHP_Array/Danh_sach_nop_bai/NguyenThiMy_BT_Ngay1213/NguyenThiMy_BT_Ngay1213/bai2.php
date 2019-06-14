<!--2.	Viết các hàm tính chu vi và diện tích hình tròn với đường kính cho trước, mô tả như sau:-->
<!--•	Chỉ cho phép tính toán khi đường kính là số dương, nếu đường knhs là số âm, hiển thị thông báo “Không cho phép tính toán với số âm”, và không thực hiện xử lý-->
<!--•	Ví dụ kết quả hiển thị sẽ có dạng như sau:-->
<!--Chu vi hình tròn = <giá-trị>-->
<!--    Diện tích hình tròn = <giá-trị>-->
<!--        •	Áp dụng hàm vừa xây dựng để tính chu vi và diện tích với một số trường hợp sau:-->
<!--        -	d = -3-->
<!--        -	d = 0-->
<!--        -	d = 5-->
<!--        -	d = 7.5-->
<!--        -	d = 100-->
<?php
function chuVi($d)
{
    if ($d < 0) {
        return 'không cho phép tính toán với số âm';
    } elseif ($d == 0) {
        return 'Không cho phép tính toán với số 0';
    }
    else{
        $chuVi = $d * 3.14;
        return $chuVi;
    }
}

//$tinhCV = chuVi(-3);
//$tinhCV = chuVi(0);
$tinhCV = chuVi(5);
//$tinhCV = chuVi(7.5);
//$tinhCV = chuVi(100);
echo "Chu vi hình tròn = $tinhCV";
echo "<br>";
function dienTich($d)
{
    if ($d < 0) {
        return 'không cho phép tính toán với số âm';
    } elseif ($d == 0) {
        return 'Không cho phép tính toán với số 0';
    }
    else{
        $dienTich = (($d*$d)/4) * 3.14;
        return $dienTich;
    }
}

//$tinhCV = chuVi(-3);
//$tinhCV = chuVi(0);
$tinhDT = dienTich(5);
//$tinhCV = chuVi(7.5);
//$tinhCV = chuVi(100);
echo "Diện tích hình tròn = $tinhDT";
?>