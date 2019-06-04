<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 2</title>
    <style>
        input[type=submit]{
            background-color: orange;
            border: none;
            border-radius: 5px;
        }

        textarea{width: 500px;}
    </style>
</head>
<body>
<form method="post" name="form1" action="">
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td> Name *</td>
            <td> Email *</td>
            <td> Phone</td>
        </tr>
        <tr>
            <td><input type="text" name="name" placeholder="Nguyen Van A"></td>
            <td><input type="email" name="email" placeholder="@gmail.com"></td>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td colspan="3">Message<br><textarea name="note"></textarea></td>
        </tr>
        <tr style="text-align: center">
            <td colspan="3"><input type="submit" name="submit" value="Send message"></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['submit'])){
        echo "Name: ".$_POST['name']."<br>";
        echo "Email: ".$_POST['email']."<br>";
        echo "Phone: ".$_POST['phone']."<br>";
        echo "Message: ".$_POST['note']."<br>";
    }
?>
</body>
</html>