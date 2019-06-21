<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td colspan="2"><h2>Tutorials Piont Absolute classes registration</h2></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" /></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="email" name="email"  value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" /></td>
    </tr>
    <tr>
        <td>Specific Time</td>
        <td><input type="text" name="Specific"  value="<?php echo isset($_POST['Specific']) ? $_POST['Specific'] : '' ?>" /></td>
    </tr>
    <tr>
        <td ><p>Class detail:</p></td>
        <td>
            <div class="form-group">
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"  value="<?php echo isset($_POST['detail']) ? $_POST['detail'] : '' ?>" /></textarea>
            </div></td>
    </tr>
    <tr>
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
    <tr>
        <td colspan="2">
            <button type="submit" name="btnsubmit" class="btn btn-secondary mb-2">Submit</button>
        </td>
    </tr>
    <tr>
        <td colspan="2"><h2>Your Given details are as:</h2><br>
            <p class="resuitl" style="color: green"></p>
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
    $email = $_POST['email'];
    $specifi = $_POST['Specific'];
    $detail = $_POST['detail'];
    if (empty($name) || empty($email) || empty($specifi) || empty($detail)) {
        echo '<p style="color: red;font-size: 28px">
        không được để trống</p>';
    }
    else{
        echo "<h3><b>Name:" . $_POST['name'] . "</b></h3>";
        echo "<h3><b>E-mail:" . $_POST['email'] . "</b></h3>";
        echo "<h3><b>Specific Time:" . $_POST['Specific'] . "</b></h3>";
        echo "<h3><b>Class detail:" . $_POST['detail'] . "</b></h3>";
        $gender = $_POST['gender'];
        if ($gender == 1)
        {
            echo "<h3><b>Gender: Male </b></h3>";
        }
        else{
            echo "<h3><b>Gender: Female </b></h3>";
        }
    }
}

?>
