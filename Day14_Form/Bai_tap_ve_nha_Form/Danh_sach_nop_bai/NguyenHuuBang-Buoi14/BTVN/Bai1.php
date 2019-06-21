<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/16/2019
 * Time: 8:31 PM
 */
?>

<table align="center">
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td colspan="2">
                <h2>Tutorial Point Absolute classes registration </h2>
            </td>
        </tr>
        <tr>
            <td>
                <label>Name :</label>
            </td>
            <td>
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/><br/>
            </td>
        </tr>
        <tr>
            <td>
                <label>E-mail :</label>
            </td>
            <td>
                <input type="email" name="email"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Specific Time :</label>
            </td>
            <td>
                <input type="text" name="Time" value="<?php echo isset($_POST['Time']) ? $_POST['Time'] : '' ?>"/><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">

                <label>Class details :</label><br/>
                <textarea rows="4" cols="45" name="class"></textarea><br/></td>

        </tr>
        <tr>
            <td colspan="2">
                <label>Gender :</label>
                <input type="radio" name="gender" value="1"/>Female
                <input type="radio" name="gender" value="2"/>Male<br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit_form" value="submit_form"/><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Your Given details are as:</h2>
                <?php
                if (isset($_POST['submit_form'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $time = $_POST['Time'];
                    $class = $_POST['class'];
                    $gender = $_POST['gender'];
                    if (empty($name) || empty($email) || empty($time) || empty($class)) {
                        echo "<p style='color: red'> Không được để trống dữ liệu</p>";
                    } else {
                        echo 'Name : ' . $_POST['name'] . "<br/>";
                        echo 'Email : ' . $_POST['email'] . "<br/>";
                        echo 'Specific Time :' . $_POST['Time'] . "<br/>";
                        echo 'Class details  : ' . $_POST['class'] . "<br/>";
                        if ($gender == 1) {
                            echo 'Gender : Female ';
                        } else {
                            echo 'Gender : Male';
                        }

                    }
                }else{
                    echo 'Bạn chưa submit form';
                }
                ?>
            </td>

        </tr>


    </form>

</table>

