<!--5.	Viết hàm giải phương trình bậc hai, mô tả như sau:-->
<!--•	Phương trình bậc hai là phương trình có dạng: ax2 + bx + c = 0-->
<!--•	Áp dụng hàm vừa xây dựng để giải phương trình bậc hai với một số trường hợp sau:-->
<!---	a = 0, b = 0, c = 2-->
<!---	a = 2, b = 4, c = -6-->
<!---	a = 0, b = 5, c = 5-->
<!---	a = 5, b = 0, c = 5-->
<?php
function giaiPTBH($a, $b, $c)
{
    echo "Phương trình có dạng : " . $a . "<span>x<sup>2</sup></span> + " . $b . " x + " . $c . " = 0";
    echo "<br>";
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return 'Phương trình vô số nghiệm';
            } else {
                return 'Phương trình vô nghiệm';
            }
        } else {
            $kq = -$c / $b;
            return $kq;
        }
    }
    if ($a != 0) {
        $denta = $b * $b - 4 * $a * $c;
        if ($denta == 0) {
            $kq = -$b / 2 * $a;
            return 'Phương trình có một nghiệm kép x = ' . $kq;
        } else if ($denta < 0) {
            return 'Phương trình vô nghiệm';
        } else {
            $x1 = (-$b -sqrt($denta)) / (2 * $a);
            $x2 = (-$b +sqrt($denta)) / (2 * $a);
            return 'Phương trình có hai nghiệm phân biệt x1 = ' . $x1 . " và x2 = " . $x2;
        }
    }
}

$tinh = giaiPTBH(0, 0, 2);
echo $tinh;
echo "<br>";
$tinh = giaiPTBH(2, 4, -6);
echo $tinh;
echo "<br>";
$tinh = giaiPTBH(0, 5, 5);
echo $tinh;
echo "<br>";
$tinh = giaiPTBH(5, 0, 5);
echo $tinh;
echo "<br>";

?>

