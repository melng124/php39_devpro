<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">
    <h2>Please type name </h2>
    <input type="text" name="username" value="<?php  isset($_GET['username'])? $_GET['username']:''; ?>">
    <input type="submit" name="submit" value="Submit Name">
</form>
<?php
if(isset($_GET["submit"])){
    if(empty($_GET["username"])){
        echo "Hoàng Lồn không được để trống";
    }
    else print_r($_GET["username"]);
}
?>
   
   
    
</body>
</html>