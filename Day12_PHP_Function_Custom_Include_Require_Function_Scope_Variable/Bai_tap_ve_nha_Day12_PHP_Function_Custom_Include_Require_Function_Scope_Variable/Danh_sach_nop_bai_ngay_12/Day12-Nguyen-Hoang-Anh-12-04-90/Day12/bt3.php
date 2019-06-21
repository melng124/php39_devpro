<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 3</title>
    <link rel="stylesheet" href="css/mystyle-3.css" type="text/css">
</head>
<body>
    <table border="1px solid black">
        <?php
        require "checkPrime.php";
        echo '<tr>';
        for ($i = 1; $i <= 10; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 11; $i <= 20; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 21; $i <= 30; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 31; $i <= 40; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 51; $i <= 60; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 61; $i <= 70; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 71; $i <= 80; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 81; $i <= 90; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        echo '<tr>';
        for ($i = 91; $i <= 100; $i++) {
            if (isPrimeNumber($i) == true) {
                echo "<td id='prime'>$i</td>";
            }
            else
                echo "<td id='notPrime'>$i</td>";
        }
        echo '</tr>';
        ?>
    </table>
</body>
</html>

