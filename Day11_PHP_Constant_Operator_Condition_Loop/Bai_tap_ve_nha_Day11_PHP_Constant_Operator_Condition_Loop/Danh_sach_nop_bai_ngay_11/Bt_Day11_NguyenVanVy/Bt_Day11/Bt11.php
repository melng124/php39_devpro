<table style=' width: 400px; height: 400px; border: 2px solid black; '>
    <?php
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 6/5/2019
     * Time: 12:46 PM
     */
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $total = $row + $col;
            if ($total % 2 == 0) {
                echo "<td style='height=50px; width=50px; background-color: white; border: 1px solid' ></td>";
            } else {
                echo "<td style='height=50px; width=50px; background-color: black; border: 1px solid' ></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>