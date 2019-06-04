<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=devide-width,initial-scale=1,shrink-to-fit=no" />
    <title>BT5</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style type="text/css" rel="stylesheet">
        .bt5 .btn{
            margin-top: 10px;
            background: #FF5722;
        }
        .bt5 .container{
            background: #f1ebeb;
            padding-bottom: 10px;
            padding-top: 10px;
            margin-top: 20px;
        }
        .bt5 .note{
            margin-top: 10px;
        }
        .bt5 #show-error{
            color: red;
        }
        .bt5 #show-result{
            color: blue;
        }
    </style>
</head>
<body class="bt5">
<?php
$name = '';
$email = '';
$phone = '';
$message = '';
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
<script>
    function display() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;
        var result = "<p>Name: " + name + "</p>";
            result += "<p>Email: " + email + "</p>";
            result += "<p>Phone: " + phone + "</p>";
            result += "<p>Message: " + message + "</p>";
            document.getElementById('show-result').innerHTML = result;
        return false;
    }


</script>
</html>

