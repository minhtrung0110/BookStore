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
        <hr style="width:4px; color:blue">
## M-V-C
### Bridge.php: 
    - Cầu nối đến Core/App.php
    - Cầu nối đến Core/Controller.php
### htaccess
    - Không cho phép người dùng truy cập đến thư mục MVC qua URL của website.   
### Core 
    - App.php: quản lý, điều hướng Cấu Trúc Controller
    - Controller.php:   quản lý, điều hướng , truy xuất đến Cấu Trúc View và Cấu Trúc Model; Chứa 2 method Model và View để truy xuất dữ liệu đến View và Model.
### Cấu Trúc Controller ( gồm các trang chức năng chính của website)
- Các Class với các method truy xuất đến Model và View.
- Các Class extends Class Controller trong Core để có thể sử dụng lại 2 method lấy model và view .
### Cấu Trúc Model
### Cấu Trúc view



