<!DOCTYPE html>
<html lang="en">
<head>
    <title>BT3</title>
</head>
<body>
<?php
function check($num)
{
    if ($num <= 1) {
        return false;
    } elseif ($num == 2) {
        return true;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

function Test($hang,$cot)
{
    echo '<table cellspacing="0px" cellpadding="0px" border="1px" align="center">';
    $t = 0;
    for ($row = 1; $row <= $hang; $row++) {

        echo "<tr>";
        for ($col = (1 + $t); $col <= ($cot + $t); $col++) {
            if (check($col)) {
                echo "<td height='30px' width='30px' bgcolor='green' align='center'> $col </td>";
            } else {
                echo "<td height='30px' width='30px' bgcolor='white' align='center'> $col </td>";
            }
        }
        $t += $hang;
        echo "</tr>";
    }
    echo '</table>';
}

Test(10,10);
echo "<br/>";echo "<br/>";
//Test(5,5);
?>
</body>
</html>