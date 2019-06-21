<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=devide-width,initial-scale=1,shrink-to-fit=no" />
    <title>BT5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body class="bt5">
<?php
$name = 'Nguyễn Viết Mạnh';
$email = 'nguyenvietmanhit@gmail.com';
$phone = '0987599921';
$message = 'This is a message';
?>
<div class="container">
    <form action="" method="get" onsubmit="return display()">
        <h5 id="show-error"></h5>
        <div class="row">
            <div class="col-md-4 col-12">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="col-md-4 col-12">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="col-md-4 col-12">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
            </div>

        </div>
        <label for="message">Example textarea</label>
        <textarea class="form-control" id="message" name="message" rows="4"><?php echo $message ?></textarea>
        <input type="submit" class="btn btn-danger" name="submit" value="Send message"/>
        <p class="note">* These fields are required</p>
        <h5 id="show-result"></h5>
    </form>
</div>
</body>
</html>