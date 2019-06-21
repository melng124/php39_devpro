<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 11</title>
    <link rel="stylesheet" href="css/mystyle-11.css" type="text/css">
</head>
<body>
<div id="chess-table">
    <table>
        <?php
//        Vòng lặp for đầu tiên để in ra 8 lần(hoặc 8 hàng) trong bảng (Sử dụng cặp thẻ <tr></tr>)
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
//            Vòng lặp for thứ 2 có ý nghĩa in ra 8 ô trong 1 hàng
            for ($k = 1; $k <= 8; $k++) {
//                Sử dụng biến blackOrWhite để check xem ô đó là đen hay trắng
//                Vd: Ở hàng 1 : $i = 1 --- Ở cột 1 (hay còn là ô đầu tiên của hàng 1) $k = 1
//                    Sẽ có tổng là : 1+1=2 -> là ô đen (chia hết cho 2)
                $blackOrWhite = $i + $k;
                if ($blackOrWhite % 2 == 0) {
                    echo "<td id='black'></td>";
                }
                else
                    echo "<td id='white'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>