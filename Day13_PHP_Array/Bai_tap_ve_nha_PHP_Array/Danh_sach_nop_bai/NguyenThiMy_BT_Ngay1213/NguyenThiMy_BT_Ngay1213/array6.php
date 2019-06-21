<!--7.	Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra-->
<!--VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]-->
<!--•	Áp dụng với 1 số mảng sau:-->
<!--$arrs = [‘1’, ‘B, ‘C’, ‘E’];-->
<!--$arrs = [‘a’, 0, null, false];-->

<?php
function ham_chuyen_doi_kieu($arr, $ucase)
{
    $case = $ucase;
    $narray = array();
    //kiểm tra xem $arr có phải là một mảng hay không
    if (!is_array($arr))
    {
        return $narray;
    }
    foreach ($arr as $key => $value)
    {
        if (is_array($value))
        {
            $narray[$key] = ham_chuyen_doi_kieu($value, $case);
            continue;
        }
        $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
    }
    return $narray;
}
echo "<pre>";
$mang_ban_dau = ['a', 'b', 'ABC'];
echo "Mảng ban đầu: <br>";
print_r($mang_ban_dau);
echo '<br>Các giá trị ở dạng chữ thường.<br>';
$mang_dang_chu_thuong = ham_chuyen_doi_kieu($mang_ban_dau,CASE_LOWER);
print_r($mang_dang_chu_thuong);
?>
