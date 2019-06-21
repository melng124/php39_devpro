<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <div class="formb7">
                    <form action="" method="POST">
                        <input type="text" name="name" class="form-control ipb7" id="nameb7" placeholder="Your name">
                        <input type="email" name="email" class="form-control ipb7" id="emailb7" placeholder="Your Email Address">
                        <input type="text" name="phone" class="form-control ipb7" id="phoneb7" placeholder="Your Phone Number">
                        <input type="text" name="web" class="form-control ipb7" id="webb7" placeholder="Your Web Site">
                        <input type="text" name="masage" class="form-control ipb7" id="masage" placeholder="Your Massage">
                        <button type="submit" name="submit" class="btn btn-danger b1b7">SUBMIT</button>
                    </form>
                    <?php
                    function xacthucurl($url){

                    }

                    if (isset($_POST["submit"])) {
                        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['web']) || empty($_POST['masage']))
                            echo "<i class='red'>Không được để trống tất  cả các trường</i>";
                        elseif (is_numeric($_POST['phone']) == false) echo "<i class='red'>Phone cần nhập giá trị số</i>";
                        elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["web"])) {
                            echo "<i class='red'> Trường URL định dạng chưa đúng</i>";
                        } 
                        else {
                            echo "<p class='blue'> Send Contact thành công !!</p>";
                            echo "<p class='blue'> Thông tin của bạn :</p>";
                            echo "<b> ";
                            echo 'Your Name : ' . $_POST['name'] . "<br/>";
                            echo 'Your Email : ' . $_POST['email'] . "<br/>";
                            echo 'Your Phone : ' . $_POST['phone'] . "<br/>";
                            echo 'Your Web url  : ' . $_POST['web'] . "<br/>";
                            echo 'Your Massage : ' . $_POST['masage'] . "<br/>";
                            
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>