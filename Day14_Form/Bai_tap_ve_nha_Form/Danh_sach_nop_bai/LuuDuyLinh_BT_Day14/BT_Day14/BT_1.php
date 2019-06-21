<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Tutorials Point Absolute classes registration</h1>
        <table  cellpadding="3px" cellspacing="3px">
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo isset($_POST['Name'])? $_POST['Name']:''?>" placeholder=""> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email" value="<?php echo isset($_POST['Email'])? $_POST['Email']:''?>" placeholder=""></td>
            </tr>
            <tr>
                <td>Specific time</td>
                <td><input type="text" name="Time" value="<?php echo isset($_POST['Time'])? $_POST['Time']:''?>" placeholder=""> </td>
            </tr>
            <tr>
                <td>Class details</td>
                <td>
                    <textarea style="resize: none" name="text" rows="4" cols="30" placeholder="">
                        <?php echo isset($_POST['text'])? $_POST['text']:''?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="1" <?php echo (isset($_POST['gender'])&&$_POST['gender']==1)?'checked="checked"':""?>  > Male
                    <input type="radio" name="gender" value="2" <?php echo (isset($_POST['gender'])&&$_POST['gender']==2)?'checked="checked"':""?> > Female
                </td>

            </tr>
        </table>
        <input type="submit" name="submit" value="submit">
        <h1>Your Given details are as :</h1>
    </form>
    <?php

        //Nút submit đc click
        if (isset($_POST['submit'])){
            $name=$_POST['Name'];
            $email=$_POST['Email'];
            $time=$_POST['Time'];
            $class=$_POST['text'];
            //-Không trường nào được trống
            if (empty($name)==false&&empty($email)==false&&empty($time)==false&&empty($class)==false){
                //-Name
            if(isset($_POST['gender'])==false){
                echo 'chưa chọn giới tính';
            }
            elseif ($_POST['gender']==1){
                    echo " Name : $name <br/>
                           Email : $email <br/>
                           Time : $time <br/>
                           Class: $class <br/>
                           Gender : Male <br/> ";
                }
                //Nữ
            elseif ($_POST['gender']==2){
                    echo " Name : $name <br/>
                           Email : $email <br/>
                           Time : $time <br/>
                           Class: $class <br/>
                           Gender : Female <br/> ";
                }

            }
            //Tên trống
            elseif (empty($name)){
                echo "Chưa nhập tên";
            }
            //Mail trống
            elseif (empty($email)){
                echo 'Chưa nhập Email';
            }
            //Time trống
            elseif (empty($time)){
                echo 'Chưa nhập Time';
            }


            //text trống
            else{
                echo 'Chua nhập Text';
            }
        }
    ?>
</body>
</html>