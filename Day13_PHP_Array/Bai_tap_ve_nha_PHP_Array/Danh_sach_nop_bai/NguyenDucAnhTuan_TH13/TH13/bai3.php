<?php
$arr = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>Tên khoá học</th>
    </tr>
    <?php foreach ($arr as $key => $value): ?>
        <tr>
            <td>
                <?php echo $value; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
