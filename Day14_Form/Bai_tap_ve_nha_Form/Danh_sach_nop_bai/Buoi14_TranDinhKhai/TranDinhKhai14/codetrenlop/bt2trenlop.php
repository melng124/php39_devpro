<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="contianer">
    <div class="row">
        <div class="col-md-4 ">
<form action="" method="POST">
  <div class="form-group">
    <label for="username">Username </label>
    <input type="email" name="username" class="form-control" id="ususername" value="<?php  isset($_POST['username'])? $_POST['username']:""; ?>" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="pasword">Another label</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Another input" value="<?php  isset($_GET['password'])? $_GET['password']:""; ?>">
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit Name">
</form>
<?php
if(isset($_POST["submit"])){
    if(empty($_POST["username"])||empty($_POST["password"])){
        echo "Hoàng Lồn không được để trống username hoặc password";
    }
    else if(strlen($_POST["password"])<6)echo"Hoàng Lồn Password phải nhiều hơn 6 kí tự";
    else echo "Hoàng Lồn đăng nhập thành công rồi kìa";
}
?>
</div>
</div>
</div>

</body>
</html>