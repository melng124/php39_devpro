<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 5</title>
<script type="text/javascript">
    function myfunction() {
        var nameip = document.getElementById("nameinput").value;
        var emailip = document.getElementById("emailinput").value;
        var phoneip = document.getElementById("phoneinput").value;
        var messip = document.getElementById("messinput").value;
        document.getElementById('show').innerHTML = "Name: " +nameip +"<br/>"
            +"Email: "+emailip +"<br/>" +"Phone: "+phoneip +"<br/>" +"Message: " +messip;
            return false;
    }
</script>
</head>
<body>
<?php
$name = "Nguyễn Thiên Tuyền";
$email = "deejythientuyen@gmail.com";
$phone = "0359629370";
?>
<div style="width: 650px; margin: auto; background-color:   #FCDFFF;">
    <form action="" method="post" >
            <table cellpadding="5">
        <tr>
            <td>Name *</td>
            <td><input style="background-color: #E0FFFF" id="nameinput" type="text" class="form-control" placeholder="Tên bạn" value="<?php echo($name) ?>"></td>
        </tr>
        <tr>
            <td>Email *</td>
            <td><input style="background-color: #E0FFFF" id="emailinput" type="email" class="form-control" placeholder="Địa chỉ email" value="<?php echo($email) ?>"></td>
        </tr>
        <tr>
            <td>Phone *</td>
            <td><input style="background-color: #E0FFFF" id="phoneinput" type="number" class="form-control" placeholder="Số điện thoại" value="<?php echo($phone) ?>"></td>
        </tr>
        <tr>
        <td>Message *</td>
        <td><textarea style="background-color: #E0FFFF" id="messinput" rows="3" cols="30" placeholder="This is a messager" value=""></textarea></td>
        </tr>
        <tr>
            <td></td><td>
        <button style="background-color: #FDD017" type="button" class="btn btn-warning" onclick="return myfunction()">Send Message</button></td>
    </tr>
        <td>* These fields are required.</td>
</form>
</table>
<p id="show" style="margin: auto;color: blue"></p>
</body>
</html>