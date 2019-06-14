<!-- 3.	Cho mảng dưới đây:
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
Hãy viết code hiển thị nội dung như hình sau
 -->

<h2>Bài tập 3</h2>
<?php 
	$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1">
	<tr>
		<th>Tên khóa học</th>
	</tr>
	<?php foreach($arrs as $key): ?>
	<tr>
		<td><?php echo $key ?></td>
	</tr>
	<?php endforeach; ?>
</table>