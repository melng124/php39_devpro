<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 11</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
    <?php
    /**
     * Created by PhpStorm.
     * User: Dell
     * Date: 6/6/2019
     * Time: 12:06 PM
     */

    for ($hang = 1; $hang <= 8; $hang++) {
        echo "<tr>";
        for ($cot = 1; $cot <= 8; $cot++) {
            $total = $hang + $cot;
            if ($total % 2 == 0) {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            } else {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
