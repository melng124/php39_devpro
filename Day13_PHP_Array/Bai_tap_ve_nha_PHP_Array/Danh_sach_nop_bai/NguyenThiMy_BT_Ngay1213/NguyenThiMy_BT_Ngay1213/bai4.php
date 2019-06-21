<!--4.	Viết hàm giải phương trình bậc nhất, mô tả như sau:-->
<!--•	Phương trình bậc nhất là phương trình có dạng: ax + b = 0-->
<!--•	Áp dụng hàm vừa xây dựng để giải phương trình bậc nhất với một số trường hợp sau:-->
<!---	a = 0, b = 5-->
<!---	a = 2, b = -2-->
<!---	a = 0, b = 0-->

<?php
function giaiPTBN($a, $b)
{
    echo "phương trình có dạng : ".$a."x + ".$b. " = 0" ;
    echo "<br>";
    if ($a == 0) {
        if ($b == 0) {
            return 'phương trình vô số nghiệm';
        }
        else{
            return 'Phương trình vô nghiệm';
        }
    }
    else{
        $kq = -$b / $a;
        return $kq;
    }
}

$tinh = giaiPTBN(0, 5);
echo $tinh;
echo "<br>";
$tinh = giaiPTBN(2, -2);
echo $tinh;
echo "<br>";
$tinh = giaiPTBN(0, 0);
echo $tinh;
?>