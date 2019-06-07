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
    <form class="needs-validation" action="tinhdiem.php" method="POST">
        <div class="container form1">

            <div class="form-group">
                <label for="massage">HK1 *</label>
                <input class="form-control" id="massage" name="hk1" type="text">
            </div>
            <div class="form-group">
                <label for="massage">HK2 *</label>
                <input class="form-control" id="massage1" name="hk2" type="text">
            </div>
            <?php


            $hk1 = (float)$_POST['hk1'];
            $hk2 = (float)$_POST['hk2'];
            $tb = ($hk1 + $hk2 * 2) / 3;
            $xeploai = "";
            if ($tb > 8.0) {
                $xeploai = "Giỏi";
            }

            ?>
            <div class="form-group">
                <label for="massage">TB *</label>
                <input class="form-control" id="massage2" name="tb" type="text" value="<?php echo $tb; ?>">
            </div>
            <div class="form-group">
                <label for="massage">Học lực *</label>
                <input class="form-control" id="massage3" name="xeploai" type="text" value="<?php echo $xeploai; ?>">
            </div>
            <div class="form-group">
                <label for="massage">Lồn *</label>
                <input class="form-control" id="massage4" name="lon" type="text">
            </div>

            <button type="button" class="btn btn-warning" id="bt1">Send Massage</button>
            <p>* These fields are required</p>
            <div id="show"></div>

    </form>
    <script>
        $(document).ready(function() {
            $('#bt1').click(function() {
                $('#show').text(function() {
                    return a = " Name:" + $('#name').val() + "\n  Email : " + $('#email').val() + "\r\n Phone : " + $('#phone').val() + "\r\n Massaage : " + $('#massage').val();

                });
            });
        });
    </script>
</body>

</html>