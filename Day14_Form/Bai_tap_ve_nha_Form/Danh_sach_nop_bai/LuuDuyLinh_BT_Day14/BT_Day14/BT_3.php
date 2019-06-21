<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style type="text/css">
    .a {

        text-align: right;

    }

    .b {

    }
</style>
<form action="#" method="post">
    <table align="center" cellpadding="5px" cellspacing="0px">

        <tr class="b">
            <td class="a">Enter your e-mail address</td>
            <td><input type="email" name="Username" value="<?php echo isset($_POST['Username'])?$_POST['Username'] : '' ?>" placeholder=""></td>
        </tr>
        <tr class="b">
            <td class="a">Enter Password</td>
            <td><input type="password" name="Password" value="<?php echo isset($_POST['Password'])?$_POST['Password'] : '' ?>" placeholder=""></td>
        </tr>
        <tr class="b">
            <td class="a">Select academic level</td>
            <td><select name="type">
                    <option <?php echo (isset($_POST['type'])&&$_POST['type']==1)?'selected="selected"':""?> value="1">Freshman</option>
                    <option <?php echo (isset($_POST['type'])&&$_POST['type']==2)?'selected="selected"':""?> value="2">Freshwoman</option>
                </select></td>
        </tr>

        <tr class="b">
            <td class="a">Indentify coures taken</td>
            <td>
                <input <?php echo (isset($_POST['check'])&&in_array(1,$_POST['check']))?'checked="checked"':""?> type="checkbox" name="check[]" value="1">CSCI 1701<br/>
                <input <?php echo (isset($_POST['check'])&&in_array(2,$_POST['check']))?'checked="checked"':""?> type="checkbox" name="check[]" value="2">CSCI 1800<br/>
                <input <?php echo (isset($_POST['check'])&&in_array(3,$_POST['check']))?'checked="checked"':""?> type="checkbox" name="check[]" value="3">CSCI 2800<br/>
                <input <?php echo (isset($_POST['check'])&&in_array(4,$_POST['check']))?'checked="checked"':""?> type="checkbox" name="check[]" value="4">CSCI 2510<br/>
                <input <?php echo (isset($_POST['check'])&&in_array(5,$_POST['check']))?'checked="checked"':""?> type="checkbox" name="check[]" value="5">CSCI 2910
            </td>
        </tr>
        <tr class="b">
            <td class="a">Select concentration</td>
            <td>
                <input type="radio" <?php echo (isset($_POST['select'])&&$_POST['select']==1)?'checked="checked"':""?> name="select" value="1">Computer Science(CS)<br/>
                <input type="radio" <?php echo (isset($_POST['select'])&&$_POST['select']==2)?'checked="checked"':""?> name="select" value="2">Information Science(IS)<br/>
                <input type="radio" <?php echo (isset($_POST['select'])&&$_POST['select']==3)?'checked="checked"':""?> name="select" value="3">Information Technology<br/>

            </td>
        </tr>
        <tr class="b">
            <td align="center" colspan="2">
                <textarea style="resize: none" cols="50" rows="4" name="add"
                          placeholder="Enter your comment you have here"></textarea>

            </td>
        </tr>
        <tr class="b">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit data"></td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['Username'];
    $pass = $_POST['Password'];
    $type = $_POST['type'];
    $coure = $_POST['check'];
    $select = $_POST['select'];
    $comment = $_POST['add'];
    $string = '';
    //-Không được để trống
    if (empty($email) == false && empty($pass) == false && empty($comment) == false) {
        //nếu select là Freshman
        if ($type == 1) {
            foreach ($coure as $value) {
                if ($value == 1) {
                    $string .= " CSCI 1701, ";
                } elseif ($value == 2) {
                    $string .= " CSCI 1800, ";
                } elseif ($value == 3) {
                    $string .= " CSCI 2800, ";
                } else if ($value == 4) {
                    $string .= " CSCI 2510, ";
                } else {
                    $string .= " CSCI 2910, ";
                }
            }//
            if ($select == 1) {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshMan <br/>
                              Indentifi:$string <br/>
                              Select   :Computer Science(CS) <br/>
                              Comment  :$comment";
            } elseif ($select == 2) {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshMan <br/>
                              Indentifi:$string <br/>
                              Select   :Information Science(IS) <br/>
                              Comment  :$comment";
            } else {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshMan <br/>
                              Indentifi:$string <br/>
                              Select   :Information Technology(IT) <br/>
                              Comment  :$comment";
            }
        } elseif ($type == 2) {
            foreach ($coure as $value) {
                if ($value == 1) {
                    $string .= " CSCI 1701 ";
                } elseif ($value == 2) {
                    $string .= " CSCI 1800 ";
                } elseif ($value == 3) {
                    $string .= " CSCI 2800 ";
                } else if ($value == 4) {
                    $string .= " CSCI 2510 ";
                } else {
                    $string .= " CSCI 2910 ";
                }
            }
            if ($select == 2) {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshWoMan <br/>
                              Indentifi:$string <br/>
                              Select   :Computer Science(CS) <br/>
                              Comment  :$comment";
            } elseif ($select == 2) {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshWoMan  <br/>
                              Indentifi:$string <br/>
                              Select   :Information Science(IS) <br/>
                              Comment  :$comment";
            } else {
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                              UserName : $email <br/>
                              Password :$pass <br/>
                              Type     : FreshWoMan  <br/>
                              Indentifi:$string <br/>
                              Select   :Information Technology(IT) <br/>
                              Comment  :$comment";
            }
        }

    }
    elseif (empty($email)){
        echo "<p style='color: red' >Không đc để trống UserName</p>";
    }
    elseif (empty($pass)){
        echo "<p style='color: red' >Không đc để trống Password</p>";
    }
    elseif (strlen($pass)<8){
        echo "<p style='color: red' >Pass dài tối thiểu 8 kí tự</p>";
    }
    else{
        echo "<p style='color: red' >Không đc để trống Comment</p>";
    }
}
?>
</body>
</html>