<!-- $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
Cho biết đây là mảng loại nào
Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:
“Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của Sơn, cam là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu trắng”

 -->
 <h2>Bai tap 2</h2>
 <h4>Đây là mảng tuần tự</h4>
 <?php 
 	$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
 	echo "Màu <b>$arrs[0]</b> là màu yêu thích của Anh, <b>$arrs[3]</b> là màu yêu thích của Sơn, <b>$arrs[2]</b> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <b>$arrs[3]</b>.";
 ?>