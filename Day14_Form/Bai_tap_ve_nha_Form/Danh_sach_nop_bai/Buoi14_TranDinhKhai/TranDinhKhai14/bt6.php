<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="col-md-4 ">
        <div class="b6">
            <div class="headb6">
                <h5>Thực hành toán tử</h5>
            </div>
            <div class="formb6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="so1">Nhập số a</label>
                        <input type="text" name="a" class="form-control" id="so1" placeholder="Nhập số a">
                        
                    </div>
                    <div class="form-group">
                        <label for="so2">Nhập số b</label>
                        <input type="text" name="b" class="form-control" id="so2" placeholder="Nhập số b" >
                        
                    </div>

                    <button type="submit" name="b1" class="btn btn-primary">a + b</button>
                    <button type="submit" name="b2" class="btn btn-success">a - b</button>
                    <button type="submit" name="b3" class="btn btn-danger">a * b</button>
                    <button type="submit" name="b4" class="btn btn-warning">a / b</button>
                </form>
                <?php
                if (isset($_POST["b1"])||isset($_POST["b2"])||isset($_POST["b3"])||isset($_POST["b4"])) {
                    if (empty($_POST['a'])||empty($_POST['b']))
                        echo "<i class='red'>Không được để trống dữ liệu </i>";
                    else if (is_numeric($_POST['a']) == false||is_numeric($_POST['b'])==false)
                             echo "<i class='red'>Chỉ cho phép nhập số </i>";
                    else{
                        if(isset($_POST['b1']))echo "a + b = ".((float)($_POST['a'])+(float)($_POST['b']));
                        if(isset($_POST['b2']))echo "a - b = ".((float)($_POST['a'])-(float)($_POST['b']));
                        if(isset($_POST['b3']))echo "a * b = ".((float)($_POST['a'])*(float)($_POST['b']));
                        if(isset($_POST['b4']))echo "a / b = ".((float)($_POST['a'])/(float)($_POST['b']));

                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>