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
                        <h4 class="fw-title">Danh M???c</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Son m??i - Lips</a></li>
                            <li><a href="#">Ch??m s??c da m???t</a></li>
                            <li><a href="#">Ch??m s??c body</a></li>
                            <li><a href="#">S???n ph???m kh??c</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Th????ng Hi???u</h4>
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
          <div class="panel-heading" style="background:#252525;color: white;padding-left:50px;"> T??m theo m???c gi?? </div>
          <div class="panel-body" >
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Gi?? t??? &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">?????n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" style="background: #252525;color: white;width: 100px;height: 40px;font-size: 14px;border: 1px solid  #252525; " class="btn btn-warning" value="T??m m???c gi??" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
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
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao h??ng mi???n ph??" title="Giao h??ng mi???n ph??" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao h??ng mi???n ph??</h3>
          <p>Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuy???n m???i" title="Khuy???n m???i"> </div>
        <div class="info">
          <h3>Khuy???n m???i</h3>
          <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Ho??n tr??? l???i ti???n" title="Ho??n tr??? l???i ti???n"> </div>
        <div class="info">
          <h3>Ho??n tr??? l???i ti???n</h3>
          <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p>
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
          <h3>V??? ch??ng t??i</h3>
          <ul class="list-unstyled">
            <li><a href="index.html">Trang ch???</a></li>
            <li><a href="gioi-thieu">Gi???i thi???u</a></li>
            <li><a href="tin-tuc">Tin t???c</a></li>
            <li><a href="gioi-thieu">Li??n h???</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>H?????ng d???n</h3>
          <ul class="list-unstyled">
            <li><a href="huo-ng-da-n-mua-ha-ng">H?????ng d???n mua h??ng</a></li>
            <li><a href="huong-dan">Giao nh???n v?? thanh to??n</a></li>
            <li><a href="do-i-tra-va-ba-o-ha-nh">?????i tr??? v?? b???o h??nh</a></li>
            <li><a href="account/register">????ng k?? th??nh vi??n</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Ch??nh s??ch</h3>
          <ul class="list-unstyled">
            <li><a href="chinh-sach">Ch??nh s??ch thanh to??n</a></li>
            <li><a href="chi-nh-sa-ch-va-n-chuye-n">Ch??nh s??ch v???n chuy???n</a></li>
            <li><a href="chi-nh-sa-ch-do-i-tra">Ch??nh s??ch ?????i tr???</a></li>
            <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Ch??nh s??ch b???o h??nh</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>??i???u kho???n</h3>
          <ul class="list-unstyled">
            <li><a href="dieu-khoan">??i???u kho???n s??? d???ng</a></li>
            <li><a href="die-u-khoa-n-giao-di-ch">??i???u kho???n giao d???ch</a></li>
            <li><a href="di-ch-vu-tie-n-i-ch">D???ch v??? ti???n ??ch</a></li>
            <li><a href="quye-n-so-hu-u-tri-tue">Quy???n s??? h???u tr?? tu???</a></li>
          </ul>
        </div>
      </div>
      <div class="payments-method"> <img src="assets/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Ph????ng th???c thanh to??n" title="Ph????ng th???c thanh to??n"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> ?? B???n quy???n DKT Store</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang ch???</a></li>
            <li><a href="#">Gi???i thi???u</a></li>
            <li><a href="#">Tin t???c</a></li>
            <li><a href="#">Li??n h???</a></li>
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