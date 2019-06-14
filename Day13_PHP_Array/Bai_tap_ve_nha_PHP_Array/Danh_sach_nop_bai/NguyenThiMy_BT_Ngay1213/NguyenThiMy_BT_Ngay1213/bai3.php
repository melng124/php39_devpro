<!--3.	Viết hàm kiểm tra số nguyên tố từ 1 - 100, sau đó hiển thị ra màn hình như giao diện sau, trong đó:-->
<!--•	Các số có nền xanh là số nguyên tố-->
<!--•	Các số có nền trắng không phải số nguyên tố-->
<?php
function kiemtraSNT($n)
{
    $dem = 0;
    if ($n < 0 && $n < 2) {
        return false;
    }
    for ($i = 1; $i <=$n; $i++) {
        if ($n%$i==0){
            $dem++;
        }
    }
    if ($dem == 2) {
        return true;
    }
    else {
        return false;
    }
}
function lietKe($row, $col) {
    echo '<table cellspacing="0px" cellpadding="0px" border="1px" align="center">';
    $t =0;
    for($i = 1; $i <= $row;$i++){
        echo "<tr>";
        for ($j = (1 + $t); $j <= ($col +  $t); $j++){
            if (kiemtraSNT($j)){
                echo "<td height='50px' width='50px' bgcolor='#006400' align='center'>$j </td>";
            }
            else {
                echo "<td height='50px' width='50px' bgcolor='white' align='center'>$j </td>";
            }
        }
        $t += $row;
        echo "<tr>";
    }
    echo '</table>';
}
lietKe(10, 10);
echo "<br/>";

?>
