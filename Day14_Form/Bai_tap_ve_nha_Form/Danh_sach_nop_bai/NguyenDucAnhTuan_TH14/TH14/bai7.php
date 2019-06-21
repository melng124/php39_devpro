<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="txtName" value="<?php echo isset($_POST['txtName'])? $_POST['txtName'] : '';?>" placeholder="Yourname"/>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="txtEmail" value="<?php echo isset($_POST['txtEmail'])? $_POST['txtEmail'] : '';?>" placeholder="Your Email Address"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="txtPhone" value="<?php echo isset($_POST['txtPhone'])? $_POST['txtPhone'] : '';?>" placeholder="Your Phone Number"/>
        </div>
        <div class="form-group">
            <input type="url" class="form-control" name="txtWeb" value="<?php echo isset($_POST['txtWeb'])? $_POST['txtWeb'] : '';?>" placeholder="Your Website start with http://"/>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="txtMsg" rows="3" placeholder="Type your messenger here."><?php echo isset($_POST['txtMsg'])? $_POST['txtMsg'] : '';?></textarea>
        </div>
        <input type="submit" class="form-control btn-danger" name="btnSubmit" value="SUBMIT"/>
    </form>
</div>
<?php
if(isset($_POST['btnSubmit'])){
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $phone = $_POST['txtPhone'];
    $web = $_POST['txtWeb'];
    $msg = $_POST['txtMsg'];
    if(empty($name) || empty($email) || empty($phone) || empty($web) ||empty($msg)){
        echo "<b style='color: red;'>Các trường không được để trống</b>";
    }
    elseif(is_numeric($phone) == FALSE){
        echo "<b style='color: red;'>Trường phone chỉ cho phép nhập số</b>";
    }
    else{
        echo "<span style='color: deepskyblue'>Send contact thành công!</span><br/>";
        echo "<b>Your name: " .$name. "</b><br/>";
        echo "<b>Your email: " .$email. "</b><br/>";
        echo "<b>Your Phone: " .$phone. "</b><br/>";
        echo "<b>Your Website: " .$web. "</b><br/>";
        echo "<b>Your messenger: " .$msg. "</b><br/>";
    }
}
?>
</body>
</html>