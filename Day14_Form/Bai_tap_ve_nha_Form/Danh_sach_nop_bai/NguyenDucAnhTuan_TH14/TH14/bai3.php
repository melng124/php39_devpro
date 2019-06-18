<!DOCTYPE>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>bai 3</title>
    <style type="text/css">
        table{
            background-color: lightblue;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <table align="center">
        <tr>
            <td>Enter e-mail address:</td>
            <td>
                <input type="email" name="txtEmail" value="<?php echo isset($_POST['txtEmail'])? $_POST['txtEmail'] : '';?>"/>
            </td>
        </tr>
        <tr>
            <td>Enter password:</td>
            <td>
                <input type="password" name="txtPass" value="<?php echo isset($_POST['txtPass'])? $_POST['txtPass'] : '';?>"/>
            </td>
        </tr>
        <tr>
            <td>Select academic level:</td>
            <td>
                <select name="select">
                    <option value="">----Select----</option>
                    <option value="1" <?php if(isset($_POST['select']) && $_POST['select'] == 1):?>selected<?php endif; ?>>Freshman</option>
                    <option value="2" <?php if(isset($_POST['select']) && $_POST['select'] == 2):?>selected<?php endif; ?>>Senior</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Identify courses taken:</td>
            <td>
                <input type="checkbox" name="checkbox[]" value = "1"/>CSCI 1710<br/>
                <input type="checkbox" name="checkbox[]" value = "2"/>CSCI 1800<br/>
                <input type="checkbox" name="checkbox[]" value = "3"/>CSCI 2800<br/>
                <input type="checkbox" name="checkbox[]" value = "4"/>CSCI 2150<br/>
                <input type="checkbox" name="checkbox[]" value = "5"/>CSCI 2910
            </td>
        </tr>
        <tr>
            <td>Select concentration:</td>
            <td>
                <input type="radio" name="rd" value = "0" <?php if(isset($_POST['rd']) && $_POST['rd'] == 0):?> checked <?php endif;?>/>Computer Science(CS)<br/>
                <input type="radio" name="rd" value = "1" <?php if(isset($_POST['rd']) && $_POST['rd'] == 1):?> checked <?php endif;?>/>Information Science(IS)<br/>
                <input type="radio" name="rd" value = "2" <?php if(isset($_POST['rd']) && $_POST['rd'] == 2):?> checked <?php endif;?>/>Information Technology(IT)<br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea name="txtCmt" cols="45" rows="5"><?php echo isset($_POST['txtCmt'])? $_POST['txtCmt'] : 'Enter any coments you have here.';?></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="btnSubmit" value="Submit Data"/></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['btnSubmit'])){
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPass'];
    if(isset($_POST['select'])){
        $select = $_POST['select'];
    }else{
        $select = "";
    }
    if(isset($_POST['checkbox'])){
        $checkArr = $_POST['checkbox'];
    }else{
        $checkArr = "";
    }
    if(isset($_POST['rd'])){
        $radio = $_POST['rd'];
    }else{
        $radio = "";
    }
    $comment = $_POST['txtCmt'];
    if(empty($email)){
        echo "<p style='color: red'>Email không được để trống</p>";
    }
    elseif(empty($pass)){
        echo "<p style='color: red'>Password không được để trống</p>";
    }
    elseif(strlen($pass) < 8){
        echo "<p style='color: red'>Password phải có độ dài tối thiểu 8 ký tự</p>";
    }
    elseif($select == ""){
        echo "<p style='color: red'>Select academic không được để trống</p>";
    }
    elseif($checkArr == ""){
        echo "<p style='color: red'>Indentify courses taken không được để trống</p>";
    }
    elseif($radio == ""){
        echo "<p style='color: red'>Select concentration không được để trống</p>";
    }
    elseif(empty($comment) || $comment =='Enter any coments you have here.'){
        echo "<p style='color: red'>Comment không được để trống</p>";
    }
    else{
        echo "<span style='color: deepskyblue'>Đăng ký thành công!</span><br/>";
        echo "<span style='color: deepskyblue'>Thông tin của bạn:</span><br/>";
        echo "<b>Username: " .$email. "</b><br/>";
        echo "<b>Password: " .$pass. "</b><br/>";
        echo "<b>Select academic level: " .($select == 1 ? 'Freshman' : 'Senior'). "</b><br/>";
        echo "<b>Indentify courses taken: </b><br/>";
        foreach ($checkArr as $checkbox){
            if($checkbox == 1){
                echo "<b>CSCI 1710</b><br/>";
            }
            elseif($checkbox == 2){
                echo "<b>CSCI 1800</b><br/>";
            }
            elseif($checkbox == 3){
                echo "<b>CSCI 2800</b><br/>";
            }
            elseif($checkbox == 4){
                echo "<b>CSCI 2150</b><br/>";
            }
            else{
                echo "<b>CSCI 2910</b><br/>";
            }
        }
        if($radio == 0){
            echo "<b>Select concentration: Computer Science(CS)</b><br/>";
        }
        elseif ($radio == 1){
            echo "<b>Select concentration: Information Science(IS)</b><br/>";
        }
        else{
            echo "<b>Select concentration: Information Technology(IT)</b><br/>";
        }
        echo "<b>Comment: " .$comment. "</b><br/>";
    }
}
?>
</body>
</html>