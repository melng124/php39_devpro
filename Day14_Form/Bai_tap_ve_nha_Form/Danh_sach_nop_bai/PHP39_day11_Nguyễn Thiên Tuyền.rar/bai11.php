<!DOCTYPE html>
<html>
<head>
	<title>Bài 11</title>
</head>
<body>
<table style=" width: 500px; height: 500px; border: 3px solid black;margin: auto">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $total = $row + $col;
            if ($total % 2 == 0) {
                echo "<td style='height=50px; width=50px; background-color: white; border: 3px solid'></td>";
            } else {
                echo "<td style='height=50px; width=50px; background-color: black; border: 3px solid'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</div>
</body>
</html>