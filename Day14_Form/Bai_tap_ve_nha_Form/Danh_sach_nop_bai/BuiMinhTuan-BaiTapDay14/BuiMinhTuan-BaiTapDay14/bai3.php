<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .tbm{
            background-color: rgba(216,250,216,0.47);
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr class="tbm">
            <td>Enter e-mail address:</td>
            <td><input type="email" name="email"  value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" /></td>
        </tr>
        <tr class="tbm">
            <td>Enter password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr class="tbm">
            <td>Select academic level:</td>
            <td> <select id="inputState" name="select">
                    <option selected>--Freshman--</option>
                    <option name="1">Noob</option>
                    <option name="2">Pro</option
                </select></td>
        </tr>
        <tr class="tbm">
            <td>Identify coures taken:</td>
            <td><div class="form-check">
                    <input class="form-check-input" name="check[]" type="checkbox" value="1" id="defaultCheck1" checked>
                    <label class="form-check-label" for="defaultCheck1">
                        CSCI 1710
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="check[]" type="checkbox" value="2" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        CSCI 1800
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="check[]" type="checkbox" value="3" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        CSCI 2800
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="check[]" type="checkbox" value="4" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">
                        CSCI 2150
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="check[]" type="checkbox" value="5" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">
                        CSCI 2910
                    </label>
                </div>
            </td>
        </tr>
        <tr class="tbm">
            <td>Select concentration:</td>
            <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Computer Scrience (CS)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                    <label class="form-check-label" for="exampleRadios2">
                        Information Science (IS)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3" >
                    <label class="form-check-label" for="exampleRadios3">
                        Information Technology (IT)
                    </label>
                </div></td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="form-group">
                    <textarea placeholder="Enter any comments you have here." name="cmt" class="form-control" id="exampleFormControlTextarea1" rows="3"  value="<?php echo isset($_POST['add']) ? $_POST['add'] : '' ?>" /></textarea>
                </div></td>
        </tr>
        <tr class="tbm" style="text-align: center">
            <td colspan="2">
                <button type="submit" name="btnsubmit" class="btn btn-secondary mb-2">Submit Data</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
echo '<pre>';
//print_r($_POST);
if (isset($_POST['btnsubmit']))
{
    echo '<pre>';
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $msg = $_POST['cmt'];
    if (empty($email)) {
        echo '<p style="color: red;font-size: 28px">
        Username không được để trống</p>';
    }
    elseif (empty($password))
    {
        echo '<p style="color: red;font-size: 28px">
        Password không được để trống</p>';
    }
    else if (strlen($password) < 8) {
        echo '<p style="color: red;font-size: 28px">
        Password phải có tối thiểu 8 ký tự</p>';
    }
    else
    {
        echo "<h3><b style='color: aqua'>Đăng ký thành công !</b></h3>";
        echo "<h3><b style='color: aqua'>Thông tin của bạn:</b></h3>";

        echo "<h3><b>Username:" . $_POST['email'] . "</b></h3>";
        echo "<h3><b>Password:" . $_POST['pass'] . "</b></h3>";
        $select = $_POST['select'];
        if ($select == 1){
            echo "<h3><b>User Type: Noob </b></h3>";
        }
        else{
            echo "<h3><b>User Type: Pro </b></h3>";
        }
        $checkboxArr = $_POST['check'];
        foreach ($checkboxArr as $checkbox) {
            if ($checkbox == 1) {
                echo "<h3><b>Identify coures taken: CSCI 1710</b></h3>";
            }
            else if ($checkbox == 2) {
                echo "<h3><b>Identify coures taken: CSCI 1800</b></h3>";
            }
            else if ($checkbox == 3){
                echo "<h3><b>Identify coures taken: CSCI 2800</b></h3>";
            }
            else if ($checkbox == 4){
                echo "<h3><b>Identify coures taken: CSCI 2150</b></h3>";
            }
            else {
                echo "<h3><b>Identify coures taken: CSCI 2910</b></h3>";
            }
        }

        $gender = $_POST['exampleRadios'];
        if ($gender == 1)
        {
            echo "<h3><b>Select concentration: Computer Scrience (CS) </b></h3>";
        }
        elseif ($gender == 2)
        {
            echo "<h3><b>Select concentration: Information Science (IS) </b></h3>";
        }
        else {
            echo "<h3><b>Select concentration: Information Technology (IT) </b></h3>";
        }
        echo "<h3><b>Comments:" . $_POST['cmt'] . "</b></h3>";
    }

}


?>