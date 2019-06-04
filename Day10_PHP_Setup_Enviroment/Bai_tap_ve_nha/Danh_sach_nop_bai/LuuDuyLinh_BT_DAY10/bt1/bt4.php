<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
   $name="Nguyễn Văn Mạnh";
   $age=29;
   $year="05/01/1990";
   $sex="Nam";
   $que="Sơn Đông-Hoài Đức-Hà Nội";
?>
   <table border="1px" cellspacing="0px" cellpadding="6px">
       <thead>
       <tr>
           <!-- thẻ th in đâmh text -->
           <th>Họ tên</th>
           <th>Tuổi</th>
           <th>Ngày Sinh</th>
           <th>Giới Tính</th>
           <th>Quê Quán</th>
       </tr>
       </thead>
       <tbody>
       <tr>
           <td><?php echo "$name"?></td>
           <td><?php echo "$age"?></td>
           <td><?php echo "$year"?></td>
           <td><?php echo "$sex"?></td>
           <td><?php echo "$que"?></td>
       </tr>
       </tbody>

   </table>
</body>
</html>