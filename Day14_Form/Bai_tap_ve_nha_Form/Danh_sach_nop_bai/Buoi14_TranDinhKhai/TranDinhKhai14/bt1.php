<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <h3>TuTorial Point Absolute classes registration</h3>
        <table>
            <form action="" method="POST">
                <tr>
                    <td> Name:</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td> E-mail:</td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td> Specific Time:</td>
                    <td>
                        <input type="text" name="time">
                    </td>
                </tr>
                <tr>
                    <td>Class details:</td>
                    <td>
                        <textarea name="details" id="details" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td> Gender:</td>
                    <td >
                        <input type="radio" name="gender" value="1">Female
                        <input type="radio" name="gender" value="2">Male
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </form>
        </table>

        <?php
        if (isset($_POST["submit"])) {
            if (empty($_POST["name"])||empty($_POST["email"])||empty($_POST["time"])||empty($_POST["details"])) {
                echo "Không được để trống Name,  email, Special Time, Class Detail";
            
            } else {
                echo "<b> Your Given details are as : <br/>";
                echo 'Name : ' . $_POST["name"] . "<br/>";
                echo 'Email : ' . $_POST["email"] . "<br/>";
                echo 'Special Time : ' . $_POST["time"] . "<br/>";
                echo 'Class details : ' . $_POST["details"] . "<br/>";
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