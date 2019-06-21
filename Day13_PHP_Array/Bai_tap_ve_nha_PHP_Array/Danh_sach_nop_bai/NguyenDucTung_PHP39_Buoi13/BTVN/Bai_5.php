<!-- 5.	Cho mảng sau đây
$a = array(
   "a"=>array(
       "b"=>0,
       "c=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);
Hãy truy xuất mảng để lấy giá trị = 3 trong mảng trên.

 -->

<h2>Bài tập 5</h2>
<?php
	$a = array(
   "a"=>array(
       "b"=>0,
       "c"=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);
	echo "Giá trị cần tìm là ". $a["b"]["o"]["b"];
?>