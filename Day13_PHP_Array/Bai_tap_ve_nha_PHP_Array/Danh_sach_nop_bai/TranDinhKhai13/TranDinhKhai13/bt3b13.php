<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0px">
        
            <tr><td><b>Các khóa học</b></td></tr>
            <?php
            $a=['PHP','HTML','CSS','JS'];?>
           <?php foreach($a as $key => $value):?>
           <tr><td ><?php print_r($a[$key]) ?></td></tr>
            <?php endforeach; ?>
        
    </table>
</body>
</html>