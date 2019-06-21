<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/17/2019
 * Time: 11:04 PM
 */
?>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/css.css">
<div class=" bt1 container">
    <div class="wrap-content">
        <h3>Chu Vi và Diện Tích Hình Chữ Nhật</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="a">Nhập a</label><br/>
                <input type="text" class="form-control" placeholder="Mời bạn nhập  số a" name="a"
                       value="<?php echo isset($_POST['a']) ? $_POST['a']:''?>"/><br/></div>
            <div class="form-group">
                <label for="b">Nhập b</label><br/>
                <input type="text" class="form-control" placeholder="Mời bạn nhập số b" name="b"
                       value="<?php echo isset($_POST['b']) ? $_POST['b']:''?>"
                ><br/></div>

            <button type="submit" name="tong" class="btn btn-success">a+b</button>
            <button type="submit" name="hieu" class="btn btn-success">a-b</button>
            <button type="submit" name="tich" class="btn btn-success">a*b</button>
            <button type="submit" name="thuong" class="btn btn-success">a/b</button>
            <?php
            if (isset($_POST['tong'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                if (empty($a) || empty($b)) {
                    echo "<p style='color: red'>Dữ liệu không được để trống</p>";

                }
                elseif ((is_numeric($a) && is_numeric($b))) {
                    $c = $a+$b;
                    echo "<p>Tổng $a+$b =  $c</p>";
                }else {
                    echo '<p style="color:red;">Dữ liệu không phải kiểu số</p>';
                }

            }elseif (isset($_POST['hieu'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                if (empty($a) || empty($b)) {
                    echo "<p style='color: red'>Dữ liệu không được để trống</p>";

                }
                elseif ((is_numeric($a) && is_numeric($b))) {
                    $c = $a-$b;
                    echo "<p>Tổng $a-$b =  $c</p>";
                }else {
                    echo '<p style="color:red;">Dữ liệu không phải kiểu số</p>';
                }
            }
            elseif (isset($_POST['tich'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                if (empty($a) || empty($b)) {
                    echo "<p style='color: red'>Dữ liệu không được để trống</p>";

                }
                elseif ((is_numeric($a) && is_numeric($b))) {
                    $c = $a*$b;
                    echo "<p>Tổng $a*$b =  $c</p>";
                }else {
                    echo '<p style="color:red;">Dữ liệu không phải kiểu số</p>';
                }
            }
            elseif (isset($_POST['thuong'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                if (empty($a) || empty($b)) {
                    echo "<p style='color: red'>Dữ liệu không được để trống</p>";

                }
                elseif ((is_numeric($a) && is_numeric($b))) {
                    $c = $a/$b;
                    echo "<p>Tổng $a/$b =  $c</p>";
                }else {
                    echo '<p style="color:red;">Dữ liệu không phải kiểu số</p>';
                }
            }
            ?>
        </form>
    </div>
</div>
