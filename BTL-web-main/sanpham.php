<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="icon" href="images/logo_cake_1-removebg-preview.png" type = "image/x-icon"> <!--FAVICON-->
    <link rel="stylesheet" href="css/sanpham.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/root.css">
    <!-- link font logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header>     
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
    </script>
    <!-- BOOKMARK -->
    <div class="bookmark" >
        <div class="content-bookmark">
            <div>
                <h1>Sản Phẩm</h1>
                <h3>HOT SALE</h3>
            </div>
        </div>
    </div>
    <!-- Banh sinh nhat -->
     <div class="contaner-product-section-1">
        <div class="phukien">
            <div class="banh-widget">
                <div class="widget-content">
                    <h3>Bánh sinh nhật</h3>
                    <a href="banhsinhnhat.html">Xem thêm</a>
                </div>
            </div>
            <div class="banh-list">
                <div class="product-container" style="width: 40%;">
                    <a href="sanPham-letterToSanta.html"> 
                        <img src="images/banhsinhnhat1.avif" alt="">
                        <p class="product-name">Letter to Santa</p>
                        <p class="price">Sô-cô-la, Dâu rừng & Vani <br> 735.000 ₫</p>
                    </a>
                </div>
                <div class="product-container" style="width: 40%;">
                    <a href=""> 
                        <img src="images/banhsinhnhat2.avif" alt="">
                        <p class="product-name">Secret Garden</p>
                        <p class="price">Sô-cô-la, Dâu rừng & Vani <br> 735.000 ₫</p>
                    </a>
                </div>
                
            </div>
       </div>
     </div>

    <!-- Banh nua -->
     <div class="contaner-product-section-2">
        <div class="banhnua">
            <div class="banh-widget">
                <div class="widget-content">
                    <h3>Bánh nửa Entremet</h3>
                    <a href="">Xem thêm</a>
                </div>
            </div>
            <div class="banh-list">
                <div class="product-container" style="width: 40%;">
                    <a href=""> 
                        <img src="images/banhnua1.avif" alt="">
                        <p class="product-name">Mangopaco</p>
                        <p class="price">Sô-cô-la, Dâu rừng & Vani <br> 445.000 ₫</p>
                    </a>
                </div>
                <div class="product-container" style="width: 40%;">
                    <a href=""> 
                        <img src="images/banhnua2.avif" alt="">
                        <p class="product-name">Chocovani</p>
                        <p class="price">Sô-cô-la, Dâu rừng & Vani <br> 455.000 ₫</p>
                    </a>
                </div>                
            </div>
       </div>
     </div>
    
   <!-- Phu kien-->
   <div class="contaner-product-section-3">
    <div class="phukien">
        <div class="banh-widget">
            <div class="widget-content">
                <h3>Phụ kiện bánh</h3>
                <a href="">Xem thêm</a>
            </div>
        </div>
        <div class="banh-list">
            <div class="product-container" style="width: 40%;">
                <a href=""> 
                    <img src="images/phukien-1.avif" alt="">
                    <p class="product-name">Thiệp Let is be Cheer</p>
                    <p class="price">15.000 ₫</p>
                </a>
            </div>
            <div class="product-container" style="width: 40%;">
                <a href=""> 
                    <img src="images/phukien-2.avif" alt="">
                    <p class="product-name">Thiệp Merry Christmas</p>
                    <p class="price">15.000 ₫</p>
                </a>
            </div>
            
            
            
        </div>
    </div>    
   </div>
   
    <script src="././js/brand.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
          <div class="footer-info">
            <img
              src="./images/logo cake 1.png"
              width="150px"
              height="100px"
              alt="logo"
            />
            <h2>VTQ Bakery</h2>
            <p>Trụ sở 1: 12 Chùa Bộc, Đống Đa, Hà Nội</p>
            <p>Trụ sở 2: 232 Lê Lợi, Quận 1, TP.Hồ Chí Minh</p>
            <p>Email: VTQ@gmail.com</p>
            <p>SDT: 0987654321</p>
          </div>
          <div class="footer-gioithieu">
            <h3>Thông tin</h3>
            <ul>
              <li><a href="">>> &nbsp; Giới thiệu</a></li>
              <li><a href="">>> &nbsp; Tin tức</a></li>
              <li><a href="">>> &nbsp; Đội ngũ</a></li>
              <li><a href="">>> &nbsp; Liên hệ</a></li>
            </ul>
          </div>
          <div class="footer-sanpham">
            <h3>Sản Phẩm</h3>
            <ul>
              <li><a href="">>> &nbsp; Bánh sinh nhật</a></li>
              <li><a href="">>> &nbsp; Bánh nửa Entremet</a></li>
              <li><a href="">>> &nbsp; Phụ kiện bánh</a></li>
            </ul>
          </div>
          <div class="footer-phanphoi">
            <h3 style="padding-left : 30px; padding-bottom: 10px;">Cổng giao dịch</h3>
            <ul class="image-container">
              <li class="footer-item">
                <img
                  src="./images/pay01.png"
                  alt="eon"
                  class="footer-img"
                  style="width: 100px; height: 30px"
                />
              </li>
              <li class="footer-item">
                <img
                  src="./images/pay02.jpg"
                  alt=""
                  class="footer-img"
                  style="width: 100px; height: 50px"
                />
              </li>
             
              </li>
            </ul>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <div class="footer-bottom">
          <p>
            Bản quyền
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="14"
              width="14"
              viewBox="0 0 512 512"
            >
              <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                fill="#000000"
                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM199.4 312.6c-31.2-31.2-31.2-81.9 0-113.1s81.9-31.2 113.1 0c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9c-50-50-131-50-181 0s-50 131 0 181s131 50 181 0c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0c-31.2 31.2-81.9 31.2-113.1 0z"/>
            </svg>
            &nbsp;2024 VTQ Bakery - Lập trình và thiết kế bởi Nhóm 2
          </p>
        </div>
      </footer>
    <script src="js/header.js"></script>
</body>
</html>
