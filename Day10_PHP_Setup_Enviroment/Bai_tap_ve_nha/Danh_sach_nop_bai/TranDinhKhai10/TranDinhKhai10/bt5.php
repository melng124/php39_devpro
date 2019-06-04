<?php

$name = 'Trần Đình Khải';
$email = 'khaideptrai@gmail.com';
$phone = '099999999999';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bt5.css">
    <title>Document</title>

</head>
<body>
    <form class="needs-validation" novalidate>
        <div class="container form1">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" name="name" required>
                    <div class="invalid-tooltip">
                        Please provide a valid name.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="email">Email *</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $email; ?>" name="email" required>
                    <div class="invalid-tooltip">
                        Please provide a valid email.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Phone *</label>
                    <input type="text" class="form-control" id="phone" value="<?php echo $phone; ?>" name="phone" required>
                    <div class="invalid-tooltip">
                        Please provide a valid phone.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="massage">Massage *</label>
                <textarea class="form-control" id="massage" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-warning" id="bt1">Send Massage</button>
            <p>* These fields are required</p>
            <div id="show"></div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $('#bt1').click(function() {
                $('#show').text(function() {
                    return a= " Name:" + $('#name').val() +"\n  Email : " + $('#email').val() + "\r\n Phone : " + $('#phone').val() + "\r\n Massaage : " + $('#massage').val();
                
                });
            });
        });
    </script>
</body>

</html>