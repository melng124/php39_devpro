<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/17/2019
 * Time: 5:09 PM
 */
?>
<table align="center">
    <form action="" method="post">
        <tr>
            <td colspan="2">
                <label><h2>Register</h2></label>
            </td>
        </tr>
        <tr>
            <td>
                <label>First Name</label>
            </td>
            <td>
                <input type="text" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname']:'' ?>"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['firstname'])){
                        echo "<p style='color: red'>First Name không được để trống</p>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Last Name</label>
            </td>
            <td>
                <input type="text" name="lastname" value="<?php  echo isset($_POST['lastname']) ? $_POST['lastname']:''?>"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['lastname'])){
                        echo "<p style='color: red'>Last name không được để trống</p>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>User Name</label>
            </td>
            <td>
                <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username']:''?>"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['username'])){
                        echo "<p style='color: red'>User name không được để trống</p>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email Address</label>
            </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:''?>"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['email'])){
                        echo "<p style='color: red'>Email không được để trống</p>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                <input type="password" name="password"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['password'])){
                        echo "<p style='color: red'>Password không được để trống</p>";
                    }
                }
                ?>
            </td>

        </tr>
        <tr>
            <td>
                <label>Confirm Password</label>
            </td>
            <td>
                <input type="password" name="pass"/>
                <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['pass'])){
                        echo "<p style='color: red'>Confirm Password không được để trống</p>";
                    }
                }
                ?>
            </td>

        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Save"/><br/>
                <?php
                    if(isset($_POST['submit'])){
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password= $_POST['password'];
                        $pass = $_POST['pass'];
                        if(empty($firstname)|| empty($lastname) ||empty($username)||empty($email)||empty($password)||empty($pass)){
                            echo '';
                        }else {
                            echo 'First name :' . $_POST['firstname'] . "<br/>";
                            echo 'Last name :' . $_POST['lastname'] . "<br/>";
                            echo 'User name :' . $_POST['username'] . "<br/>";
                            echo 'Email address :' . $_POST['email'] . "<br/>";
                            echo 'Password :' . $_POST['password'] . "<br/>";
                            echo 'Confirm Password :' . $_POST['pass'] . "<br/>";
                        }


                    }
                ?>

            </td>

        </tr>

    </form>
</table>
