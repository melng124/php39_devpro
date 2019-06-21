<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/17/2019
 * Time: 3:34 PM
 */
?>
<table align="center" bgcolor="#7fffd4">
    <form action="" method="post">
        <tr>
            <td>
                <label>Enter e-mail address</label>
            </td>
            <td>
                <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Enter password</label>
            </td>
            <td>
                <input type="password" name="password"
                       value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Select academic lever</label>
            </td>
            <td>
                <select name="select">
                    <option value="1">Freshman</option>
                    <option value="2">Freshman1</option>
                    <option value="3">Freshman2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Identify courses taken</label>
            </td>
            <td>
                <input type="checkbox" name="checkbox[]" value="1"> CSCI 1710<br/>
                <input type="checkbox" name="checkbox[]" value="2"> CSCI 1800<br/>
                <input type="checkbox" name="checkbox[]" value="3"> CSCI 2800<br/>
                <input type="checkbox" name="checkbox[]" value="4"> CSCI 2150<br/>
                <input type="checkbox" name="checkbox[]" value="5"> CSCI 2910<br/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Select concentration</label>
            </td>
            <td>
                <input type="radio" name="radio">Computer Science (CS) <br/>
                <input type="radio" name="radio">Information Science (CS) <br/>
                <input type="radio" name="radio">Computer Technology (CS) <br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea cols="47" rows="6" name="textarea"></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="submit-form" value="Submit Data"/><br/>
                <?php
                if (isset($_POST['submit-form'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $select = $_POST['select'];
                    $checkboxarr = $_POST['checkbox'];
                    $radio = $_POST['radio'];
                    $note = $_POST['textarea'];
                    if(empty($email) || empty($password)||empty($note)){
                        echo '<p style="color: red">Không được để trống dữ liệu</p>';
                    }elseif(strlen($password)>8){
                        echo "<p style='color: red'>Password no more than 8</p>";
                    }else{
                        echo "<p style='color: blue'> Đăng kí thành công !</p>";
                        echo "<p style='color: blue'> Thông tin của bạn</p>";
                        echo "<p>User name : $email</p>";
                        echo "<p>Password : $password</p>";
                        if($select==1){
                            echo "Select academic lever : Freshman";
                        }elseif ($select==2){
                            echo "Select academic lever : Freshman1";
                        }else{
                            echo "Select academic lever : Freshman2";
                        }
                        echo "<br/>";
                        echo "Identify courses taken : ";
                        foreach ($checkboxarr as $checkbox){
                                if($checkbox==1){
                                    echo " CSCI 1710   ";
                                }elseif ($checkbox==2){
                                    echo " CSCI 1800   ";
                                }elseif($checkbox==3){
                                    echo "CSCI 2800   ";
                                }elseif ($checkbox==4){
                                    echo " CSCI 2150   ";
                                }else{
                                    echo " CSCI 2910   ";
                                }
                        }
                        echo "<br/>";
                        if($radio==1){
                            echo "Select concentration : Computer Science (CS)";
                        }elseif ($radio==2){
                            echo "Select concentration : Information Science (CS)";
                        }else{
                            echo "Select concentration : Computer Technology (CS)";
                        }
                        echo "<br/>";
                        echo "<p>Comments : $note</p>";


                    }
                }
                ?>
            </td>
        </tr>
    </form>
</table>
