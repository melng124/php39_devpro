<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date=date('d/m/Y H:i:s',time());
print_r($_SESSION);
if (isset($_SESSION['user'])==false){
    header('Location:http://localhost/BT_Day16/index.php?_ijt=mgcg5vb6cqldb9rngucmtrevlv');
}
if (isset($_POST['logout'])){
    setcookie('username', $_SESSION['user'], time() - 3600);
    header('Location:http://localhost/BT_Day16/index.php?_ijt=mgcg5vb6cqldb9rngucmtrevlv');
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>ĐĂng nhập thành công</p>
    <p>Chào mừng bạn <?php echo $_SESSION['user']?></p>
    <p><?php echo $date?></p>
<form action="Login.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
</body>
</html>