<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td{
        width: 60px;
        height: 60px;
    }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php $n=2;
            if($n%2==0) :?>
            <td style="background:blue"></td>
            <?php endif ; ?>
        </tr>
    </table>
</body>
</html>