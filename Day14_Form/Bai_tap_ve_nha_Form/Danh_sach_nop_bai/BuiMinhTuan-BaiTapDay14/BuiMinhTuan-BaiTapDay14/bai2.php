<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .hdft{
            background-color: #7dbbdc;
            text-align: center;
        }
        .tbm{
            background-color: #a1e5e8;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr class="hdft">
            <td colspan="2"><h3>Registration Form</h3></td>
        </tr>
        <tr class="tbm">
            <td>Username</td>
            <td><input type="text" name="name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" /></td>
        </tr>
        <tr class="tbm">
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr class="tbm">
            <td>User Type</td>
            <td> <select id="inputState" name="select">
                    <option selected>--Select--</option>
                    <option name="1">Option 1</option>
                    <option name="2">Option 2</option
                </select></td>
        </tr>
        <tr class="tbm">
            <td>Dissplay Name</td>
            <td><input type="text" name="display"  value="<?php echo isset($_POST['display']) ? $_POST['display'] : '' ?>" /></td>
        </tr>
        <tr class="tbm">
            <td ><p>Address</p></td>
            <td>
                <div class="form-group">
                    <textarea name="add" class="form-control" id="exampleFormControlTextarea1" rows="3"  value="<?php echo isset($_POST['add']) ? $_POST['add'] : '' ?>" /></textarea>
                </div></td>
        </tr>
        <tr class="tbm">
            <td>Email</td>
            <td><input type="email" name="email"  value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" /></td>
        </tr>
        <tr class="tbm">
            <td>Gender:</td>
            <td><div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" checked>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div></td>
        </tr>
        <tr class="tbm">
            <td></td>
            <td><input type="checkbox" name="check" value="1">I accept Tems and Conditions</td>
        </tr>
        <tr class="hdft">
            <td colspan="2">
                <button type="submit" name="btnsubmit" class="btn btn-secondary mb-2">Submit</button>
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
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $display = $_POST['display'];
    $add = $_POST['add'];
    if (empty($name) || empty($email) || empty($password) || empty($display) || empty($add)) {
        echo '<p style="color: red;font-size: 28px">
        không được để trống</p>';
    }
    else if (strlen($display) > 24) {
        echo '<p style="color: red;font-size: 28px">
        Dissplay name không được quá 24 ký tự 24</p>';
    }
    else
    {

        echo "<h3><b>Username:" . $_POST['name'] . "</b></h3>";
        echo "<h3><b>Password:" . $_POST['pass'] . "</b></h3>";
        $select = $_POST['select'];
        if ($select == 1){
            echo "<h3><b>User Type: Option 1 </b></h3>";
        }
        else{
            echo "<h3><b>User Type: Option 2 </b></h3>";
        }
        echo "<h3><b>Dissplay name:" . $_POST['display'] . "</b></h3>";
        echo "<h3><b>Address:" . $_POST['add'] . "</b></h3>";
        echo "<h3><b>Email:" . $_POST['email'] . "</b></h3>";
        $gender = $_POST['gender'];
        if ($gender == 1)
        {
            echo "<h3><b>Gender: Male </b></h3>";
        }
        else{
            echo "<h3><b>Gender: Female </b></h3>";
        }
        if(isset($_POST['check'])&&$_POST['check']==1)
            echo "<h3><b style='color: green'> Đã Accept</b></h3>";
        else{
            echo "<h3><b style='color: red'>Chưa Accept </b></h3>";
        }
    }

}


?>