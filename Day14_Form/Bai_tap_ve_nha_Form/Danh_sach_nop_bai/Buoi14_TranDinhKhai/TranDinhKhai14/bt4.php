<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bt4.css">
    <title>Document</title>
</head>

<body>
    <div class="container bt4">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="left">
                    <div class="head">
                        <h4> Regisstration FORM</h4>
                    </div>
                    <div class="form">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="form-group">
                                <label for="lasttname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="form-check form-check-inline">
                                Gender &nbsp
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">Fermal</label>
                            </div>
                            <div class="form-group">
                                <label for="select">State</label>
                                <select id="select" class="form-control" name="select">
                                    <option value="1">Johor</option>
                                    <option value="2">Khai</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success" name="submit">Save Record</button>
                            <button type="reset" class="btn btn-light" name="reset">Reset</button>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-12">
                <div class="right">
                    <div class="head">
                        <h4>Exercise List</h4>
                    </div>
                    <div class="list">
                        <button type="button" class="btn btn-primary bt">Home Diretory</button>
                        <br />
                        <button type="button" class="btn btn-primary bt">FORM</button><br />
                        <button type="button" class="btn btn-primary bt">operator</button><br />
                        <button type="button" class="btn btn-primary bt">array</button><br />
                        <button type="button" class="btn btn-primary bt">if-else</button><br />
                        <button type="button" class="btn btn-primary bt">Repetition</button><br />
                        <button type="button" class="btn btn-primary bt">string</button>
                    </div>
                </div>

            </div>

        </div>
        <?php
            if (isset($_POST["submit"])) {
                if (empty($_POST["firstname"])||empty($_POST["lastname"])) {
                    echo "<p class='red'>Không được để trống Firstname và Lastname</p>";
                }
                else
                {
                    echo "<p class='blue'> Đăng kí thành công !!</p>";
                    echo "<p class='blue'> Thông tin của bạn :</p>";
                    echo "<b> ";
                    echo 'Firstname : ' . $_POST['firstname'] . "<br/>";
                    echo 'Lastname : ' . $_POST['lastname'] . "<br/>";
                    if (isset($_POST["gender"])) {
                        $gender = $_POST['gender'];
                        if ($gender == 2) {
                            echo 'Gender : Female';
                        } else {
                            echo 'Gender : Male';
                        }
                    }
                    echo"<br/>";
                    if (isset($_POST["select"])) {
                        $select = $_POST['select'];
                        if ($select == 1) {
                            echo 'State : Johor';
                        } else {
                            echo 'State : Khai';
                        }
                    }
                    echo"<br/>";
                    echo "</b>";
                }
            }
                ?>
    </div>

</body>

</html>