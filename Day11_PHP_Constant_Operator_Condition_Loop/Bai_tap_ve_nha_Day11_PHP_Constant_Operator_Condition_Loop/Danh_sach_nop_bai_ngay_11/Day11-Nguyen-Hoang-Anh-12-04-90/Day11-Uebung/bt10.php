<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 10</title>
    <link rel="stylesheet" href="css/mystyle-10.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<table border="2px solid #f7fffb">
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
    </tr>
    <tr>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "1 x $i = " . 1 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "2 x $i = " . 2 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "3 x $i = " . 3 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "4 x $i = " . 4 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "5 x $i = " . 5 * $i;
                echo "<br>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <tr>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "6 x $i = " . 6 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "7 x $i = " . 7 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "8 x $i = " . 8 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "9 x $i = " . 9 * $i;
                echo "<br>";
            }
            ?>
        </td>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "10 x $i = " . 10 * $i;
                echo "<br>";
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>