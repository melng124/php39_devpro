<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-5.css" type="text/css">
    <script type="text/javascript" src="js/myjavascript-5.js"></script>
</head>
<body>
<?php
$name = 'Hoang Anh Nguyen';
$email = 'mel@gmail.com';
$phone = '0987xxxxxx';
$message = 'This is message';
?>

<div class="container">
    <form onsubmit="return validateForm()" action="" method="get">
        <div class="row">
            <div class="col-md-4 col-12">
                <p>Name *</p>
                <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $name ?>">
            </div>
            <div class="col-md-4 col-12">
                <p>Email *</p>
                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $email ?>">
            </div>
            <div class="col-md-4 col-12">
                <p>Phone *</p>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo $phone ?>">
            </div>
            <div class="col-12">
                <p>Message *</p>
            </div>
            <div class="col-12">
                <textarea name="message" id="message" class="form-control" cols="30" rows="10"
                          placeholder="<?php echo $message ?>"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-warning">Send Message</button>
            </div>
            <div class="col-12">
                <p id="notice">* These fields are required</p>
            </div>
            <div class="col-12">
                <p id="showName"></p>
                <p id="showEmail"></p>
                <p id="showPhone"></p>
                <p id="showMessage"></p>
            </div>
        </div>
    </form>
</div>
</body>
</html>