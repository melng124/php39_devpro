<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style type="text/css">
    .a{

       text-align: right;
        color: white;
    }
    .b{
        background-color: #7757f0;
    }
</style>
<form action="#" method="post">
    <table align="center"  cellpadding="5px" cellspacing="0px" border="1px">
        <tr align="center">
            <th style="color: white" bgcolor="blue" colspan="2">Registration Form</th>
        </tr>
        <tr class="b">
            <td class="a">User Name</td>
            <td><input type="text" name="Username" value="<?php echo isset($_POST['Username'])?$_POST['Username'] : '' ?>" placeholder=""> </td>
        </tr>
        <tr class="b">
            <td class="a">Password</td>
            <td><input type="password" name="Password" value="<?php echo isset($_POST['Password'])?$_POST['Password'] : '' ?>" placeholder=""></td>
        </tr >
        <tr class="b">
            <td class="a">User Type</td>
            <td><select name="type">
                    <option <?php echo (isset($_POST['type'])&&$_POST['type']==1)?'selected="selected"':""?> value="1">Vip</option>
                    <option <?php echo (isset($_POST['type'])&&$_POST['type']==2)?'selected="selected"':""?> value="2">Norman</option>
                </select> </td>
        </tr>

        <tr class="b">
            <td class="a">Display Name</td>
            <td><input type="text" name="display" value="<?php echo isset($_POST['display'])?$_POST['display'] : ''?>"></td>
        </tr>
        <tr class="b">
            <td class="a">Address</td>
            <td>
                <textarea cols="30" rows="4" name="add"><?php echo isset($_POST['add'])?$_POST['add'] : ''?></textarea>

            </td>
        </tr>
        <tr class="b">
            <td class="a">Email</td>
            <td><input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email'] : ''?>"></td>
        </tr>
        <tr class="b">
            <td class="a">Gender</td>
            <td><input type="radio" name="gender" <?php echo (isset($_POST['gender'])&&$_POST['gender']==1)?'checked="checked"':""?> value="1" > Male
                <input type="radio" name="gender" <?php echo (isset($_POST['gender'])&&$_POST['gender']==2)?'checked="checked"':""?> value="2"> Female
            </td>
        </tr>
        <tr class="b">
            <td >  </td>
            <td><input type="checkbox" name="check[]"  value="1" > I accept Terms and Conditions

            </td>
        </tr>
        <tr class="b">
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
<?php
    if (isset($_POST['submit'])){
        $user=$_POST['Username'];
        $pass=$_POST['Password'];
        $usertype=$_POST['type'];
        $display=$_POST['display'];
        $text=$_POST['add'];
        $email=$_POST['email'];


        if (empty($user)==false&&empty($pass)==false&&empty($display)==false &&empty($email)==false){
          if($usertype==1){
              if(isset($_POST['gender'])==false){
                  echo 'Chưa chọn giới tính';
              }
              elseif($_POST['gender']==1){
                  if (isset($_POST['check'])==false){
                      echo "Bạn ko đồng ý điều khoản trên";
                  }
                  elseif ($_POST['check'][0]==1){
                      echo "User Name : $user <br/>
                            Password  : $pass <br/>
                            User Type : Vip <br/>
                            DisPlay   : $display <br/>
                            Add       : $text <br/>
                            Email     : $email <br/>
                            Gender    : Male <br/>
                           ";
                  }

              }
              else{
                  if (isset($_POST['check'])==false){
                      echo "Bạn ko đồng ý điều khoản trên";
                  }
                  elseif ($_POST['check'][0]==1){
                      echo "User Name : $user <br/>
                            Password  : $pass <br/>
                            User Type : Vip <br/>
                            DisPlay   : $display <br/>
                            Add       : $text <br/>
                            Email     : $email <br/>
                            Gender    : Female <br/>
                           ";
                  }

              }
          }
          elseif($usertype==2){
              if(isset($_POST['gender'])==false){
                  echo 'Chưa chọn giới tính';
              }
              elseif($_POST['gender']==1){
                  if (isset($_POST['check'])==false){
                      echo "Bạn ko đồng ý điều khoản trên";
                  }
                  elseif ($_POST['check'][0]==1){
                      echo "User Name : $user <br/>
                            Password  : $pass <br/>
                            User Type : NorMan <br/>
                            DisPlay   : $display <br/>
                            Add       : $text <br/>
                            Email     : $email <br/>
                            Gender    : Male <br/>
                           ";
                  }

              }
              else{
                  if (isset($_POST['check'])==false){
                      echo "Bạn ko đồng ý điều khoản trên";
                  }
                  elseif ($_POST['check'][0]==1){
                      echo "User Name : $user <br/>
                            Password  : $pass <br/>
                            User Type : Norman <br/>
                            DisPlay   : $display <br/>
                            Add       : $text <br/>
                            Email     : $email <br/>
                            Gender    : Female <br/>
                           ";
                  }

              }
          }
        }
        elseif (empty($user)){
            echo "Chưa nhập UserName";
        }
        elseif (empty($pass)){
            echo "Chưa Nhập Pass";
        }
        elseif (empty($display)){
            echo "Chưa Nhập DisplayName";
        }
        elseif (empty($text)){
            echo "Chưa Nhập Địa Chỉ";
        }
        elseif (strlen($display)>24){
            echo "Display Name Ko đc vượt quá 24";
        }
        else{
            echo "Chưa Nhập Email";
        }
    }
?>
</body>
</html>