<!--2.	Cho mảng dưới đây-->
<!--$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];-->
<!--Cho biết đây là mảng loại nào-->
<!--Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:-->
<!--“Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của Sơn, cam là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu trắng”-->
<!---->
<?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    echo "<pre>";
print_r($arrs);
var_dump($arrs);
    $list_user = array("Đỏ" => "Anh","Trắng" => "Sơn", "Cam" => "Thắng", "Xanh" => "Tôi");
foreach ($list_user as $color => $name) {
    echo "  Màu $color là màu thích của $name <br>";
}
?>
