<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("active-slider", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active-slider";
        }
    </script>
</head>

<body>
    <div class="">
        <image class="ml-auto d-inline-block w-100" src="image/top_bn.png"></image>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <image class="col-12 col-lg-2 d-none d-lg-block" src="image/logo.png"></image>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-12 col-lg-12" id="navbarNavDropdown">
                    <ul class="navbar-nav ps-5 ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chia sẻ kĩ năng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hệ thống cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="navigation-bottom mt-auto mt-lg-0 ms-100 ps-5 ms-5">
                        <nav class="navbar navbar-light bg-light p10">
                            <div class="container-fluid">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm"
                                        aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-search pt-2" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="dropdown ">
                        <button class="btn btn-outline-secondary m-3 " type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu pop_login position-absolute p-1 m-1 text-center rounded active"
                            aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Đăng nhập</a>
                            <a class="dropdown-item" href="#">Đăng kí</a>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                            width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <div class="breadcrumbs position-relative pl-4 pr-4 pt-4 pb-4 lazy_bg loaded">
            <div class="inner position-relative text-center">
                <h1 class="cat-heading d-none d-md-block">NGHĨ THÔNG KHÔNG LAO LỰC</h1>
                <ul class="breadcrumb align-items-center justify-content-center m-0">
                    <!-- <li class="home">
                        <a href="/" title="Mew BS">Trang chủ</a>						
                        <img src="#" alt="Mew BS">
                    </li>
                    <li>
                        <a href="#">Sách kĩ năng sống</a>						
                        <img src="#" alt="Mew BS">
                    </li> -->
                    <li class="font-weight-bold"><span>NGHĨ THÔNG KHÔNG LAO LỰC</span></li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row clearfix border ">
                <div class="col-xl-9 col-lg-9 col-12 pt-4">
                    <div class="row clearfix">
                        <div class="product-layout_col-left col-12 col-sm-12 col-md-5 col-lg-5 col-xl-6 mb-3 border">
                            <img src="image/nghi-thong-khong-lao-luc.png" width="438px">
                        </div>

                        <div
                            class="product-layout_col-right col-12 col-sm-12 col-md-7 col-lg-7 col-xl-6 product-warp border">
                            <h3 class="product-name font-weight-bold text-uppercase">NGHĨ THÔNG KHÔNG LAO LỰC</h3>
                            <div class="product-info position-relative">
                                Tình trạng:
                                <span class="inventory_quantity">Còn hàng</span>
                            </div>
                            <div class="product-info position-relative">Tác giả: <span id="vendor">Hyroyuki Inoue</span>
                            </div>
                            <div class="product-info position-relative mb-3">Loại: <span id="type">Kĩ năng</span></div>
                            <div class="product-summary border-top pt-3 mt-2 pb-3">
                                <p>Nghĩ Thông Không Lao Lực - Thông qua những bài học rèn luyện kỹ năng sống và đối nhân
                                    xử thế, bạn sẽ sớm chia tay với những suy nghĩ tiêu cực và thấy lòng mình ấm áp,
                                    thanh thản hơn.</p>
                                <a class="d-block js-learn-more-link" href="javascript:;">[Xem chi tiết]</a>
                            </div>
                            <div class="product-price font-weight-bold">
                                <span class="special-price m-0">79.000₫</span>
                                <del class="old-price ml-2">100.000₫</del>
                            </div>

                            <div class="product-quantity d-sm-flex align-items-center clearfix">
                                <header class="font-weight-bold mb-2" style="min-width: 100px;">Số lượng:</header>
                                <div class="custom-btn-number border-0 d-flex">
                                    <button class="mr-2 mb-2 border rounded bg-white"
                                        onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;"
                                        type="button">-</button>
                                    <button class="mr-2 mb-2 border rounded bg-white"
                                        onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                        type="button">+</button>
                                    <input type="number" maxlength="2" name="quantity" min="1" value="1"
                                        class="form-control prd_quantity border rounded mb-2" id="qtym">
                                </div>
                            </div>
                            <div class="col-12 pt-2 pb-2">
                                <button
                                    class="btn d-flex w-100 justify-content-center flex-row align-items-center rounded pt-2 pb-2 product-action_buy js-addToCart sitdown modal-open text-uppercase font-weight-bold">
                                    Mua ngay
                                </button>
                            </div>
                        </div>

                        <div class="product-content border-top pt-4 mewcontent">
                            <h3 class="special-content_title font-weight-bold">Thông tin chi tiết</h3>
                            <div class=" position-relative rte">
                                <p><strong>Nghĩ Thông Không Lao Lực</strong></p>
                                <p><br>
                                    Trong cuộc sống đầy rẫy khó khăn này, tại sao có những người luôn sống trong buồn
                                    tẻ, trong khi số khác lại tràn đầy nhiệt huyết?<br>
                                    Làm thế nào để sống tích cực mà không lao lực?<br>
                                    <br>
                                    Nếu bạn là người hay lo lắng về tương lai hoặc luôn phức tạp hóa mọi chuyện thì đây
                                    chính là cuốn sách dành cho bạn. Thông qua những bài học rèn luyện kỹ năng sống và
                                    đối nhân xử thế, bạn sẽ sớm chia tay với những suy nghĩ tiêu cực và thấy lòng mình
                                    ấm áp, thanh thản hơn.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-12 border mt-4">
                    <div class="row align-items-center msb mb-4 d-lg-block olp">
                        <div class="item_coupon col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 mb-2">
                            <div
                                class="content o_1 text-center p-xl-2 p-lg-2 p-sm-3 p-2 my-1 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-2 mb-2 text-capitalize line_1">MewBS100</h4>
                                <p class="desc"><b>Giảm ngay 100K</b> - Mã áp dụng cuối tuần thứ 7, CN</p>
                            </div>

                            <div
                                class="content o_2 text-center p-xl-2 p-lg-2 p-sm-3 p-2 my-1 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-2 mb-2 text-capitalize line_1">MewBS100</h4>
                                <p class="desc"><b>Giảm ngay 100K</b> - Mã áp dụng cuối tuần thứ 7, CN</p>
                            </div>

                            <div
                                class="content o_3 text-center p-xl-2 p-lg-2 p-sm-3 p-2 my-1 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-2 mb-2 text-capitalize line_1">MewBS100</h4>
                                <p class="desc"><b>Giảm ngay 100K</b> - Mã áp dụng cuối tuần thứ 7, CN</p>
                            </div>
                            <div
                                class="content o_4 text-center p-xl-2 p-lg-2 p-sm-3 p-2 my-1 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-2 mb-2 text-capitalize line_1">MewBS100</h4>
                                <p class="desc"><b>Giảm ngay 100K</b> - Mã áp dụng cuối tuần thứ 7, CN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m_product col-12 mt-5 mb-5 border">
        <h2 class="title mb-4 mt-3 text-uppercase font-weight-bold text-center position-relative">
            <a class="position-relative" href="san-pham-noi-bat" title="Sản phẩm khác">Sản phẩm khác</a>
        </h2>

        <div>
            <!-- Slideshow container -->
            <div class="slideshow-container border">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides " style="display: block;">
                    <div class="border zoom p-3 d-inline-flex m-2 ">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="219px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>

                    <div class="border zoom p-3 d-inline-flex m-2">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="219px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>

                    <div class="border zoom p-3 d-inline-flex m-2">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="219px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>

                    <div class="border zoom p-3 d-inline-flex m-2">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="219px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>

                    <div class="border zoom p-3 d-inline-flex m-2">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="219px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>
                </div>

                <div class="mySlides">
                    <div class="border zoom p-3 d-inline-flex">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="220px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>

                    <div class="border zoom p-3 d-inline-flex">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="220px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>
                </div>

                <div class="mySlides">
                    <div class="border zoom p-3 d-inline-flex">
                        <div class="display_detail_image"><a href=""><img src="./image/thiet-ke-khong-ten.png"
                                    class="img-fluid mb-2" width="220px" alt=""></a></div>
                        <div class="display_detail">
                            <h5>Đừng đi quá vội</h5>
                            <div>Tác giả: Rando Kim</div>
                            <span class="special-price font-weight-bold">79.000₫</span>
                            <del class="old-price"> 100.000₫</del>
                            <h6>Chi tiết</h6>
                        </div>
                    </div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

    </div>

    <footer class="pt-5">
        <div class="container" height="500px">
            <div class="row align-items-stretch">
                <div class="col-xl-4 col-lg-3 col-md-8 col-sm-6 col-xs-12 footer-left mb-4">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">Liên hệ Mew BS</h3>
                    <p>Địa chỉ: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
                    <p>Email: <a href="mailto:support@sapo.vn " title="support@sapo.vn ">support@sapo.vn </a></p>
                    <p>Số điện thoại: <a href="tel:19006750" title="1900 6750">1900 6750</a></p>
                    <h3 class="footer-title mb-3 mt-3 position-relative font-weight-bold">Kết nối với chúng tôi</h3>
                    <div class="social position-relative">
                        <div class="onut pt-2 pb-2">
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block facebook mr-1"
                                title="Facebook">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/facebook.png?1634809483920"
                                    alt="facebook">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block twitter mr-1"
                                title="Twitter">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/twitter.png?1634809483920"
                                    alt="twitter">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block instagram mr-1"
                                title="Instagram+">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/instagram.png?1634809483920"
                                    alt="instagram">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block youtube mr-1"
                                title="Youtube">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/youtube.png?1634809483920"
                                    alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 footer-left mb-4">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">Chính sách</h3>
                    <ul class="links">

                        <li><a href="#" title="Chính sách bán hàng">Chính sách bán hàng</a></li>

                        <li><a href="#" title="Chính sách hoàn hàng">Chính sách hoàn hàng</a></li>

                        <li><a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>

                        <li><a href="#" title="Chính sách cộng tác viên">Chính sách cộng tác viên</a></li>

                        <li><a href="#" title="Chính sách COD">Chính sách COD</a></li>

                        <li><a href="#" title="Chính sách bảo hành">Chính sách bảo hành</a></li>

                    </ul>
                </div>
                <div class="col-lg-6 col-12 col-xs-12 footer-left">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">Đánh giá khách hàng</h3>
                    <div
                        class="m_people swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transition-duration: 0ms;">
                            <div class="swiper-slide item_yk swiper-slide-active"
                                style="width: 655px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="Hương Suri" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_1.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_1.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">Hương Suri</p>
                                        <p class="jt text-justify">Đội ngũ bác sĩ tại Mew Clinic rất chuyên nghiệp và
                                            tận tình. Chúc Mew Clinic phát triển mạnh mẽ hơn nữa và sớm trở thành trung
                                            tâm y tế tốt nhất Việt Nam, tôi tin chắc điều đó.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item_yk swiper-slide-next"
                                style="width: 655px; opacity: 0; transform: translate3d(-655px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="Đoàn Giang Hương" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_2.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_2.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">Đoàn Giang Hương</p>
                                        <p class="jt text-justify">Mình chọn Mew Clinic để làm nơi gửi gắm niềm tin về
                                            sức khỏe. Ở đây mọi thứ rất chuyên nghiệp, tận tình và thân thiện.
                                            Hy vọng các bạn sẽ phát triển điều đặc biệt trong các tiêu chí phục vụ của
                                            các bạn.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item_yk"
                                style="width: 655px; opacity: 0; transform: translate3d(-1310px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="Ngọc Anh" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_3.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_3.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">Ngọc Anh</p>
                                        <p class="jt text-justify">Mình chọn Mew Clinic để làm nơi gửi gắm niềm tin về
                                            sức khỏe. Ở đây mọi thứ rất chuyên nghiệp, tận tình và thân thiện.
                                            Hy vọng các bạn sẽ phát triển điều đặc biệt trong các tiêu chí phục vụ của
                                            các bạn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="swiper-pagination m_people_p position-relative col-12 col-md-3 swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide "></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide "></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>