<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BT1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<div class="bt1 container">
    <div class="wrap-content">
        <h3>Thực hành toán tử <br />
            <!--ax<span>2</span> + bx + c = 0-->
        </h3>
        <form method="post" action="#" >
            <h5 id="show-error"></h5>
            <div class="form-group">
                <label for="number-a">Nhập vào số a: </label>
                <input  type="text" name="a" class="form-control" id="number-a" aria-describedby="nameHelp"
                       placeholder="" value="<?php echo isset($_POST['a'])?$_POST['a']:''?>">

            </div>
            <div class="form-group">
                <label for="number-a">Nhập vào số b: </label>
                <input type="text" name="b" class="form-control" id="number-b" aria-describedby="nameHelp"
                       placeholder="" value="<?php echo isset($_POST['b'])?$_POST['b']:''?>">

            </div>
            <button style="margin-right: 10px"  name="cong" type="submit" class="btn btn-primary">a+b
            <button style="margin-right: 10px"  name="tru" type="submit" class=" a btn btn-primary">a-b
            <button style="margin-right: 10px" name="nhan" type="submit" class=" a btn btn-primary">a*b
            <button style="margin-right: 10px" name="chia" type="submit" class=" a btn btn-primary">a/b
            <button type="reset" class="btn btn-warning">Reset dữ liệu</button>
            <p id="show-result">
            </p>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['cong'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    if(empty($a)||empty($b)){
        echo "<p style='color: red'>Không được để trống a hoặc b</p>";
    }
    elseif (is_numeric($a)==false||is_numeric($b)==false){
        echo "<p style='color: red'>a hoặc b phải là số</p>";
    }
    else{
        echo "$a+$b =".($a+$b);
    }
}
if(isset($_POST['tru'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    if(empty($a)||empty($b)){
        echo "<p style='color: red'>Không được để trống a hoặc b</p>";
    }
    elseif (is_numeric($a)==false||is_numeric($b)==false){
        echo "<p style='color: red'>a hoặc b phải là số</p>";
    }
    else{
        echo "$a-$b =".($a-$b);
    }
}
if(isset($_POST['nhan'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    if(empty($a)||empty($b)){
        echo "<p style='color: red'>Không được để trống a hoặc b</p>";
    }
    elseif (is_numeric($a)==false||is_numeric($b)==false){
        echo "<p style='color: red'>a hoặc b phải là số</p>";
    }
    else{
        echo "$a*$b =".($a*$b);
    }
}
if(isset($_POST['chia'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    if(empty($a)||empty($b)){
        echo "<p style='color: red'>Không được để trống a hoặc b</p>";
    }
    elseif (is_numeric($a)==false||is_numeric($b)==false){
        echo "<p style='color: red'>a hoặc b phải là số</p>";
    }
    elseif ($b==0){
        echo "<p style='color: red'>B không thể bằng 0</p>";
    }
    else{
        echo "$a/$b =".($a/$b);
    }
}
?>
</body>
</html>