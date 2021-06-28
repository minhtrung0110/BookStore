# BookStore
🧨 Demo theo mô hình M-V-C
🧨 Quản Lý Cửa Hàng Sách
## Cấu Trúc Thư Mục
+ mvc : Chứa Model - View - Controler

+ public : giao dien, HTML,CSS...

+ htaccess: quản lý url( ẩn $_GET['url']) giúp chúng ta lấy $_GET['url'] mà ko phải hiện lên thanh URL
VD: URL sẽ là http://localhost/MVC/BookStore/BookStore/Home thay vì http://localhost/MVC/BookStore/BookStore/index.php?url=Home/

⛏ Index=> gọi Bridge.php=> App.php
        *App.php: Quản lý URL , cắt URL, chuyển đến Controller
## M-V-C
### Bridge.php: 
    - Cầu nối đến App.php
### htaccess
    - Không cho phép người dùng truy cập đến thư mục MVC qua URL của website.        
### Cấu Trúc Controller ( gồm các trang chức năng chính của website)
### Cấu Trúc Model
### Cấu Trúc view

