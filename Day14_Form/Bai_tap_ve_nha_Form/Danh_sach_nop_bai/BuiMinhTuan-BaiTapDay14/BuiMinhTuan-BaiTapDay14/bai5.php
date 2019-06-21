

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .col-md-3{
            text-align: right;
        }
        .td{
            text-align: center;
            margin-top: -10px;
        }

    </style>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Register </h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Firstname</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name1" class="form-control" id="name"
                               placeholder="First name" required autofocus>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Lastname</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name2" class="form-control" id="name"
                               placeholder="Last name" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">

                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6 td">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <em><b>Please enter your last name</b></em>
                        </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Username</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name3" class="form-control" id="name"
                               placeholder="John Doe" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">

                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">

                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6 td">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <em><b>Please provide a password</b></em>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                               id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6 td">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <em><b>Please provide a password</b></em>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Save</button>
            </div>
        </div>
    </form>
</div>
</body>
<?php
if (isset($_POST['submit']))
{
    echo '<pre>';
    $firstname = $_POST['name1'];
    $lastname = $_POST['name2'];
    $user = $_POST['name3'];
    $email = $_POST['email'];
        echo "<h3><b style='color: aqua'>Đăng ký thành công !</b></h3>";
        echo "<h3><b style='color: aqua'>Thông tin của bạn:</b></h3>";

        echo "<h3><b>Firstname:" . $_POST['name1'] . "</b></h3>";
        echo "<h3><b>Lastname:" . $_POST['name2'] . "</b></h3>";
        echo "<h3><b>Username:" . $_POST['name3'] . "</b></h3>";
        echo "<h3><b>Email:" . $_POST['email'] . "</b></h3>";



}
?>