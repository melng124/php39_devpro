
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Bai 1</title>
        <meta charset="utf-8">
    </head>
    <style type="text/css">
        form{
            width: 300px;
            height: 250px;
            background: #B6E0FF;
            font-size: 16px;
        }
        label{
            margin-left: 30px;

        }
        input{
            margin-left: 30px;
            margin-bottom: 10px;
        }
        input[type=text] {
            border: none;
            border-radius: 5px;
            width: 200px;
            height: 40px;
        }
        input[type=password] {
            border: none;
            border-radius: 5px;
            width: 200px;
            height: 40px;
        }
        input[type=submit] {
            border: none;
            border-radius: 5px;
            width: 100px;
            height: 40px;
            background: #1c7430;
        }
    </style>
    <body>
    <form action="login_success.php" method="post" enctype="multipart/form-data">
        <div style="padding-top: 20px;">
            <label>Username</label><br>
            <input type="text" name="username" value="<?php isset($_POST['username']) ? $_POST['username']:''?>"><br>
            <label>Password</label><br>
            <input type="password" name="password" value="<?php isset($_POST['password']) ? $_POST['password']:''?>"><br>
            <input type="checkbox" name="checkbox" value="1">Remember me<br>
            <input type="submit" name="submit" value="Login">
        </div>

    </form>
    </body>
    </html>
<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){
//nếu có session tên username thì ta thực hiện lệnh dưới
    ?>
    <p>

        Chào mừng bạn:
        <?php echo $_SESSION['user']; ?>
        | <a href="Logout.php">Logout</a>
    <p>
    <?php
}
?>