<html>

<head>
    <title>Khai báo và tạo mảng trong PHP</title>
</head>
<body>
<table border="1px">
    <?php
    //khai báo và tạo mảng
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

    foreach ($arrs as $y) {

        echo "<tr>";

        echo "<td>$y</td>";

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>