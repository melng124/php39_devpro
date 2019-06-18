<?php
?>
<style type="text/css">
    form {
        width: 500px;
        margin-right: auto;
        margin-left: auto;
    }

    input {
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>
<form action="" method="post">
    <h2>Tutorials Point Absolute classes registration</h2>
    Name: <input style="margin-left: 55px" type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br/>
    Email: <input style="margin-left: 55px" type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br/>
    Specific time: <input style="margin-left: 8px" type="text" name="time" value="<?php echo isset($_POST['time']) ? $_POST['time'] : '' ?>"><br/>
    <div style="display: flex"><span style="align-self: center">Class details:</span>
        <textarea style="margin-left: 17px" name="details" cols="30" rows="5"></textarea></div>
    <br/>
    Gender: <input style="margin-left: 46px" type="radio" name="radio1" value="1">Female
    <input type="radio" name="radio1" value="2">Male<br/>
    <input type="submit" name="submit_form" value="Submit"><br/>
    <h2>Your Given details are as:</h2>
    <?php
    if (isset($_POST['submit_form'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $time = $_POST['time'];
        $details = $_POST['details'];
        if (empty($name)||empty($email)||empty($time)||empty($details)){
            echo "<b style='color: red'>bạn không được để trống dữ liệu</b>";
        }else{
            $gender = $_POST['radio1'];

            if ($gender == 2) {
                $radio= 'Male';
            }
            else {
                $radio= 'Female';
            }
            echo "<b> Name: ".$name ."</b>";echo'<br/>';
            echo "<b> Email: ".$email ."</b>";echo'<br/>';
            echo "<b>Specific Time: ".$time ."</b>";echo'<br/>';
            echo "<b>Class details: ".$details ."</b>";echo'<br/>';
            echo "<b> Gender: ".$radio ."</b>";echo'<br/>';
        }
    }
    ?>
</form>


