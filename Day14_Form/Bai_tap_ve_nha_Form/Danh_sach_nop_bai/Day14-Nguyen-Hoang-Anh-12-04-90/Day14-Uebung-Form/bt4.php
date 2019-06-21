<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-4.css" type="text/css">
    <script type="text/javascript" src="js/myjavascript4.js"></script>
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<div class='container-fluid'>
    <form action="" method="post" onsubmit="validateForm4()">
        <div id="left-content">
            <div class="row header">
                <div class="col-12">
                    <h1>Registration Form</h1>
                </div>
            </div>
            <div class="row content">
                <div class="col-12">
                    <label for="firstName">First Name</label>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="firstName" id="firstName"
                           value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
                </div>
                <div class="col-12">
                    <label for="lastName">Last Name</label>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="lastName" id="lastName"
                           value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                </div>
                <div class="col-12">
                    Gender
                    <input type="radio" name="gender" value="1" class="gender"> Male
                    <input type="radio" name="gender" value="2" class="gender"> Female
                </div>
                <div class="col-12">
                    <label for="state">State</label>
                </div>
                <div class="col-12">
                    <select class="form-control" id="state" name="state">
                        <option value="1">Johor</option>
                        <option value="2">Rojh</option>
                        <option value="3">Hjro</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="submit-form">Save Record</button>
                    <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
                </div>
            </div>
        </div>
        <div id="right-content">
            <div class="row header">
                <div class="col-12">
                    <h1>Exercise List</h1>
                </div>
            </div>
            <div class="row content"></div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">Home Directory</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">FORM</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">operator</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">array</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">if - else</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">Repetition</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" name="">string</button>
            </div>
        </div>
</div>
</form>
<div id="info-js">

</div>
<div class="row" id="info-php">
    <div class="col-12">
        <?php
        require 'validate-4.php';
        ?>
    </div>
</div>
</div>
</body>
</html>