<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bàn cờ</title>
</head>
<body>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $o = $row + $col;
            if ($o % 2 == 0) {
                echo "<td height='30px' width='30px' bgcolor='black'></td>";
            } else {
                echo "<td height='30px' width='30px' bgcolor='white'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>