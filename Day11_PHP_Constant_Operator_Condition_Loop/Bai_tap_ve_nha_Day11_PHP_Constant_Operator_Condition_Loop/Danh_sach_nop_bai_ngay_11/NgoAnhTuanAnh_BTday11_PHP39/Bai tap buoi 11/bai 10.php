<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bao 10</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
    <tr style="background-color: deepskyblue; color: red; text-align: center">
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
    </tr>
    <?php
    echo "<tr>";
    for ($i = 1; $i <= 10; $i++) {
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
