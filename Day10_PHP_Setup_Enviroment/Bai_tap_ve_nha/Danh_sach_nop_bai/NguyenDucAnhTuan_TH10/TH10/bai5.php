<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 50%;
        }
    </style>
    <script type="text/javascript">
        function fnc() {
            var name = document.getElementById("inputName").value;
            var email = document.getElementById("inputEmail").value;
            var phone = document.getElementById("inputPhone").value;
            var message = document.getElementById("inputMessage").value;
            document.getElementById("showResult").innerHTML = ("Name: "+name+"<br/>Email: "+email
                                   +"<br/>Phone: "+phone+"<br/>Message: "+message);
            return false;
        }
    </script>
</head>
<body>
<div class="container">
    <form onsubmit="return fnc()">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="inputName">Name *</label>
                <input type="text" class="form-control" id="inputName" name="inputName" value="<?php echo "Nguyễn Đức Anh Tuấn"; ?>" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputEmail">Email *</label>
                <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo "tuan97.lh12@gmail.com"; ?>" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control" id="inputPhone" name="inputPhone" value="<?php echo "0338888888"; ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage">Message *</label>
            <textarea class="form-control" rows="5" id="inputMessage" name="inputMessage" readonly><?php echo "This is a message"; ?></textarea>
        </div>
        <button class="btn btn-warning" type="submit">Send message</button>
        <p>* These fields are required</p>
        <p style="color: #005cbf" id="showResult"></p>
    </form>
</div>
</body>
</html>