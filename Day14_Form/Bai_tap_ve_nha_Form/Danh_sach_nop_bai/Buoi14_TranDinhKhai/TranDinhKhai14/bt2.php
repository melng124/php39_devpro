<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        
        <table border="1">
            <form action="" method="POST">
                <tr>
                    <td class="white head" colspan="3"><h5> Registration Form</h5></td>
                </tr>
                <tr>
                    <td class="white td1"> Uername</td>
                    <td colspan="2" class="td2">
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td class="white td1"> Password</td>
                    <td colspan="2" class="td2">
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td class="white td1"> User Type</td>
                    <td colspan="2" class="td2">
                        <select name="type" id="select">
                            <option value="1">Select1</option>
                            <option value="2">Select2</option>
                            <option value="3">Select3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="white td1">Display Name</td>
                    <td colspan="2" class="td2">
                        <input type="text" name="display">
                    </td>
                </tr>
                <tr>
                    <td  class="white td1">Address</td>
                    <td class="td2">
                        <textarea name="address" id="details" cols="23" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="white td1" > Email</td>
                    <td colspan="2" class="td2">
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td  class="white td1"> Gender</td>
                    <td   colspan="2" class="td2">
                        <input type="radio" name="gender" value="1"><span>Female</span>
                        <input  type="radio" name="gender" value="2"><span>Male</span>
                    </td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td  colspan="2" class="td2">
                        <input type="checkbox" name="checkbox"> <span>I Accept Terma and</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="td3">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </form>
        </table>

        <?php
        if (isset($_POST["submit"])) {
            if (empty($_POST["username"])||empty($_POST["pass"])||empty($_POST["type"])||empty($_POST["display"])||empty($_POST["address"])||empty($_POST["email"])||empty($_POST["gender"])||empty($_POST["checkbox"])) {
                echo "Bạn phải điền đầy đủ thông tin tất cacr các trường, không đc để trống ";
            
            }
            elseif(strlen($_POST["display"])>24) echo "Trường Display Name không được vượt quá 24 kí tự";
            else {
                echo "<b> Your Given details are as : <br/>";
                echo 'Username : ' . $_POST["username"] . "<br/>";
                echo 'Password : ' . $_POST["pass"] . "<br/>";
                $type = $_POST['type'];
                    if ($type == 1) {
                        echo 'User type : Select1';
                    } else {
                        echo 'User type : Select2';
                    }
                echo "<br/>";
                echo 'Display name : ' . $_POST["display"] . "<br/>";
                echo 'Address : ' . $_POST["address"] . "<br/>";
                echo 'Email : ' . $_POST["email"] . "<br/>";
                if (isset($_POST["gender"])) {
                    $gender = $_POST['gender'];
                    if ($gender == 1) {
                        echo 'Gender : Female';
                    } else {
                        echo 'Gender : Male';
                    }
                }
                
                echo "</b>";
            }
        }

        ?>
    </div>
</body>

</html>