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
    <div class="mainb5">
        <div class="headb5">
            <h4>Register</h4> 
        </div>
        <div class="tableb5">
            <table>
                <form action="" method="POST">
                    <tr>
                        <td class="td1b5">Firstname:</td>
                        <td class="td2b5">
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                            <?php
                             if (isset($_POST["submit"])) {
                                 if(empty($_POST['firstname']))
                                 echo "<i class='red'>Please enter your Firstname</i>";
                             }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td1b5">Lastname:</td>
                        <td class="td2b5">
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                            <?php
                             if (isset($_POST["submit"])) {
                                 if(empty($_POST['lastname']))
                                 echo "<i class='red'>Please enter your Lastname</i>";
                             }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td1b5">Username:</td>
                        <td class="td2b5">
                            <input type="text" name="username" class="form-control" placeholder="Username ">
                            <?php
                             if (isset($_POST["submit"])) {
                                 if(empty($_POST['username']))
                                 echo "<i class='red'>Please enter your Username </i>";
                             }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td1b5">Email Address:</td>
                        <td class="td2b5">
                           
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <?php
                             if (isset($_POST["submit"])) {
                                 if(empty($_POST['email']))
                                 echo "<i class='red'>Please enter your Email</i>";
                             }
                            ?>    
                    </td>
                    </tr>
                    <tr>
                        <td class="td1b5">Password:</td>
                        <td class="td2b5">
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                            <?php
                             if (isset($_POST["submit"])) {
                                 if(empty($_POST['pass']))
                                 echo "<i class='red'>Please enter your Password</i>";
                             }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td1b5">Confim Password:</td>
                        <td class="td2b5">
                            <input type="password" name="pass1" class="form-control" placeholder="Password">
                            <?php
                             if (isset($_POST["submit"])) {
                                if(empty($_POST['pass1']))echo "<i class='red'>Please Confim your Password</i>";
                                else{
                                    if($_POST['pass1']!=$_POST['pass'])
                                    echo "<i class='red'>Mật Khẩu chưa trùng</i>";
                                }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="td2b5">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>

                        </td>
                    </tr>
                </form>
            </table>
            <?php
              if (isset($_POST["submit"])) {
                  if(!empty($_POST["firstname"]) && !empty($_POST["lastname"])&&!empty($_POST["username"]) && !empty($_POST["email"])&&!empty($_POST["pass"]) && !empty($_POST["pass1"])&&($_POST['pass']==$_POST['pass1'])){
                    echo "<p class='blue'> Đăng kí thành công !!</p>";
                    echo "<p class='blue'> Thông tin của bạn :</p>";
                    echo "<b> ";
                    echo 'Firstname : ' . $_POST['firstname'] . "<br/>";
                    echo 'Lastname : ' . $_POST['lastname'] . "<br/>";
                    echo 'Username : ' . $_POST['username'] . "<br/>";
                    echo 'Email Address : ' . $_POST['email'] . "<br/>";
                    echo"</b>";
                  }
              }
            ?>
        </div>
    </div>
</body>

</html>