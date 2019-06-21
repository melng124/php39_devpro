<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bt10b11.css">
    <title>Document</title>
</head>

<body>
    <?php
    function display($n)
    {

        for ($j = 1; $j <= 10; $j++) {
            echo "$n x $j = " . ($n * $j);
            echo "<br/>";
        }
    }
    ?>

    <table border="1">
        <tr class="title">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "
            <td> $i </td>
            ";
        }

        ?>
        </tr>
        <tr>
            <?php
            for($i = 1; $i <= 5; $i++){
            echo"<td>";
            display($i);
            echo"</td>";
            }
            ?>
        </tr>
        <tr class="title">
        <?php
        for ($i = 6; $i <= 10; $i++) {
            echo "
            <td> $i </td>
            ";
        }

        ?>
        </tr>
        <tr>
            <?php
            for($i = 6; $i <= 10; $i++){
            echo"<td>";
            display($i);
            echo"</td>";
            }
            ?>
        </tr>
        
    </table>

</body>

</html>