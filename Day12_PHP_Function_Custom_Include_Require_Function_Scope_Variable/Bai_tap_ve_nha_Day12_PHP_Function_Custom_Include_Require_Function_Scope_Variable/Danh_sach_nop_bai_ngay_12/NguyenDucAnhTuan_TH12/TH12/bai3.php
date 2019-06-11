<?php
function check($n){
    if($n < 2){
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
?>
<table align="center" border="1" style="border-collapse: collapse; text-align: center">
    <?php
    for($i = 1; $i <= 100; $i++){
        if($i % 10 == 0){
            if(check($i) == true){
                echo "<td style='background-color: lime; width: 40px; height: 40px'>$i</td>";
            }
            else{
                echo "<td style=' width: 40px; height: 40px'>$i</td>";
            }
            echo "<tr></tr>";
        }
        else{
            if(check($i) == true){
                echo "<td style='background-color: lime;  width: 40px; height: 40px'>$i</td>";
            }
            else{
                echo "<td style=' width: 40px; height: 40px'>$i</td>";
            }
        }
    }
    ?>
</table>
