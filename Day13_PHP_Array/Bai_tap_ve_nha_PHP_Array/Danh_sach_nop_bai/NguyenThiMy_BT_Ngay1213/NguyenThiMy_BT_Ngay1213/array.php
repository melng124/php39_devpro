<!--$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");-->
<!--•	Hãy hiển thị các thông tin đầu ra như sau: Thủ đô của <tên-quốc-gia> là <tên-thủ-đô>-->
<!--        Ví dụ:-->
<!--        Thủ đô của Italy là Rome-->
<!--        Thủ đô của Luxembourg là Luxembourg-->
<?php
    $list_user = array("Italy" => "Rome", "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels", "Denmark" => "Copenhagen",
        "Finland" => "Helsinki", "France" => "Paris",
        "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
        "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
        "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
        "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
        "Austria" => "Vienna", "Poland" => "Warsaw");
    //
asort($list_user);
foreach ($list_user as $countryname => $capitalname) {
    echo "Thủ đô của $countryname là $capitalname";
    echo "<br>";
}
?>