<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no"/>
    <style type="text/css">
        .container{
            width: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h3>Thực hành toán tử số học</h3>
    </div>
    <p id="error"></p>
    <div class="content">
        <form action="" method="get">
            <div class="form-group">
                <label for="inputA">Nhập vào số a:</label>
                <input class="form-control" type="text" name="inputA" id="inputA" value="<?php echo isset($_GET['inputA'])? $_GET['inputA'] : '';?>" placeholder="số a"/>
                <label for="inputB">Nhập vào số b:</label>
                <input class="form-control" type="text" name="inputB" id="inputB" value="<?php echo isset($_GET['inputB'])? $_GET['inputB'] : '';?>" placeholder="số b"/>
            </div>
            <input type="submit" name="btnSubmit1" class="btn btn-primary" value="a + b"/>
            <input type="submit" name="btnSubmit2" class="btn btn-success" value="a - b"/>
            <input type="submit" name="btnSubmit3" class="btn btn-danger" value="a * b"/>
            <input type="submit" name="btnSubmit4" class="btn btn-warning" value="a / b"/>
        </form>
    </div>
    <p id="showResult"></p>
</div>
<?php
if(isset($_GET['btnSubmit1'])){
    $a = $_GET['inputA'];
    $b = $_GET['inputB'];
    if(empty($a) || empty($b)){
        echo "<p style='color: red'>Không được để trống các trường</p>";
    }
    elseif(is_numeric($a) == FALSE || is_numeric($b) == FALSE){
        echo "<p style='color: red'>Giá trị nhập vào phải là số</p>";
    }
    else{
        echo "<b style='color: #007bff'>a + b = ".($a + $b)."</b>";
    }
}
if(isset($_GET['btnSubmit2'])){
    $a = $_GET['inputA'];
    $b = $_GET['inputB'];
    if(empty($a) || empty($b)){
        echo "<p style='color: red'>Không được để trống các trường</p>";
    }
    elseif(is_numeric($a) == FALSE || is_numeric($b) == FALSE){
        echo "<p style='color: red'>Giá trị nhập vào phải là số</p>";
    }
    else{
        echo "<b style='color: #007bff'>a - b = ".($a - $b)."</b>";
    }
}
if(isset($_GET['btnSubmit3'])){
    $a = $_GET['inputA'];
    $b = $_GET['inputB'];
    if(empty($a) || empty($b)){
        echo "<p style='color: red'>Không được để trống các trường</p>";
    }
    elseif(is_numeric($a) == FALSE || is_numeric($b) == FALSE){
        echo "<p style='color: red'>Giá trị nhập vào phải là số</p>";
    }
    else{
        echo "<b style='color: #007bff'>a * b = ".($a * $b)."</b>";
    }
}
if(isset($_GET['btnSubmit4'])){
    $a = $_GET['inputA'];
    $b = $_GET['inputB'];
    if(empty($a) || empty($b)){
        echo "<p style='color: red'>Không được để trống các trường</p>";
    }
    elseif(is_numeric($a) == FALSE || is_numeric($b) == FALSE){
        echo "<p style='color: red'>Giá trị nhập vào phải là số</p>";
    }
    else{
        echo "<b style='color: #007bff'>a / b = ".($a / $b)."</b>";
    }
}
?>
</body>
</html>