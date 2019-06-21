<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-3.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4 col-12">
                <p>Enter email address</p>
            </div>
            <div class="col-md-8 col-12">
                <input type="email" name="email" id="email" class="form-control"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="col-md-4 col-12">
                <p>Enter password</p>
            </div>
            <div class="col-md-8 col-12">
                <input type="password" name="pass" id="pass" class="form-control"
                       value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>">
            </div>
            <div class="col-md-4 col-12">
                <p>Select academic level</p>
            </div>
            <div class="col-md-8 col-12">
                <select name="level" id="level">
                    <option value="1">Freshman</option>
                    <option value="2">Bachelor</option>
                    <option value="3">Master</option>
                </select>
            </div>
            <div class="col-md-4 col-12">
                <p id="mid-1">Identify courses taken</p>
            </div>
            <div class="col-md-8 col-12">
                <input type="checkbox" name="checkbox[]" value="1"> CSCI 1700 <br>
                <input type="checkbox" name="checkbox[]" value="2"> CSCI 1800 <br>
                <input type="checkbox" name="checkbox[]" value="3"> CSCI 1900 <br>
                <input type="checkbox" name="checkbox[]" value="4"> CSCI 2000 <br>
                <input type="checkbox" name="checkbox[]" value="5"> CSCI 2100
            </div>
            <div class="col-md-4 col-12">
                <p id="mid-2">Select concentration</p>
            </div>
            <div class="col-md-8 col-12">
                <input type="radio" name="focus" value="1" checked="checked"> Computer Sci (CS) <br>
                <input type="radio" name="focus" value="2"> Information Sci (IS) <br>
                <input type="radio" name="focus" value="3"> Information Tech (IT)
            </div>
            <div class="col-12">
                <textarea name="comments" id="comments" cols="30" rows="10" class="form-control"
                          placeholder="Enter any comments you have here"></textarea>
            </div>
            <div class="col-12" id="button">
                <button type="submit" name="submit-form">Submit Data</button>
            </div>
            <div class="col-12" id="info">
                <?php require 'validate-3.php'; ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>