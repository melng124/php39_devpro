<html>
<head>
    <title>Bài 5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/Bai5.css"/>
</head>
<body>
<div class="full_container">
    <div class="content">
<form action="Bai5.php" method="post">
    <div class="form-group">
    <label for="name">Name*</label>
    <input type="text" class="form-control" name="name" id="name1" placeholder="Nguyễn Hữu Bằng"/>
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="text" class="form-control" name="email" id="email1" placeholder="HuuBang2898@gmail.com"/>
    </div>
    <div class="form-group">
        <label for="phone">Phone*</label>
        <input type="text" class="form-control" name="phone" id="phone1" placeholder="0326306111"/>
    </div>
    <div class="form-group">
        <label for="note">Message*</label>
        <input type="text" class="form-control" name="note" id="note1" placeholder="This is a message"/>
        <input type="submit" class="btn-warning" name="Send" value="Send Message"/>
    </div>


</form>
</div>
    <?php
    if(isset($_POST['Send'])){
        echo ("<br>Họ tên ".$_POST['name']);
        echo ("<br>Email ".$_POST['email']);
        echo ("<br>Phone ".$_POST['phone']);
        echo ("<br>Message ".$_POST['note']);
    }
    ?>

</div>
</body>
</html>