<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Reset CSS-->
    <link rel="stylesheet" href="css/normalize.css">

    <!--Style.CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive.CSS-->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!--PHP-->
<?php
    include "PHP/config.php";
?>
<!--HTML-->
<div id="index" >
    <header class="header-page">
        <div class="head-style">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-5">
                            <div class="menu-1">
                                <ul>
                                    <li>
                                        <a href="#" title="FPT TELECOM">FPT TELECOM</a>
                                    </li>
                                    <li>
                                        <a href="#" title="KHÁCH HÀNG CÁ NHÂN">KHÁCH HÀNG CÁ NHÂN</a>
                                    </li>
                                    <li>
                                        <a href="#" title="KHÁCH HÀNG DOANH NGHIỆP">KHÁCH HÀNG DOANH NGHIỆP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1 col-lg-3">
                            <div id="search">
                                <form action="#" name="search">
                                    <input type="text">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-4">
                            <div class="menu-2" >
                                <ul>
                                    <li>
                                        <a href="#" title="Điểm giao dịch">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>Điểm giao dịch</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="LPS">
                                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                                            <span>LPS</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Đăng nhập">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                            <span>Đăng nhập</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/logo/en.png" alt="">
                                            <span>English</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <nav id="main-menu">
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <div class="logo-main">
                                    <a href="#" title="FPT Telecom">
                                        <img src="images/logo/logo.png" alt="FPT Telecom">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                <div class="menu-item">
                                    <ul>
                                        <li>
                                            <div class="menu-item-1">
                                                <a href="#">SẢN PHẨM DỊCH VỤ</a>
                                                <ul class="dropmenu sub-menu-1 clearfix">
                                                    <!--Submenu-1-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Internet FPT">
                                                                    <img src="images/sub-menu/submenu-internet.png" alt="Internet FPT" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-internet-hover.png" alt="Internet FPT" class="hover">
                                                                    <span>Internet FPT</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Cáp quang FFTH">
                                                                            <span>Cáp quang FFTH</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Cáp đồng ADSL">
                                                                            <span>Cáp đồng ADSL</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-2-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Truyền hình FPT">
                                                                    <img src="images/sub-menu/submenu-tv.png" alt="Truyền hình FPT" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-tv-hover.png" alt="Truyền hình FPT" class="hover">
                                                                    <span>Truyền hình FPT</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Gói cơ bản">
                                                                            <span>Gói cơ bản</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Gói mở rộng">
                                                                            <span>Gói mở rộng</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Lịch phát sóng">
                                                                            <span>Lịch phát sóng</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-3-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Dịch vụ Online">
                                                                    <img src="images/sub-menu/submenu-online.png" alt="Dịch vụ Online" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-online-hover.png" alt="Dịch vụ Online" class="hover">
                                                                    <span>Dịch vụ Online</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="FPT Play">
                                                                            <span>FPT Play</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="FPT Play Box">
                                                                            <span>FPT Play Box</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Fshare">
                                                                            <span>Fshare</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Fsend">
                                                                            <span>Fsend</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Startalk">
                                                                            <span>Startalk</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Mix166">
                                                                            <span>Mix166</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-4-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="IOT/Smart Home">
                                                                    <img src="images/sub-menu/submenu-iot.png" alt="IOT/Smart Home" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-iot-hover.png" alt="IOT/Smart Home" class="hover">
                                                                    <span>IOT/Smart Home</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Home security">
                                                                            <span>Home security</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item-2">
                                                <a href="#">KHUYẾN MẠI</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item-3">
                                                <a href="#">HỖ TRỢ</a>
                                                <ul class="dropmenu sub-menu-3 clearfix ">
                                                    <!--Submenu-1-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Hỗ trợ thông tin">
                                                                    <img src="images/sub-menu/submenu-information.png" alt="Hỗ trợ thông tin" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-information-hover.png" alt="Hỗ trợ thông tin" class="hover">
                                                                    <span>Hỗ trợ thông tin</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Câu hỏi thường gặp">
                                                                            <span>Câu hỏi thường gặp</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Hướng dẫn sử dụng">
                                                                            <span>Hướng dẫn sử dụng</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Lịch phát sóng">
                                                                            <span>Lịch phát sóng</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Hướng dẫn thủ tục">
                                                                            <span>Hướng dẫn thủ tục</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quản lý chất lượng dịch vụ">
                                                                            <span>Quản lý chất lượng dịch vụ</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-2-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Hỗ trợ kĩ thuật">
                                                                    <img src="images/sub-menu/submenu-technical.png" alt="Hỗ trợ kĩ thuật" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-technical-hover.png" alt="Hỗ trợ kĩ thuật" class="hover">
                                                                    <span>Hỗ trợ kĩ thuật</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Hướng dẫn cài đặt">
                                                                            <span>Hướng dẫn cài đặt</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Xử lý sự cố">
                                                                            <span>Xử lý sự cố</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-3-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Liên hệ 24/7">
                                                                    <img src="images/sub-menu/submenu-contact.png" alt="Liên hệ 24/7" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-contact-hover.png" alt="Liên hệ 24/7" class="hover">
                                                                    <span>Liên hệ 24/7</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Hi FPT">
                                                                            <span>Hi FPT</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Điểm giao dịch">
                                                                            <span>Điểm giao dịch</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Tổng đài 1900 6600">
                                                                            <span>Tổng đài 1900 6600</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Email">
                                                                            <span>Email</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Live Chat">
                                                                            <span>Live Chat</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Facebook">
                                                                            <span>Facebook</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-4-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Phản hồi khách hàng">
                                                                    <img src="images/sub-menu/submenu-feedback.png" alt="Phản hồi khách hàng" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-feedback-hover.png" alt="Phản hồi khách hàng" class="hover">
                                                                    <span>Phản hồi khách hàng</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Góp ý">
                                                                            <span>Góp ý</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Khảo sát">
                                                                            <span>Khảo sát</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Đánh giá về Website">
                                                                            <span>Đánh giá về Website</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item-4">
                                                <a href="#">MEMBER FPT</a>
                                                <ul class="dropmenu sub-menu-4 clearfix ">
                                                    <!--Submenu-1-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Tài khoản của bạn">
                                                                    <img src="images/sub-menu/submenu-account.png" alt="Tài khoản của bạn" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-account-hover.png" alt="Tài khoản của bạn" class="hover">
                                                                    <span>Tài khoản của bạn</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Thông tin hợp đồng">
                                                                            <span>Thông tin hợp đồng</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Hợp đồng điện tử">
                                                                            <span>Hợp đồng điện tử</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Đổi mật khẩu">
                                                                            <span>Đổi mật khẩu</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Nghiệm thu triển khai">
                                                                            <span>Nghiệm thu triển khai</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Nghiệm thu bảo trì">
                                                                            <span>Nghiệm thu bảo trì</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-2-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Thanh toán">
                                                                    <img src="images/sub-menu/submenu-payment.png" alt="Thanh toán" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-payment-hover.png" alt="Thanh toán" class="hover">
                                                                    <span>Thanh toán</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Thanh toán trực tuyến">
                                                                            <span>Thanh toán trực tuyến</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Đăng kí trả trước">
                                                                            <span>Đăng kí trả trước</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Lịch sử thanh toán">
                                                                            <span>Lịch sử thanh toán</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quản lý thẻ thanh toán">
                                                                            <span>Quản lý thẻ thanh toán</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-3-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Khách hàng thân thiết">
                                                                    <img src="images/sub-menu/submenu-gift.png" alt="Khách hàng thân thiết" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-gift-hover.png" alt="Khách hàng thân thiết" class="hover">
                                                                    <span>Khách hàng thân thiết</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Giới thiệu chung">
                                                                            <span>Giới thiệu chung</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Điều khoản và chính sách">
                                                                            <span>Điều khoản và chính sách</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--Submenu-4-->
                                                    <li class="submenu">
                                                        <ul>
                                                            <li class="menu-icon">
                                                                <a href="#" title="Hỗ trợ">
                                                                    <img src="images/sub-menu/submenu-support.png" alt="Hỗ trợ" class="non-hover">
                                                                    <img src="images/sub-menu/submenu-support-hover.png" alt="Hỗ trợ" class="hover">
                                                                    <span>Hỗ trợ</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Gửi yêu cầu">
                                                                            <span>Gửi yêu cầu</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Lịch sử yêu cầu">
                                                                            <span>Lịch sử yêu cầu</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item-5">
                                                <a href="#">ĐĂNG KÍ ONLINE</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="menu-item-6">
                                                <a href="#">THANH TOÁN ONLINE</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="head-style-responsive">
            <div class="container-fuide">
                <nav class="menu-second row">
                    <div class="col-2 menu-btn">
                        <button id="button-menu">
                            <img src="images/logo/f-toggle.png" alt="" id="btn" onclick="Show()">
                            <img src="images/logo/f-toggle-x.png" alt="" id="btn-x" style="display:none;" onclick="Hide()">
                        </button>
                    </div>
                    <div class="col-1 search">
                        <form action="#">
                            <img src="images/logo/f-search.png" alt="">
                        </form>
                    </div>
                    <div class="col-6 logo">
                        <a href="#"><img src="images/logo/logo.png" alt=""></a>
                    </div>
                    <div class="col-3">
                        <p>VỀ FPT TELECOM</p>
                    </div>
                    <div id="menu-responsive" style="display: none">
                        <ul>
                            <li>
                                <a href="#" title="Sản phẩm dịch vụ">SẢN PHẨM DỊCH VỤ</a>
                                <ul class="menu-responsive-sub">
                                    <li><a href="#" title="Internet FPT">Internet FPT</a></li>
                                    <li><a href="#" title="Truyền hình FPT">Truyền hình FPT</a></li>
                                    <li><a href="#" title="Dịch vụ Online">Dịch vụ Online</a></li>
                                    <li><a href="#" title="IOT/Smart Home">IOT/Smart Home</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Khuyến mại">KHUYẾN MẠI</a></li>
                            <li>
                                <a href="#" title="Hỗ trợ">HỖ TRỢ</a>
                                <ul class="menu-responsive-sub">
                                    <li><a href="#" title="Hỗ trợ thông tin">Hỗ trợ thông tin</a></li>
                                    <li><a href="#" title="Hỗ trợ kỹ thuật">Hỗ trợ kỹ thuật</a></li>
                                    <li><a href="#" title="Liên hệ 24/7">Liên hệ 24/7</a></li>
                                    <li><a href="#" title="Phản hồi khách hàng">Phản hồi khách hàng</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Member FPT">MEMBER FPT</a>
                                <ul class="menu-responsive-sub">
                                    <li><a href="#" title="Tài khoản của bạn">Tài khoản của bạn</a></li>
                                    <li><a href="#" title="Hỗ trợ kỹ thuật">Thanh toán</a></li>
                                    <li><a href="#" title="Khách hàng thân thiết">Khách hàng thân thiết</a></li>
                                    <li><a href="#" title="Hỗ trợ">Hỗ trợ</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Đăng kí Online">ĐĂNG KÍ ONLINE</a></li>
                            <li><a href="#" title="Thanh toán Online">THANH TOÁN ONLINE</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="main-page">
        <div class="slideshow">
            <?php
            $sqlQuery = "SELECT * FROM slide_show";
            $result = mysqli_query($connection,$sqlQuery);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <div class="mySlides fade">
                        <a href="#"><img src="<?php echo $row['src']?>" alt="<?php echo $row['alt']?>"></a>
                    </div>
                    <?php
                }
            }
            ?>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)" title="Previous">&#10094;</a>
            <a class="next" onclick="plusSlides(1)" title="Next">&#10095;</a>
            <!-- The dots/circles -->
            <div class="num-list">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
            </div>
        </div>
        <div class="content">
            <div class="title">
                <div class="container">
                    <div class=" row">
                        <div class="col-sm-4 col-md-3 col-lg-2">
                            <a href="#" title="Về FPT Telecom">
                                <span>Về FPT Telecom</span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="#" title="Giới thiệu chung">
                                <span>Giới thiệu chung</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-intro">
                <div class="container">
                    <div class="intro">
                        <div class="intro-item">
                            <a href="#" title="Giới thiệu chung">
                                <img src="images/intro/introduction.png" alt="Giới thiệu chung">
                                <p>Giới thiệu chung</p>
                            </a>
                        </div>
                        <div class="intro-item">
                            <a href="#" title="Liên kết thành viên">
                                <img src="images/intro/members.png" alt="Liên kết thành viên">
                                <p>Liên kết thành viên</p>
                            </a>
                        </div>
                        <div class="intro-item">
                            <a href="#" title="Khách hàng - Đối tác">
                                <img src="images/intro/partners.png" alt="Khách hàng - Đối tác">
                                <p>Khách hàng - Đối tác</p>
                            </a>
                        </div>
                        <div class="intro-item">
                            <a href="#" title="Quan hệ cổ đông">
                                <img src="images/intro/shareholders.png" alt="Quan hệ cổ đông">
                                <p>Quan hệ cổ đông</p>
                            </a>
                        </div>
                        <div class="intro-item">
                            <a href="#" title="Tập đoàn FPT">
                                <img src="images/intro/fpt.png" alt="Tập đoàn FPT">
                                <p>Tập đoàn FPT</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-intro-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="img-intro">
                                <img src="images/intro/fptvn_veftel_gioithieu.png" alt="FPTVN">
                                <p>"Khách hàng là trọng tâm"</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-8">
                            <div class="content-intro">
                                <p>
                                    <strong>Là thành viên thuộc Tập đoàn công nghệ hàng đầu Việt Nam FPT</strong>
                                </p>
                                <p>
                                    Công ty Cổ phần Viễn thông FPT (tên gọi tắt là FPT Telecom) hiện là một trong những nhà cung cấp dịch vụ viễn thông và Internet có uy tín và được khách hàng yêu mến tại Việt Nam và Khu vực.
                                </p>
                                <p>
                                    Thành lập ngày 31/01/1997, khởi nguồn từ Trung tâm Dịch vụ Trực tuyến do 4 thành viên sáng lập cùng sản phẩm mạng Intranet đầu tiên của Việt Nam mang tên “Trí tuệ Việt Nam – TTVN”, sản phẩm được coi là đặt nền móng cho sự phát triển của Internet tại Việt Nam.
                                </p>
                                <div class="number-list">
                                    <?php
                                    $sqlQuery = "SELECT * FROM company_size";
                                    $result = mysqli_query($connection,$sqlQuery);
                                    if(mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                    }
                                    ?>
                                    <div class="number">
                                        <p>
                                            Sau <br> <span><?php echo $row['time']?></span> <br> NĂM HOẠT ĐỘNG
                                        </p>
                                    </div>
                                    <div class="number">
                                        <p>
                                            Có hơn <br> <span><?php echo $row['employees']?></span> <br> NHÂN VIÊN CHÍNH THỨC
                                        </p>
                                    </div>
                                    <div class="number">
                                        <p>
                                            Với gần <br> <span><?php echo $row['offices']?></span> <br> VĂN PHÒNG GIAO DỊCH
                                        </p>
                                    </div>
                                    <div class="number">
                                        <p>
                                            Tại <br> <span><?php echo $row['province']?></span> <br> TỈNH THÀNH
                                        </p>
                                    </div>
                                    <div class="number">
                                        <p>
                                            Thuộc hơn <br> <span><?php echo $row['branch']?></span> <br> CHI NHÁNH
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Với sứ mệnh tiên phong đưa Internet đến với người dân Việt Nam và mong muốn mỗi gia đình Việt Nam đều sử dụng ít nhất một dịch vụ của FPT Telecom, đồng hành cùng phương châm "Khách hàng là trọng tâm", chúng tôi không ngừng nỗ lực đầu tư hạ tầng, nâng cấp chất lượng sản phẩm – dịch vụ, tăng cường ứng dụng công nghệ mới để mang đến cho khách hàng những trải nghiệm sản phẩm dịch vụ vượt trội.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-intro-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-7">
                            <iframe src="https://www.youtube.com/embed/iIhgSeqsHzo"></iframe>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5">
                            <img src="images/intro/gioithieu_20.png" alt="Giới thiệu FPT">
                            <p>
                                "Mọi dịch vụ <br> trên một kết nối"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-intro-3">
                <div class="container">
                    <div class="row">
                        <img src="images/intro/lich_su_phat_trien.png" alt="Lịch sử phát triển">
                    </div>
                </div>
            </div>
            <div class="box-intro-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="title-item">
                                <img src="images/intro/i-support.png" alt="i-support.png">
                                <span>Lĩnh vực kinh doanh</span>
                            </span>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <ul class="list-style-orange">
                                <li>Cung cấp hạ tầng mạng viễn thông cho dịch vụ Internet băng rộng.</li>
                                <li>Cung cấp các sản phẩm, dịch vụ viễn thông, Internet.</li>
                                <li>Dịch vụ giá trị gia tăng trên mạng Internet, điện thoại di động.</li>
                                <li>Dịch vụ Truyền hình.</li>
                                <li>Dịch vụ tin nhắn, dữ liệu, thông tin giải trí trên mạng điện thoại di động.</li>
                                <li>Thiết lập hạ tầng mạng và cung cấp các dịch vụ viễn thông, Internet.</li>
                                <li>Xuất nhập khẩu thiết bị viễn thông và Internet.</li>
                                <li>Dịch vụ viễn thông cố định nội hạt.</li>
                                <li>Dịch vụ viễn thông giá trị gia tăng.</li>
                                <li>Dịch vụ viễn thông cố định đường dài trong nước, quốc tế.</li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img class="img-support" src="images/intro/gioithieu-hotro.png" alt="Giới thiệu hỗ trợ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-intro-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img class="img-support" src="images/intro/gioithieu-huychuong.png" alt="Giới thiệu huy chương">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="col-sm-12">
                                <span class="title-item">
                                    <img src="images/intro/i-cup.png" alt="i-cup.png">
                                    <span>CÁC GIẢI THƯỞNG TIÊU BIỂU</span>
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <ul class="list-style-orange">
                                    <li>Giải thưởng TOP ICT 2017 của HCA</li>
                                    <li>Giải thưởng Doanh nghiệp chuyển đổi kỹ thuật số ATSA 2016</li>
                                    <li>Danh hiệu Sao khuê liên tiếp trong nhiều năm từ 2012 – 2015</li>
                                    <li>Huy chương Vàng ICT Việt Nam 2015</li>
                                    <li>Thương hiệu Việt tiêu biểu 2014</li>
                                    <li>Doanh nghiệp dịch vụ được hài lòng nhất 2013</li>
                                    <li>Huy chương Vàng đơn vị Internet, Viễn thông 2012</li>
                                    <li>Huy chương Vàng đơn vị CNTT-TT Việt Nam 2006</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-intro-6">
                <div class="container">
                    <div class="title-item">
                        <span>
                            <img src="images/intro/i-chungchi.png" alt="i-chungchi.png">
                            <span>CÁC CHỨNG CHỈ QUỐC TẾ</span>
                        </span>
                    </div>
                    <div class="img">
                        <?php
                        $sqlQuery = "SELECT * FROM international_certificate";
                        $result = mysqli_query($connection,$sqlQuery);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <img src="<?php echo $row['src']?>" alt="">
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="box-intro-7">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="title-item">
                                <img src="images/intro/i-contract.png" alt="i-contact.png">
                                <span>LIÊN HỆ</span>
                            </span>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="info-contact row">
                                <div class="col-sm-12 col-md-12 info-contact-1">
                                    <p>
                                        Tổng đài Chăm sóc khách hàng 24/7: <br> <a href="#">1900 6600</a>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 info-contact-2">
                                    <div>
                                        <p>Hòm thư khách hàng:</p>
                                        <p class="icon">
                                            <img src="images/intro/i-mail.png" alt="i-mail.png">
                                            <strong><a href="#">hotrokhachhang@fpt.com.vn </a></strong>
                                        </p>
                                    </div>
                                    <div>
                                        <p>Website chính thức:</p>
                                        <p class="icon">
                                            <img src="images/intro/i-web.png" alt="i-web.png">
                                            <strong><a href="#">www.fpt.vn</a></strong>
                                        </p>
                                    </div>
                                    <div>
                                        <p>Facebook chính thức:</p>
                                        <p class="icon">
                                            <img src="images/intro/i-fb.png" alt="i-fb.png">
                                            <strong><a href="#">www.facebook.com/fpttelecom</a></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="address row">
                                <div class="col-sm-12">
                                    <p><strong>TRỤ SỞ:</strong></p>
                                    <div class="address-sub">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>
                                            <span>Hà Nội:</span>
                                            <a href="#">Tòa nhà PVI, số 1 Phạm Văn Bạch, Cầu Giấy</a>
                                            <br> <a href="#">Tel: +84 24 7300 2222 | Fax: +84 24 7300 8889.</a>
                                        </p>
                                    </div>
                                    <div class="address-sub">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>
                                            <span>Đà Nẵng:</span>
                                            <a href="#">182 - 184 Đường 2 tháng 9, Hải Châu</a>
                                            <br> <a href="#">Tel: +84 236 7300 2222 | Fax: +84 236 3899 889.</a>
                                        </p>
                                    </div>
                                    <div class="address-sub">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>
                                            <span>TP.HCM:</span>
                                            <a href="#">Lô 37-39A, đường 19, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7</a>
                                            <br> <a href="#">Tel: +84 28 7300 2222 | Fax: +84 28 7300 8889.</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-page">
        <div class="container">
            <div class="four-column-footer row">
                <div class="col-12 col-sm-2 col-md-2">
                    <h4>Về FPT Telecom</h4>
                    <ul>
                        <li><a href="#" title="Giới thiệu chung">Giới thiệu chung</a></li>
                        <li><a href="#" title="Liên kết - Thành viên">Liên kết - Thành viên</a></li>
                        <li><a href="#" title="Khách hàng - Đối tác">Khách hàng - Đối tác</a></li>
                        <li><a href="#" title="Quan hệ cổ đông">Quan hệ cổ đông</a></li>
                        <li><a href="#" title="Tập đoàn FPT">Tập đoàn FPT</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-3 col-md-3">
                    <h4>Khách hàng FPT Telecom</h4>

                    <ul>
                        <li><a href="#" title="Hướng dẫn sử dụng dịch vụ">Hướng dẫn sử dụng dịch vụ</a></li>
                        <li><a href="#" title="Hỗ trợ kỹ thuật">Hỗ trợ kỹ thuật</a></li>
                        <li><a href=#" title="Thanh toán Online">Thanh toán Online</a></li>
                        <li><a href="#" title="Góp ý khách hàng">Góp ý khách hàng</a></li>
                        <li><a href="#" title="Lịch phát sóng">Lịch phát sóng</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-3 col-md-3" style="padding-right: 0px">
                    <h4>Chưa là khách hàng của FPT Telecom</h4>

                    <ul>
                        <li><a href="#" title="Đăng ký Online">Đăng ký Online</a></li>
                        <li><a href="#" title="Sản phẩm dịch vụ">Sản phẩm dịch vụ</a></li>
                        <li><a href="#" title="Khuyến mại">Khuyến mại</a></li>
                        <li><a href="#" title="Tìm điểm giao dịch">Tìm điểm giao dịch</a></li>
                        <li><a href="#" title="Tin tức">Tin tức</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4">
                    <a href="#" title="FPT Jobs">
                        <img src="images/footer/fptjobs.png" alt="FPTjob.png">
                    </a>
                </div>
            </div>
            <div class="two-column-footer row">
                <div class="col-12 col-sm-5 col-md-5">
                    <h4>Follow Us</h4>
                    <div class="logo-follow">
                        <div>
                            <a href="#" title="Facebook"><img src="images/footer/follow/face.png" alt="face.png"></a>
                        </div>
                        <div>
                            <a href="#" title="Hi FPT"><img src="images/footer/follow/logo-hifpt.png" alt="logo-hifpt.png"></a>
                        </div>
                        <div>
                            <a href="#" title="YouTube"><img src="images/footer/follow/youtube.png" alt="youtube.png"></a>
                        </div>
                        <div>
                            <a href="#" title="Instagram"><img src="images/footer/follow/instagram.png" alt="instagram.png"></a>
                        </div>
                        <div>
                            <a href="#" title="Zalo"><img src="images/footer/follow/zalo.png" alt="zalo.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <h4>Link sản phẩm dịch vụ</h4>
                    <div class="slider-logo-footer">
                        <?php
                        $sqlQuery = "SELECT * FROM product";
                        $result = mysqli_query($connection,$sqlQuery);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                <div>
                                    <img src="<?php echo $row['src']?>" alt="<?php echo $row['alt']?>">
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="license row">
                        <div class="col-sm-6">
                            <p>Giấy chứng nhận ĐKKD số 0101778163 do Sở Kế hoạch Đầu tư Thành phố Hà Nội cấp ngày 28/07/2005</p>
                        </div>
                        <div class="col-sm-3">
                            <img src="images/footer/20150827110756-dathongbao.png" alt="Thongbao.png">
                        </div>
                        <div class="col-sm-3">
                            <img src="images/footer/small_logo_background_left.png" alt="small_logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-menu">
            <div class="container">
                <ul class="row">
                    <li class="col-sm-2"><a href="#" title="Sản phẩm dịch vụ">SẢN PHẨM DỊCH VỤ</a></li>
                    <li class="col-sm-2"><a href="#" title="Khuyến mại">KHUYẾN MẠI</a></li>
                    <li class="col-sm-2"><a href="#" title="Hỗ trợ">HỖ TRỢ</a></li>
                    <li class="col-sm-2"><a href="#" title="Member FPT">MEMBER FPT</a></li>
                    <li class="col-sm-2"><a href="#" title="Đăng kí Online">ĐĂNG KÍ ONLINE</a></li>
                    <li class="col-sm-2" style="padding-left:0;padding-right: 0;"><a href="#" title="Thanh toán Online">THANH TOÁN ONLINE</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-logo">
            <a href="#" title="FPT Telecom">
                <img src="images/footer/footer_logo.png" alt="footer_logo.png">
            </a>
            <span>© 2018 - Bản quyền thuộc về FPT Telecom</span>
        </div>
    </footer>

</div>
<!--Javascript.js-->
<script LANGUAGE="JavaScript" SRC="js/responsive.js"></script>
<script language="JavaScript" src="js/javascript.js"></script>
</body>
</html>