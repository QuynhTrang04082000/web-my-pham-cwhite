<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title> CWHITE Shop</title>
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets/frontend/img/logo2.png" type="image/x-icon" />
<!--  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">  -->
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
  
    <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css">
</head>
<body class="index">
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605c96a7f7ce18270933dc73/1f1kqp00i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">CWHITE Shop</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3">
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/img/bia5.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/img/lips.jpg" class="img-thumbnail"></div>
        </div>
      </div>
      <div class="col-md-9"> 
        <!-- slide -->
        <div class="owl-slider" style="z-index: -1">
          <div class="item"> 
            <!-- ============================ -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active"> <img src="assets/frontend/img/bia2.jpg" alt="Los Angeles" style="height: 530px; "> </div>
                <div class="item"> <img src="assets/frontend/img/nuochoadiior.jpg" alt="Los Angeles"style="height: 530px; "> </div>
                
                <div class="item"> <img src="assets/frontend/img/missha-1.jpg" alt="New York"style="height: 530px;"> </div>
              </div>
              
              <!-- Left and right controls --> 
            </div>
            <!-- ============================ --> 
          </div>
        </div>
        <!-- end slide --> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12"> 
        <!-- main -->
        
        <?php echo $this->view; ?> 
        
        <!-- end main --> 
      </div>
    </div>
  </div>
</div>
<!-- <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/frontend/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>GIAO HÀNG MIỄN PHÍ</h6>
                                <p>Cho tất cả đơn hàng trên 500.000VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/frontend/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>GIAO HÀNG ĐÚNG HẠN</h6>
                                <p>Không phải chờ đợi lâu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/frontend/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>THANH TOÁN AN TOÀN</h6>
                                <p>100% Thanh Toán An Toàn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao hàng miễn phí</h3>
          <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
        <div class="info">
          <h3>Khuyến mại</h3>
          <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
        <div class="info">
          <h3>Hoàn trả lại tiền</h3>
          <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>Về chúng tôi</h3>
          <ul class="list-unstyled">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="gioi-thieu">Giới thiệu</a></li>
            <li><a href="tin-tuc">Tin tức</a></li>
            <li><a href="gioi-thieu">Liên hệ</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Hướng dẫn</h3>
          <ul class="list-unstyled">
            <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
            <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
            <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
            <li><a href="account/register">Đăng ký thành viên</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Chính sách</h3>
          <ul class="list-unstyled">
            <li><a href="chinh-sach">Chính sách thanh toán</a></li>
            <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
            <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
            <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Điều khoản</h3>
          <ul class="list-unstyled">
            <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
            <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
            <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
            <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
          </ul>
        </div>
      </div>
      <div class="payments-method"> <img src="assets/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> © Bản quyền DKT Store</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
 <script src="assets/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/jquery-ui.min.js"></script>
    <script src="assets/frontend/js/jquery.countdown.min.js"></script>
    <script src="assets/frontend/js/jquery.nice-select.min.js"></script>
    <script src="assets/frontend/js/jquery.zoom.min.js"></script>
    <script src="assets/frontend/js/jquery.dd.min.js"></script>
    <script src="assets/frontend/js/jquery.slicknav.js"></script>
    <script src="assets/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/js/main.js"></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
</body>
</html>