<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 7</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-7.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name"
                       value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
            </div>
            <div class="col-12">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your email"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="col-12">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone Number"
                       value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
            </div>
            <div class="col-12">
                <input type="text" name="site" id="site" class="form-control"
                       placeholder="Your Website starts with http://"
                       value="<?php echo isset($_POST['site']) ? $_POST['site'] : '' ?>">
            </div>
            <div class="col-12">
                <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                          placeholder="Type your Message here..."></textarea>
            </div>
            <div class="col-12">
                <button type="submit" name="submit-form" class="btn btn-danger">SUBMIT</button>
            </div>
            <div class="col-12" id="info">
                <?php
                require 'validate-7.php';
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>