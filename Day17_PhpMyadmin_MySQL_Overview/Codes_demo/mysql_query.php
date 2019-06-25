1 - Tạo cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS my_database;
2 - Sử dụng CSDL vừa tạo
USE my_database;

3 - Xóa CSDL
DROP DATABASE php39;

4 - Các kiểu dữ liệu thường được sử dụng
- Nếu dữ liệu là 1 số: thường lưu kiểu
tinyint và int,
ngoài ra có thế là double, float
- Nếu dữ liều là 1 string: thường lưu kiểu varchar,
text

5 - Tạo bảng
CREATE TABLE books (
id INT(11) NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
description TEXT DEFAULT NULL,
created_at TIMESTAMP,
update_at DATETIME,
PRIMARY KEY (id)
);\

6 - Thêm dữ liệu vào bảng vừa tạo

INSERT INTO books(title, description, update_at)
VALUES('Book1', 'Description 1', '2019-06-25 19:09:09')

7 - Xóa bảng
DROP TABLE books

8 - LẤy dữ liệu từ bảng
SELECT * FROM books;
SELECT title, description FROM books
SELECT * FROM books LIMIT 1

9 - Điều kiện Where
SELECT * FROM books WHERE id = 1 OR id = 2;
SELECT * FROM books WHERE title='book2';

10 - Cập nhật bản ghi, thường kết hợp với điều kiện WHER
để tránh update toàn bộ CSDL
UPDATE books SET title = 'New title' WHERE id = 1

11 - Xóa bản ghi, thường kết hợp với điều kiện WHER
để tránh update toàn bộ CSDL
DELETE FROM books WHERE id = 2

12 - Tìm kiếm tương đối với LIKE
SELECT * FROM books WHERE title LIKE '%ok%'

13 - Sắp xếp
SELECT * FROM books ORDER BY title DESC
SELECT * FROM books ORDER BY id ASC