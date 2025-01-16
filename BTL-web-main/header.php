<?php
include "../Connect/connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="icon" href="images/logo.png" type = "image/x-icon"> <!--FAVICON-->
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
   </head>
<body>
    <header>        
        <div id="header">
            <div class="top-bar">
                <div class="contact-info">
                    <ul>
                        <li id="place">
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="10.5" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#303030" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            <a href="./lienhe.html" class="contact">Hà Nội - Việt Nam</a>
                        </li>
                        <li id="emailcontact">
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#303030" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            <a href="mailto:QTV@gmail.com" class="contact">QTV@gmail.com</a>
                        </li>
                        <li id="phonenumber">
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#303030" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                            <a href="tel:0987654321" class="contact">0987654321</a>
                        </li>
                        <!--Nút tìm kiếm-->
                        <li class="search">
                            <input id="search-input" placeholder="Tìm kiếm " type="search">
                            <icon id="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="25" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#303030" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                           </icon>
                        </li>
                        <li id="account">                     
                            <svg fill="#303030" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 402.161 402.161" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M201.08,49.778c-38.794,0-70.355,31.561-70.355,70.355c0,18.828,7.425,40.193,19.862,57.151 c14.067,19.181,32,29.745,50.493,29.745c18.494,0,36.426-10.563,50.494-29.745c12.437-16.958,19.862-38.323,19.862-57.151 C271.436,81.339,239.874,49.778,201.08,49.778z M201.08,192.029c-13.396,0-27.391-8.607-38.397-23.616 c-10.46-14.262-16.958-32.762-16.958-48.28c0-30.523,24.832-55.355,55.355-55.355s55.355,24.832,55.355,55.355 C256.436,151.824,230.372,192.029,201.08,192.029z"></path> <path d="M201.08,0C109.387,0,34.788,74.598,34.788,166.292c0,91.693,74.598,166.292,166.292,166.292 s166.292-74.598,166.292-166.292C367.372,74.598,292.773,0,201.08,0z M201.08,317.584c-30.099-0.001-58.171-8.839-81.763-24.052 c0.82-22.969,11.218-44.503,28.824-59.454c6.996-5.941,17.212-6.59,25.422-1.615c8.868,5.374,18.127,8.099,27.52,8.099 c9.391,0,18.647-2.724,27.511-8.095c8.201-4.97,18.39-4.345,25.353,1.555c17.619,14.93,28.076,36.526,28.895,59.512 C259.25,308.746,231.178,317.584,201.08,317.584z M296.981,283.218c-3.239-23.483-15.011-45.111-33.337-60.64 c-11.89-10.074-29.1-11.256-42.824-2.939c-12.974,7.861-26.506,7.86-39.483-0.004c-13.74-8.327-30.981-7.116-42.906,3.01 c-18.31,15.549-30.035,37.115-33.265,60.563c-33.789-27.77-55.378-69.868-55.378-116.915C49.788,82.869,117.658,15,201.08,15 c83.423,0,151.292,67.869,151.292,151.292C352.372,213.345,330.778,255.448,296.981,283.218z"></path> <path d="M302.806,352.372H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,355.73,306.948,352.372,302.806,352.372z"></path> <path d="M302.806,387.161H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,390.519,306.948,387.161,302.806,387.161z"></path> </g> </g> </g> </g></svg>
                            
                            <?php


if (isset($_SESSION['usernamesql']) && $_SESSION['usernamesql']) {
    // Dùng giá trị trong session
    $userDisplayName = htmlspecialchars($_SESSION['usernamesql']);
    echo '<a href="profile.php" class="contact">' . $userDisplayName . '</a>';
    echo '<a href="dangxuat.php">  Đăng xuất</a>';
} else {
    echo '<a href="dangnhap.php" class="contact">Đăng nhập</a>';
}
?>

                            

                        </li>
                        <li id="cart"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#303030" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        <a href="giohang.html" class="contact">Giỏ hàng</a>
                        </li>
                    </ul>
                </div>       
            </div>
            <div id="main-header">
                <div class="main-header-container">
                    <ul id="main-menu-1">
                        <li><a href="index.html"><img src="./images/logo cake 1.png" alt="logo"></a></li>
                        <li><a href="index.html" class="bakery-name">VTQ Bakery</a></li> <!-- Thêm class cho tên cửa hàng -->
                    </ul>
                        
                        
                    
                        <ul id="main-menu">
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li><a href="gioithieu.html">Giới thiệu</a></li>
                            <li><a href="hoidap.html">Hỏi - Đáp</a></li>
                            <li><a href="sanpham.html">Sản Phẩm</a>
                                <ul class="sp-menu" style="z-index: 999;">
                                    <li><a href="banhsinhnhat.html">Bánh sinh nhật</a></li>
                                    <li><a href="banhsinhnhat.html">Bánh nửa Entremet</a></li>
                                    <li><a href="banhsinhnhat.html">Phụ kiện bánh</a></li>
                                </ul>
                            </li>
                            <li><a href="tintuc.html">Tin Tức</a></li>
                            <li><a href="doingu.html">Đội Ngũ</a></li>
                            <li><a href="lienhe.html">Liên Hệ</a></li>
                        </ul>
        
                        <label for="nav-mobile-input" class="navbar-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="black" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                        <input type="checkbox" name="" class="nav__input" id="nav-mobile-input">
                        <label for="nav-mobile-input" class="nav__overlay"></label>
                        <ul id="main-menu__mobile">
                            <label for="nav-mobile-input" class="nav-close__mobile">                       
                                <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#7dc642" d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                            </label><br> <br> <br>
                            <li><a href="index.html" class="nav-mobile">TRANG CHỦ</a></li>
                            <li><a href="gioithieu.html" class="nav-mobile">GIỚI THIỆU</a></li>
                            <li><a href="hoidap.html" class="nav-mobile">HỎI - ĐÁP</a></li>
                            <li><a href="sanpham.html" class="nav-mobile">SẢN PHẨM</a></li>
                            <li><a href="tintuc.html" class="nav-mobile">TIN TỨC</a></li>
                            <li><a href="doingu.html" class="nav-mobile">ĐỘI NGŨ</a></li>
                            <li><a href="lienhe.html" class="nav-mobile">LIÊN HỆ</a></li>
                            <li><a href="dangnhap.html" class="nav-mobile">ĐĂNG NHẬP</a></li>
                            <li><a href="giohang.html" class="nav-mobile">GIỎ HÀNG CỦA BẠN</a></li>
                        </ul>  
                </div>
            </div> 
          </div>
        </header>
           <!-- Tìm kiếm -->
           <script>
            document.getElementById('search-button').addEventListener('click', function() {
            var query = document.getElementById('search-input').value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ''); 
            // normalize và loại bỏ dấu
            
            if (query.includes('banh')) {
                window.location.href = 'sanpham.html';
            } else if (query.includes('lien')) {
                window.location.href = 'lienhe.html';
            } else if (query.includes('nhap')) {
                window.location.href = 'dangnhap.html';    
            } else {
                alert('Không có sản phẩm');
            }
        });
    
        </script>
</body>    