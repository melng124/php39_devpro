<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1px" cellspacing="0px" cellpadding="10px">
    <?php
    for ($row = 1; $row <= 4; $row++)
    {
        echo "<tr align='center'>";
        for ($col = 1; $col <= 5; $col++)
        {
            echo "<td style='color: red'>";
            if ($row <= 2) {
                if ($row % 2 != 0) {
                    echo "$col";
                } else {
                    for ($k = 1; $k <= 10; $k++) {
                        echo " $col x $k =" . ($k * $col);
                        echo "<br/>";
                    }
                }
            }
            else{
                if ($row % 2 != 0) {
                    echo ($col+5);
                } else {
                    for ($k = 1; $k <= 10; $k++) {
                        echo ($col+5)."  x $k =" . ($k * ($col+5));
                        echo "<br/>";
                    }
                }
            }
            echo "</td>";
        }


        echo "</tr>";
    }
    ?>
</table>
</body>
</html>