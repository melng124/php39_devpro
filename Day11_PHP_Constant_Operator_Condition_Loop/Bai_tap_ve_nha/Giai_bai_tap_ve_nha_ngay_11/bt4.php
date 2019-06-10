<?php
/*
Hiển thị chuỗi với mô tả như sau sử dụng PHP:
Chuỗi ký tự từ 1 đến 50
•Phân cách nhau bởi ký tự –
•Không có ký tự – này ở đầu và cuối của chuỗi đó
•Kết quả sẽ có dạng sau:
1 – 2 – 3 – 4 – 5 – 6- 7 – 8 – 9 – 10 – … – 45 – 46 – 47 – 48 – 49 – 50

 */
for ($i = 1; $i <= 50; $i++) {
  echo $i;
  //trường hợp i = 50 sẽ không in ra ký tự -
  if ($i == 50) {
    continue;
  }
  echo ' - ';
}