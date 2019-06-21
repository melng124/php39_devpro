<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/16/2019
 * Time: 9:21 PM
 */
?>
<table border="1px" align="center" style="background: aqua" width="400px">
    <form action="" method="post">
        <tr>
            <td style="background: darkturquoise" colspan="2">
                    <h2 align="center">Registration Form</h2>
            </td>
        </tr>
        <tr>
            <td>
                <label>User Name</label>
            </td>
            <td>
                <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username']:'' ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                <input type="password" name="password"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>User type</label>
            </td>
            <td>
                <select name="select">
                    <option value="1">Select</option><br/>
                    <option value="2">Object</option><br/>
                    <option value="3">Number</option><br/>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Display Name</label>
            </td>
            <td>
                <input type="text" name="display"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>
                <textarea rows="4" cols="40" name="address"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:''?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Gender</label>
            </td>
            <td>
                <input type="radio" name="gender" value="1"/>Male
                <input type="radio" name="gender" value="2"/>Female
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" name="check"/>I accept Terms and Condition
            </td>
        </tr>
        <tr style="background :darkturquoise ">
            <td colspan="2" align="center">
                <input type="submit" name="submitform" value="Submit"><br/>
                <?php
                if($_POST['check']==true) {
                    if (isset($_POST['submitform'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $type = $_POST['select'];
                        $display = $_POST['display'];
                        $address = $_POST['address'];
                        $email = $_POST['email'];
                        $gender = $_POST['gender'];

                        if (empty($username) || empty($password) || empty($address) || empty($email) || empty($gender)) {
                            echo "<p style='color: red;'>Không được để trống dữ liệu</p>";
                        } elseif(strlen($display)>24){
                            echo "<p style='color: red'>Display name no more than 24</p>";
                        }else {
                            echo 'Name : ' . $_POST['username'] . "<br/>";
                            echo 'Password : ' . $_POST['password'] . "<br/>";
                            if ($type == 1) {
                                echo 'User type :Select ';
                            } elseif ($type == 2) {
                                echo 'User type :Object ';
                            } else {
                                echo 'User type :Number ';
                            }
                            echo "<br/>";
                            echo 'Display Name : ' . $_POST['display'] . "<br/>";
                            echo 'Address : ' . $_POST['address'] . "<br/>";
                            echo 'Email : ' . $_POST['email'] . "<br/>";
                            if ($gender == 1) {
                                echo 'Gender : Male';
                            } else {
                                echo 'Gender : Female';
                            }
                        }

                    }
                }else{
                    echo "<p style='color: red'>Bạn chưa xác nhận </p>";
                }

                ?>
            </td>
        </tr>

    </form>
</table>

