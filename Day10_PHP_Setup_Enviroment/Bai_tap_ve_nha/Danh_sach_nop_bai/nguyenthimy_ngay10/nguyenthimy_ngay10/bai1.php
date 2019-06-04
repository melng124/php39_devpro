<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai1</title>
</head>
<body>
    <?php
    $variable1 = '1.23';
    var_dump((string)$variable1);
    echo ('<br>');
    $variable2 = '56';
    var_dump((int)$variable2);
    echo ('<br>');
    $variable3 = 'null';
    var_dump((string)$variable3);
    echo ('<br>');
    $variable4 = array('123',"false","null", "1.23", "FALSE", "[]", "TRUE");
    var_dump((int)$variable4[0]);
    var_dump((boolean)$variable4[1]);
    var_dump((float)$variable4[3]);
    var_dump((boolean)$variable4[4]);
    var_dump((array)$variable4[5]);
    var_dump((boolean)$variable4[6]);
    echo ('<br>');
    $variable5 = '-123';
    var_dump((float)$variable5);
    echo ('<br>');
    $variable6 = 'false';
    var_dump((string)$variable6);
    echo ('<br>');
    $variable7 = 'php39';
    var_dump((string)$variable7);

    ?>
</body>
</html>