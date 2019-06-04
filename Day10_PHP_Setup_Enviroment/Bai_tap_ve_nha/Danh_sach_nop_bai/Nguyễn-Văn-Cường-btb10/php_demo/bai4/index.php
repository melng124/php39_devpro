<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/6/2019
 * Time: 8:31 AM
 */
$hoTen='Nguyễn Văn Cường';
$tuoi=25;
$ngaySinh='01/01/1995';
$gioiTinh='Nam';
$queQuan='Nghệ An';
?>
<style type="text/css">
    table{
        border-collapse: collapse;
    }
    table,tr,td,th{
        border: 1px solid black;
        padding: 5px;
    }
</style>
<table>
    <tr>
        <th>Họ tên</th>
        <th>Tuổi</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
    </tr>
    <tr>
        <td>
        <?php echo ''.$hoTen;?>
        </td>
        <td>
        <?php echo ''.$tuoi;?>
        </td>
        <td>
        <?php echo ''.$ngaySinh;
        ?>
        </td><td>
        <?php echo ''.$gioiTinh ;
        ?>
        </td>
        <td>
        <?php echo ''.$queQuan;
        ?>
        </td>
    </tr>
</table>
