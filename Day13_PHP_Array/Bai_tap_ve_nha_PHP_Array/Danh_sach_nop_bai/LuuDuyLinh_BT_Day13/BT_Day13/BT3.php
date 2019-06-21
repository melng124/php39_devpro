<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BT3</title>
</head>
<body>

    <table border="1px" cellpadding="5px" cellspacing="0px">
        <?php
        $arr=['PHP', 'HTML', 'CSS', 'JS'];
        ?>
        <tr><td>Tên Khóa Học</td></tr>
        <?php foreach ($arr as $value): ?>
            <tr>
                <td><?php echo $value?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>