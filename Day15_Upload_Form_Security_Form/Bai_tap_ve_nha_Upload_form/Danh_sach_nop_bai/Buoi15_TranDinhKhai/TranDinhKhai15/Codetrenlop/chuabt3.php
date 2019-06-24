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
    <form action="" method="post">
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
                        <input class="ip1" type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td class="td1b3"> Select academic lebel:</td>
                    <td class="td2b3">
                        <select name="academic" id="select">
                            <option value="1">Freehman</option>
                            <option value="2">Fuckman</option>
                            <option value="3">Batman</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="td1b3">Identify courses taken:</td>
                    <td class="td2b3">
                        <input type="checkbox" name="couse[]" value="0"> CSCI 1710 <br />
                        <input type="checkbox" name="couse[]" value="1"> CSCI 1801 <br />
                        <input type="checkbox" name="couse[]" value="2"> CSCI 2802 <br />
                        <input type="checkbox" name="couse[]" value="3"> CSCI 2153 <br />
                        <input type="checkbox" name="couse[]" value="4"> CSCI 2914 <br />
                    </td>
                </tr>
                <tr>
                    <td class="td1b3"> Select Concentionect:</td>
                    <td class="td2b3">
                        <input type="radio" name="concen" value="0"> Computer Science (CS)<br />
                        <input type="radio" name="concen" value="1"> Information Science (IS)<br />
                        <input type="radio" name="concen" value="2"> Information Technology (IS)
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="area">
                        <textarea name="message" id="area" cols="50" rows="5" placeholder="Nhập Massage"></textarea>
                    </td>
                </tr>

                <tr>
                    <td class="td3b3" colspan="2">
                        <input type="submit" class="submitb3" name="submit" value="Submit Datas">
                    </td>
                </tr>
            </form>
        </table>
    </form>
</body>
</html>
<?php
//Bước 1 khin submit form
if(isset($_POST['submit'])){
    // echo"<pre>";
    // print_r($_POST);
    //b2 check validate theo yêu cầu đề bài
    
    if(empty($_POST['email'])){
        echo'<p style:"color=red">Username không được để trống</p>';
    }
    elseif(empty($_POST['password']))echo'<p style="color:red">Password không được để trống</p>';
    elseif(strlen($_POST['password'])<8)echo'<p style="color:red">Password không được dưới 8 kí tự</p>';
    else{
        echo'<p style="color:blue">Đăng kí thành công!!</p>';
        echo'<p style="color:blue">Thông tin của bạn : </p>';
        echo"<p >Email : " .$_POST['email']."</p>";
        $academicText='';
        switch($_POST['academic']){
            case 1:$academicText='Freshman'; break;
            case 2:$academicText='Fuckman'; break;
            case 3:$academicText='batman'; break;
        }
        echo"<p>Academic : $academicText </p>";
        $checkboxText='';
        if(isset($_POST['couse'])){
            $checkboxArr=$_POST['couse'];
            foreach($checkboxArr as $key=>$value){
                switch($value){
                    case 0: $checkboxText.='CSIT 1700<br/>'; break;
                    case 1: $checkboxText.='CSIT 1701<br/>'; break;
                    case 2: $checkboxText.='CSIT 1702<br/>'; break;
                    case 3: $checkboxText.='CSIT 1703<br/>'; break;
                    case 4: $checkboxText.='CSIT 1704<br/>'; break;
                }
            }
            echo"<p>Indentify course taken : $checkboxText </p>";

        }
        $radioText='';
        if(isset($_POST['concen'])){
            
                switch($radioText){
                    case 0: $radioText='Computer Science 0<br/>'; break;
                    case 1: $radioText='Computer Science 1<br/>'; break;
                    case 2: $radioText='Computer Science 2<br/>'; break;
                    
                }
            
            echo"<p>Concen : $radioText </p>";

        }
        echo"<p >Massage : " .$_POST['message']."</p>";


    }
}
?>