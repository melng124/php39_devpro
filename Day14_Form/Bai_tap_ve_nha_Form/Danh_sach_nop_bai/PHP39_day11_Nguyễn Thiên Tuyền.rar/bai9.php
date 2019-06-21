<!DOCTYPE html>
<html>
<head>
    <title>Bài 9</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>
    <?php
    $n = 5;
    for($i = 1; $i <= $n; $i++)
    {
        for($j=1; $j <= $i; $j++)
        {
            echo ' * ';
        }
        echo '<br>';
    }
    for($i = $n; $i >= 1; $i--)
    {
        for($j=1; $j <= $i; $j++)
        {
            echo ' * ';
        }
        echo '<br>';
    }
    ?>
    </h1>
</body>
</html>