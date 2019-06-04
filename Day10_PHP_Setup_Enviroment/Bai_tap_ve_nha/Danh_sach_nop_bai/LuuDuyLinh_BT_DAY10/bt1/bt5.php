<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php
$name="Nguyễn Viết Mạnh";
$email="Nguyenvietmanhit@gmail.com";
$phone="0987xxxxxx";
$message="This is message";
?>
<div class="container">
<form class="needs-validation" >
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name*</label>
            <input type="text" class="form-control" id="name" placeholder="" value="<?php echo "$name"?>">

        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Email*</label>
            <input type="text" class="form-control" id="email" placeholder="" value="<?php echo "$email"?>" >

        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Phone</label>
            <div class="input-group">
                <input type="text" class="form-control" id="phone" value="<?php echo "$phone"?>" >

            </div>
        </div>
    </div>
    <div class="form-row">
        <label for="validationCustomUsername">Message*</label>
       <div class="col-md-12">

           <textarea id="message" cols="155" rows="5" ><?php echo "$message"?></textarea>
       </div>
    </div>
    <br/>
    <button onclick="a()"   class="btn btn-primary" type="button">Send Message</button>
    <p id="show"></p>
</form>
</div>
<script type="text/javascript">

    function a() {
        var name=document.getElementById('name');
        var email=document.getElementById('email');
        var phone=document.getElementById('phone');
        var message=document.getElementById('message');
        document.getElementById('show').innerHTML="Name :"+name.value+"<br/>Email :"+email.value+"<br/>Phone :"+phone.value+"<br/>Message :"+message.value;
        return false;

    }
</script>
</body>
</html>