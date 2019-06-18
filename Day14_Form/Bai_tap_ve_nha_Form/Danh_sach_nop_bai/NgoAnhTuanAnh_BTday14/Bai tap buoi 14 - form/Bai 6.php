<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai tap 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="bt1 container">
    <div class="wrap-content">
        <h3>Thực hành toán tử <br/>

        </h3>
        <form method="post" name="form6" action="" enctype="multipart/form-data">
            <h5 id="show-error"></h5>
            <div class="form-group">
                <label for="number-a">Nhập vào số a: </label>
                <input type="text" class="form-control" name="number-a" id="" aria-describedby="nameHelp"
                       placeholder="nhap so a" value="<?php echo isset($_POST['number-a']) ? $_POST['number-a'] : ''?>">


            </div>
            <div class="form-group">
                <label for="number-b">Nhập vào số b: </label>
                <input type="text" class="form-control" name="number-b" id="" aria-describedby="nameHelp"
                       placeholder="nhap so b" value="<?php echo isset($_POST['number-b']) ? $_POST['number-b'] : '' ?>">

            </div>


            <input type="submit" name="add" class="btn btn-danger" value="a + b">
            <input type="submit" name="sub" class="btn btn-success" value="a - b">
            <input type="submit" name="mul" class="btn btn-danger" value="a * b">
            <input type="submit" name="div" class="btn btn-warning" value="a / b">

        </form>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 17/6/2019
 * Time: 9:44 PM
 */
//function validateForm($a, $b)
//{
//
//}
//$add = validateForm()

if (isset($_POST['add'])) {
    $a = $_POST['number-a'];
    $b = $_POST['number-b'];
    if (empty($a) || empty($b)) {
        echo "<p>Không được để trống số a hoặc số b</p>";
    } else if (is_numeric($a) && is_numeric($b)) {
        $add = $a + $b;
        echo "tổng a + b =" . $add;
    }
    else{
        echo " chỉ nhập số";
    }
}
?>
<?php
if (isset($_POST['sub'])) {
    $a = $_POST['number-a'];
    $b = $_POST['number-b'];
    if (empty($a) || empty($b)) {
        echo "<p>Không được để trống số a hoặc số b</p>";
    } else if (is_numeric($a) && is_numeric($b)) {
        $sub = $a - $b;
        echo "Hiệu a - b =" . $sub;
    }
    else{
        echo " chỉ nhập số";
    }
}
?>
<?php
if (isset($_POST['mul'])) {
    $a = $_POST['number-a'];
    $b = $_POST['number-b'];
    if (empty($a) || empty($b)) {
        echo "<p>Không được để trống số a hoặc số b</p>";
    } else if (is_numeric($a) && is_numeric($b)) {
        $mul = $a * $b;
        echo "Tích a * b =" . $mul;
    }
    else{
        echo " chỉ nhập số";
    }
}
?>
<?php
if (isset($_POST['div'])) {
    $a = $_POST['number-a'];
    $b = $_POST['number-b'];
    if (empty($a) || empty($b)) {
        echo "<p>Không được để trống số a hoặc số b</p>";
    } else if (is_numeric($a) && is_numeric($b)) {
        $div= $a / $b;
        echo "Thương a / b =" . $div;
    }
    else{
        echo " chỉ nhập số";
    }
}
?>
</body>
</html>