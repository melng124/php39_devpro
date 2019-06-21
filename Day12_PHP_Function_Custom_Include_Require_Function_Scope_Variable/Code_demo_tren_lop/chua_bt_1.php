<?php
/*
 * 1.	Viết hàm tính giai thừa của 1 số, yêu cầu:
•	Chỉ cho phép tính giai thừa với các số dương,
nếu là số âm thì hiển thị ra thông báo lỗi “Không cho phép tính giai thừa
trên số âm ”
•	Kết quả hiển thị ra màn hình có dạng sau: “5! = 1 x 2 x 3 x 4 x 5 = 120”
•	Áp dụng hàm vừa xây dựng để tính giai thừa với các giá trị sau: -5, 0, 5, 8

 */
//Hướng đầu tiên: xử lý tất cả trong hàm, chỉ cần gọi hàm là có thể xử lý được
//toàn bộ bài toán
function factorial($n)
{
    if ($n < 0) {
        return 'Không cho phép tính giai thừa
với số âm';
    }
    $multiple = 1;
    $resultText = "$n! = ";
    for ($i = 1; $i <= $n; $i++) {
        $resultText .= "$i";
        $multiple *= $i;
        if ($i == $n) {
            $resultText .= " = " . $multiple;
            continue;
        }
        $resultText .= " * ";
    }
    return $resultText;
}

$multiple = factorial(5);
$multiple = factorial(15);
//$multiple đang có giá trị kiểu: 5! = 1 x 2 x 3 x 4 x 5 = 120
echo $multiple;
//Hướng thứ 2: xử lý validate riêng (tách thành 2 phần),
// sau đó gọi hàm

function factorialNotValidate($n)
{
    $multiple = 1;
    for ($i = 1; $i <= $n; $i++) {
        $multiple *= $i;
    }
    return $multiple;
}

$n = -1;
if ($n < 0) {
    echo '<p style="color:red">Không cho phép tính giai thừa
với số âm</p>';
} else {
    echo '<br />';
    $a = factorialNotValidate(5);
    echo $a;
}

?>
<style type="text/css">
    td {
        width: 50px;
        height: 50px;
    }
</style>
<table>
    <tr>
        <?php if ($n % 2 == 0): ?>
            <td style="background: red;"></td>
        <?php else: ?>
            <td style="background: blue"></td>
        <?php endif; ?>
    </tr>
</table>
<?php
$n = 6;
?>
<table>
    <tr>
        <?php for ($i = 1; $i <= $n; $i++): ?>
            <?php if ($i % 2 == 0): ?>
                <td style="background: red">ABC</td>
            <?php else: ?>
                <td style="background: blue">ABC</td>
            <?php endif; ?>
        <?php endfor; ?>
    </tr>
</table>

