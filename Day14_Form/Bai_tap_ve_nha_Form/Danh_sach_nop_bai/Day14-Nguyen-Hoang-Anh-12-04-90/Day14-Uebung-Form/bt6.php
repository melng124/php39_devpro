<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 6</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-6.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row" id="header">
            <div class="col-12">
                <h1>
                    Thực hành toán tử
                </h1>
            </div>
        </div>
        <div class="row" id="content">
            <div class="col-12">
                <label for="num-a">Nhập số a</label>
            </div>
            <div class="col-12">
                <input type="text" name="num-a" id="num-a" class="form-control"
                       value="<?php echo isset($_POST['num-a']) ? $_POST['num-a'] : '' ?>">
            </div>
            <div class="col-12">
                <label for="num-b">Nhập số b</label>
            </div>
            <div class="col-12">
                <input type="text" name="num-b" id="num-b" class="form-control"
                       value="<?php echo isset($_POST['num-b']) ? $_POST['num-b'] : '' ?>">
            </div>
            <div class="col-12">
                <button type="submit" name="sum-submit" class="btn btn-success">a + b</button>
                <button type="submit" name="ab-submit" class="btn btn-info">a - b</button>
                <button type="submit" name="multi-submit" class="btn btn-danger">a * b</button>
                <button type="submit" name="divide-submit" class="btn btn-warning">a / b</button>
            </div>
            <div class="col-12" id="result">
                <?php
                require 'validate-6.php';
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>