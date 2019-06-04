<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8" style="background-color: whitesmoke; margin: 20px auto">
            <form>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">Name *</label>
                        <input type="text" class="form-control" id="name" value="<?php echo ('Nguyễn văn Vỹ'); ?>" >
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefaultUsername">Email *</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email"  aria-describedby="inputGroupPrepend2"
                            value=" <?php echo ('vynv.301997@gmail.com'); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Phone *</label>
                        <input type="text" class="form-control" id="phone" value=" <?php echo ('0924926258'); ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault03">Message *</label>

                    <textarea class="form-control" rows="3" id="mes" value="<?php echo ('This is a message'); ?>"></textarea>
                    </div>

                </div>
                <button class="btn btn-warning" type="button" onclick="hienThi()">Send message</button>
                <p style="color: gray">* These fields are required</p>
                <p style="color: blue" id="show-message"></p>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
   function hienThi() {
       var name=document.getElementById('name').value;
       var email=document.getElementById('email').value;
       var phone=document.getElementById('phone').value;
       var message=document.getElementById('mes').value;
       document.getElementById('show-message').innerHTML="Name: "+name+"<br>Email: "+email+"<br>Phone: "+phone+"<br>Message: "+message;
   }
</script>

</body>

</html>
