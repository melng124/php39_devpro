<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    td{
        text-align: center;
        
    }
    </style>
</head>
<body>
    <table border="1" cellspacing="0px">       
    <?php
    function sont($n){
        if($n==1)return false;
        else{
        for($i=2;$i<=sqrt($n);$i++){
            if($n%$i==0)return false;
        }
        return true;
    }
    }
    for($i=1;$i<=10;$i++){
        echo"<tr>";
        for($j=1;$j<=10;$j++){
            $n=$i*10-10+$j;
            $a=sont($n);           
            echo"<td text-align=center height=60px width=60px  ";
            if($a==true)echo "bgcolor=#7FFF0";
            
            echo">";
            echo $n;
            echo"</td>";
          
        }
        echo"</tr>";
    }
    ?>
    </table>
</body>
</html>