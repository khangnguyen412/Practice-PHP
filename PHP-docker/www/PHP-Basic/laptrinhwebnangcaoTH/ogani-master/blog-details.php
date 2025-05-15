<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include './layout/header.php'
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Số dư của tài khoản: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <?php
            include './layout/menu.php';
        ?>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php
        include './layout/section.php';
    ?>
    <!-- Hero Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Chào Mừng Bạn Đến Với Ogani</h2>
                        <ul>
                            <li>Trang Web Được Thực Hiện Bởi Nhóm...</li>
                            <li>Tháng 2, 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                <?php
                    include './layout/categories.php';
                ?>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="img/blog/details/details-pic.jpg" alt="">
                        <p>Dâu tây vườn hay gọi đơn giản là dâu tây (danh pháp khoa học: Fragaria x ananassa)
                            là một chi thực vật hạt kín và loài thực vật có hoa thuộc họ Hoa hồng (Rosaceae).
                            Dâu tây xuất xứ từ châu Mỹ và được các nhà làm vườn châu Âu cho lai tạo vào thế kỷ
                            18 để tạo nên giống dâu tây được trồng rộng rãi hiện nay. Loài này được (Weston) 
                            Duchesne miêu tả khoa học đầu tiên năm 1788. Loại quả này được nhiều người đánh giá 
                            cao nhờ hương thơm đặc trưng, màu đỏ tươi, mọng nước và vị ngọt. Nó được tiêu thụ 
                            với số lượng lớn, hoặc được tiêu thụ dưới dạng dâu tươi hoặc được chế biến thành mứt, 
                            nước trái cây, bánh nướng, kem, sữa lắc và sôcôla. Nguyên liệu và hương liệu dâu nhân 
                            tạo cũng được sử dụng rộng rãi trong các sản phẩm như kẹo, xà phòng, son bóng, nước hoa, 
                            và nhiều loại khác.</p>
                        <h3>Mô tả và phát triển.</h3>
                        <p>Dâu tây thường được phân nhóm theo thói quen nở hoa. Thông thường, việc phân nhóm bao gồm
                            sự phân chia giữa dâu tây "mang trái vào Tháng 6", chúng ra quả vào đầu mùa hè và dâu tây 
                            "từng ra quả" ("ever-bearing"), thường ra quả vài vụ trong suốt mùa. Một cây trong suốt 
                            một mùa có thể ra hoa từ 50 đến 60 lần hoặc khoảng ba ngày một lần. Một nghiên cứu được 
                            công bố vào năm 2001 cho thấy dâu tây thực sự có ba thói quen ra hoa cơ bản: ngắn ngày, 
                            dài ngày và trung tính. Những điều này liên quan đến độ nhạy kéo dài trong nhiều ngày của 
                            cây và quang kỳ dẫn đến sự hình thành hoa. Các giống cây 'trung tính - ban ngày' thì ra 
                            hoa không phụ thuộc vào quang kỳ. </p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Nguyễn Mạnh Quốc Khang</h6>
                                        <span>Quản Trị Viên</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Danh mục:</span> Thức Ăn</li>
                                        <li><span>Thẻ:</span> Tất cả, Trào lưu, Nấu ăn, Thực phẩm dinh dưỡng, Lối sống</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Các bài viết có thể bạn thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>Tháng 2,2022</li>
                                <li><i class="fa fa-comment-o"></i> 6</li>
                            </ul>
                            <h5><a href="#">Các mẹo để nấu ăn trở nên đơn giản hơn</a></h5>
                            <p>Để món ăn ngon như ngoài nhà hàng, 
                                bạn không nên bỏ qua những mẹo vào 
                                bếp từ chế biến thịt, đến nướng cá, 
                                làm bánh,… mà Ogani giới thiệu. Hãy cùng vào bếp và trổ tài nhé!...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 cách để chuẩn bị buổi sáng 30phút</a></h5>
                            <p>Các chuyên gia dinh dưỡng cho rằng bữa ăn sáng là bữa ăn quan trọng nhất trong ngày và là nền tảng để cung cấp dinh dưỡng có lợi nhất cho sức khoẻ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Ghé thăm các trang trại của mỹ</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <?php
            include './layout/footer.php';
        ?>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
        include './layout/script.php'
    ?>
</body>

</html>