<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 10</title>
</head>
<body style="margin: auto;">
<table border="1" cellpadding="0" cellspacing="0">
    <tr style="background-color: #E0FFFF; color: red; text-align: center">
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>
    <?php
    echo "<tr>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<td>";
        for ($j =1; $j <= 10; $j++){
            echo "$i x $j = ".($i * $j);
            echo "<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
    ?>
</table>
<table border="1" cellpadding="0" cellspacing="0";>
    <tr style="background-color: #E0FFFF; color: red; text-align: center;">
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
    </tr>
    <?php
    echo "<tr>";
    for ($i = 5; $i < 10; $i++) {
        echo "<td>";
        for ($j =1; $j <= 10; $j++){
            echo "$i x $j = ".($i * $j);
            echo "<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
    ?>
</table>
</body>
</html>