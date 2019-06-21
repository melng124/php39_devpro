<form action="" method="get">
    <table>
        <tr>
            <td colspan="2"><h2>Tutorial Point Absolute classes registration</h2></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="txtName" value="<?php echo isset($_GET['txtName'])? $_GET['txtName'] : '';?>"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="txtEmail" value="<?php echo isset($_GET['txtEmail'])? $_GET['txtEmail'] : '';?>"/></td>
        </tr>
        <tr>
            <td>Specific Time:</td>
            <td><input type="time" name="dtTime" value="<?php echo isset($_GET['dtTime'])? $_GET['dtTime'] : '';?>"/></td>
        </tr>
        <tr>
            <td>Class details:</td>
            <td>
                <textarea cols="40" rows="5" name="txtClass"><?php echo isset($_GET['txtClass'])? $_GET['txtClass'] : '';?></textarea>
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="rdGender" value="0" <?php if(isset($_GET['rdGender']) && $_GET['rdGender'] == 0):?> checked <?php endif;?>/>Female
                <input type="radio" name="rdGender" value="1" <?php if(isset($_GET['rdGender']) && $_GET['rdGender'] == 1):?> checked <?php endif;?>/>Male
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnSubmit" value="Submit"/>
            </td>
        </tr>
    </table>
</form>
<?php
if(isset($_GET['btnSubmit'])){
    $name = $_GET['txtName'];
    $email = $_GET['txtEmail'];
    $time = $_GET['dtTime'];
    $class = $_GET['txtClass'];
    if(isset($_GET['rdGender'])){
        $gender = $_GET['rdGender'];
    }
    else{
        $gender = "";
    }
    if(empty($name)){
        echo "<p style='color: red'>Name không được để trống</p>";
    }
    elseif(empty($email)){
        echo "<p style='color: red'>Email không được để trống</p>";
    }
    elseif(empty($time)){
        echo "<p style='color: red'>Specific Time không được để trống</p>";
    }
    elseif(empty($class)){
        echo "<p style='color: red'>Class details không được để trống</p>";
    }
    elseif($gender == ""){
        echo "<p style='color: red'>Giới tính không được để trống</p>";
    }
    else{
        echo "<b>Your Given details are as:</b><br/>";
        echo "<b>Name: " .$name. "</b><br/>";
        echo "<b>Email: " .$email. "</b><br/>";
        echo "<b>Specific time: " .$time. "</b><br/>";
        echo "<b>Class details: " .$class. "</b><br/>";
        echo "<b>Gender: " .($gender == 0 ? 'Female' : 'Male')."</b><br/>";
    }
}
?>