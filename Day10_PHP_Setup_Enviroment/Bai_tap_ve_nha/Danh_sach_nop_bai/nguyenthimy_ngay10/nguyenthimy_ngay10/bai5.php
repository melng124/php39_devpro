<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai5</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script rel="stylesheet" type="text/javascript" src="js/javascript.js"></script>
    <style type="text/css">
        form{
            width: 650px;
            height: 500px;
            background: #F8F9FA;
            margin: 0px auto;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<?php
$name = 'Nguyễn Thị Mỹ';
$email = 'nguyenmy97bn@gmail.com';
$phone = '01668773498';
?>
<form action="#" enctype="" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="txtname">Name*</label>
            <input type="text" class="form-control" id="txtname" name="txtname" value="<?php echo "$name"?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="txtemail">Email*</label>
            <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="" value="<?php echo "$email"?>">
        </div>
        <div class="form-group col-md-4">
            <label for="txtphone">Phone*</label>
            <input type="phone" class="form-control" name="txtphone" id="txtphone" placeholder="" value="<?php echo "$phone"?>">
        </div>
    </div>
    <div class="form-group">
        <label for="mes">Message</label>
        <textarea class="form-control" id="mes" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-warning" onclick="validateForm();">Send Message*</button>
    <br>
    <small>These are files required*</small>
    <div id="ketqua"></div>

</form>
</body>
</html>