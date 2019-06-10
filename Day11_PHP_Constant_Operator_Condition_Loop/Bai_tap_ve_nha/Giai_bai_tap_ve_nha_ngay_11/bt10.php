<?php
/*
 * Dựng giao diện bảng cửu chương như sau, sử dụng vòng lặp trong PHP
 */
?>
<style type="text/css">
    table {
        text-align: center;
    }
    .header {
        border-bottom: 2px solid #524f4f;
        display: block;
        padding: 5px;
        background: #acd1e2;
        color: red;
        font-weight: bold;
    }
    td{
        width: 120px;
        padding-bottom: 15px;
    }
</style>
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <?php
        $n = 10;
        ?>
        <?php for ($i = 1; $i <= $n; $i++) : ?>
            <td>
                <span class="header"><?php echo $i ?></span>
                <?php for ($j = 1; $j <= $n; $j++): ?>
                    <p>
                        <?php echo "$i x $j = " . ($i * $j); ?>
                    </p>
                <?php endfor; ?>
            </td>
            <?php if ($i % 5 == 0) : ?>
            <tr></tr>
            <?php endif; ?>
        <?php endfor ?>
    </tr>

</table>
