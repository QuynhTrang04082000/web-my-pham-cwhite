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
<title>CWHITE Shop</title>
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets/frontend/img/logo2.png" type="image/x-icon" />
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css">
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
        <!-- end support -->
        <!-- ..... -->

        <!-- ///// -->
         <div class="filter-widget">
                        <h4 class="fw-title">Danh Mục</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Son môi - Lips</a></li>
                            <li><a href="#">Chăm sóc da mặt</a></li>
                            <li><a href="#">Chăm sóc body</a></li>
                            <li><a href="#">Sản phẩm khác</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Thương Hiệu</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-larocheposay">
                                    LAROCHE-POSAY
                                    <input type="checkbox" id="bc-larocheposay">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-innisfree">
                                    INNISFREE
                                    <input type="checkbox" id="bc-innisfree">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-somebyme">
                                    SOMEBYME
                                    <input type="checkbox" id="bc-somebyme">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-dior">
                                    DIOR
                                    <input type="checkbox" id="bc-dior">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px; font-size: 16px; ">
          <div class="panel-heading" style="background:#252525;color: white;padding-left:50px;"> Tìm theo mức giá </div>
          <div class="panel-body" >
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" style="background: #252525;color: white;width: 100px;height: 40px;font-size: 14px;border: 1px solid  #252525; " class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">SM</a>
                            <a href="#">DM</a>
                            <a href="#">SK</a>
                            <a href="#">NH</a>
                            
                        </div>
                    </div>
                </div>
        <!-- end support online --> 
       <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
   <!--  <div class="widebanner"> <a href="#"><img src="assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div> -->
    <!-- end adv --> 
    
  </div>
</div>
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

    <!-- Js Plugins -->
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