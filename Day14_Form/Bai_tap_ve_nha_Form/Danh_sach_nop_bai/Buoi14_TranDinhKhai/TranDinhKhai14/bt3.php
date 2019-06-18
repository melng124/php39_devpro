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

        <table class="tableb3">
            <form action="" method="POST">
                <tr>
                    <td class="td1b3"> Enter e-mail address:</td>
                    <td class="td2b3">
                        <input class="ip1" type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td class="td1b3"> Enter password:</td>
                    <td class="td2b3">
                        <input class="ip1" type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td class="td1b3"> Select academic lebel:</td>
                    <td class="td2b3">
                        <select name="type" id="select">
                            <option value="1">Freehman</option>
                            <option value="2">Fuck</option>
                            <option value="3">FUuu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="td1b3">Identify courses taken:</td>
                    <td class="td2b3">
                        <input type="checkbox" name="checkbox" value="1"> CSCI 1710 <br />
                        <input type="checkbox" name="checkbox" value="2"> CSCI 1800 <br />
                        <input type="checkbox" name="checkbox" value="3"> CSCI 2800 <br />
                        <input type="checkbox" name="checkbox" value="4"> CSCI 2150 <br />
                        <input type="checkbox" name="checkbox" value="5"> CSCI 2910 <br />
                    </td>
                </tr>
                <tr>
                    <td class="td1b3"> Gender:</td>
                    <td class="td2b3">
                        <input type="radio" name="gender" value="1"> Computer Science (CS)<br />
                        <input type="radio" name="gender" value="2"> Information Science (IS)<br />
                        <input type="radio" name="gender" value="3"> Information Technology (IS)
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="area">
                        <textarea name="area" id="area" cols="50" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <td class="td3b3" colspan="2">
                        <input type="submit" class="submitb3" name="submit" value="Submit Datas">
                    </td>
                </tr>
            </form>
        </table>
        <?php
        if (isset($_POST["submit"])) {
            if (empty($_POST["email"])||empty($_POST["pass"])) {
                echo "<p class='red'>Không được để trống email và Password</p>";
            }
            else {
                if (strlen($_POST["pass"]) < 8) echo "<p class='red'>Password phải có độ dài tối thiểu 8 kí tự</p>";
                else {
                    echo"<p class='blue'> Đăng kí thành công !!</p>";
                    echo"<p class='blue'> Thông tin của bạn :</p>";
                    echo "<b> ";
                    echo 'Email : ' . $_POST["email"] . "<br/>";
                    echo 'Password : ' . $_POST["pass"] . "<br/>";
                  
                    if (isset($_POST["type"])) {
                        $type=$_POST["type"];
                        if ($type == 1) {
                            echo 'Acacdemic level : Freshman';
                        } elseif($type==2) {
                            echo 'Acacdemic level : Fuck';
                        }
                        else echo 'Acacdemic level : Fuuu';


                    }
                    echo "<br/> ";
                    if (isset($_POST["checkbox"])) {
                        $check = $_POST["checkbox"];
                        switch ($check){
                            case 1:
                            echo "Idenfy courses taken : CSCI 1700";
                            break;
                            case 2:
                            echo "Idenfy courses taken : CSCI 1800";
                            break;
                            case 3:
                            echo "Idenfy courses taken : CSCI 2800";
                            break;
                            case 4:
                            echo "Idenfy courses taken : CSCI 2150";
                            break;
                            case 5:
                            echo "Idenfy courses taken : CSCI 2910";
                            break;
                        }
                    }
                    echo "<br/> ";
                    if (isset($_POST["gender"])) {
                        $gender = $_POST['gender'];
                        if ($gender == 1) {
                            echo 'Concentration : Computer Science (CS)';
                        } elseif($gender==2) {
                            echo 'Concentration : Information Science (IS)';
                        }
                        else echo 'Concentration : Computer Technology (IT)';
                    }
                    echo"<br/>";
                    echo 'Comment : ' . $_POST["area"] . "<br/>";
                    echo "</b>";
                }
            }
        }

        ?>
    </div>
</body>

</html>