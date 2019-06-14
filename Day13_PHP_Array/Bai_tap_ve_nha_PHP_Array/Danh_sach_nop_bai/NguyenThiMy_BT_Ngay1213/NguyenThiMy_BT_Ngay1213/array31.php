<!--$arrs = ['PHP', 'HTML', 'CSS', 'JS'];-->
<!--Hãy viết code hiển thị nội dung như hình sau:-->

<?php
array_pro
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo "<pre>";
var_dump($arrs);
print_r($arrs);
?>
<table border="1"cellpadding="0">
    <tr>
        <th style="font-size: 24px; font-weight: bold;">Tên khóa học</th>
    </tr>
    <tr>
        <?php foreach ($arrs as $key => $value):?>
            <?php
                echo $value;
                ?>
        <?php endforeach;?>
        <td>PHP</td>

    </tr>
    <tr>
        <?php foreach ($arrs as $key => $value):?>
            <?php
                echo $value;
                ?>
        <?php endforeach;?>
        <td>HTML</td>

    </tr>
    <tr>
        <?php foreach ($arrs as $key => $value):?>
            <?php
            echo $value;
            ?>
        <?php endforeach;?>
        <td>CSS</td>

    </tr>
    <tr>
    <?php foreach ($arrs as $key => $value):?>
        <?php
        echo $value;
        ?>
    <?php endforeach;?>
        <td>JS</td>

    </tr>
</table>
