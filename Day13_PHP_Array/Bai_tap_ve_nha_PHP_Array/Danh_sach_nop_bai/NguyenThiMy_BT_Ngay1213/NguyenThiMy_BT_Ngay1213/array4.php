<!--5.	Cho mảng sau đây-->
<!--$a = array(-->
<!--"a"=>array(-->
<!--"b"=>0,-->
<!--"c=>1-->
<!--),-->
<!--"b"=>array(-->
<!--"e"=>2,-->
<!--"o"=>array(-->
<!--"b"=>3-->
<!--)-->
<!--)-->
<!--);-->
<!--Hãy truy xuất mảng để lấy giá trị = 3 trong mảng trên.-->
<?php
    $arr =array(
            "a" => array(
                    "b" => 0,
                "c" => 1
            ),
        "b" =>array(
                "e" => 2,
            "o" => array(
                    "b" => 3
            )
        )
    );
    echo "<pre>";
    $arr1 = $arr["b"]["o"];
    print_r($arr1);

?>