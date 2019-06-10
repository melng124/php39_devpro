<div style="border: 1px solid black;display: inline-table;">
    <?php
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 8/6/2019
     * Time: 1:32 AM
     */

    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            if ($i % 2 == 1) {
                if ($j % 2 == 1) {
                    echo "<button type=\"button\" style=\"width: 20px; height: 19px;
                             background: black;border: none;\"></button>";
                } else {
                    echo "<button type=\"button\" style=\"width: 20px; height: 19px;
                                background: white;border: none;\"></button>";
                }
            } else {
                if ($j % 2 == 0) {
                    echo "<button type=\"button\" style=\"width: 20px; height: 19px;
                                background: black;border: none;\"></button>";
                } else {
                    echo "<button type=\"button\" style=\"width: 20px; height: 19px; 
                    background: white;border: none;\"></button>";
                }
            }
        }
        echo "<br/>";
    }
    ?>
</div>