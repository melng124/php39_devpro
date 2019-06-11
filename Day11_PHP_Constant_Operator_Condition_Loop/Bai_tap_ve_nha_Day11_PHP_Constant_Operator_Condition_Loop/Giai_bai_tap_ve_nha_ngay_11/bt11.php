<?php
/*
 *Dựng giao diện bàn cờ như sau, sử dụng vòng lặp trong PHP
 */
$n = 8;
?>
<style type="text/css">
    td {
        width: 40px;
        height: 40px;
    }
    .black {
        background: #000;
    }
</style>
<table border="1" cellspacing="0" cellpadding="0">
    <?php for ($i = 1; $i <= $n; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $n; $j++): ?>
                <?php $black = ($i + $j) % 2 != 0 ? "class='black'" : "" ?>
                <td <?php echo $black ?>></td>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
</table>
