<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1px solid black">
    <th>Tên Khóa Học</th>
    <?php foreach ($arrs as $key => $value):?>
    <tr>
        <td><?php echo $value?></td>
    </tr>
    <?php endforeach;?>
</table>
