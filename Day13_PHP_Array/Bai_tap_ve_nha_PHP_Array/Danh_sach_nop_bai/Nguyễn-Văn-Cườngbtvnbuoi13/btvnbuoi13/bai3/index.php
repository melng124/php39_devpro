<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<style type="text/css">
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
<table>
    <tr>
        <th>
        <b>
            Tên khóa học
        </b>
        </th>
    </tr>
    <tr>
        <td> <?php echo "" . $arrs[0]; ?></td>

    </tr>
    <tr>
        <td> <?php echo "" . $arrs[1]; ?></td>

    </tr>
    <tr>
        <td> <?php echo "" . $arrs[2]; ?></td>

    </tr>
    <tr>
        <td> <?php echo "" . $arrs[3]; ?></td>

    </tr>
</table>
