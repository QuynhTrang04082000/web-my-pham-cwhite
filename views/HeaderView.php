<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        CWhiteshop@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0986868686
                    </div>
                </div>
                <div class="ht-right">
                    <?php if(isset($_SESSION["customer_email"]) == false): ?>
                    <a href="index.php?controller=account&action=login" class="login-panel"><i class="fa fa-user" style=" margin-left: 5px;"></i>Đăng Nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register"class="login-panel"><i class="fa fa-user" style="margin-left: 5px;"></i>Đăng ký</a>
                    <?php else: ?> 
                        <a href="#"class="login-panel"><i class="fa fa-user"></i>Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout"class="login-panel"><i class="fa fa-user"></i>Đăng xuất</a>
      <?php endif; ?>
                    <div class="lan-selector">
                        
                    </div>
                    <div class="top-social">
                        <a href="https://www.facebook.com/profile.php?id=100010369148503"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/frontend/img/logo2.png" alt="" style="height: 75px;width: 95px; margin-left: 50px;margin-top: -15px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Danh Mục</button>
                            <div class="input-group">
                                <input type="text" placeholder="Sản phẩm bạn cần là gì ?"id="key" style="width: 450px;" >
                                <button type="button"onclick="return search();"><i class="ti-search"></i></button>
                                <div class="smart-search">
                                 <ul>
                                </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                        <style type="text/css">
        .smart-search img{width: 50px; margin-right: 5px;}
        .smart-search{position: absolute; width: 100%; z-index: 1; display: none; max-height: 350px; overflow: scroll;margin-top: 20px;margin-left: 5px;}
        .smart-search ul{padding:0px; margin:0px; list-style: none;}
        .smart-search ul li{background: white; border-bottom: 1px solid #dddddd; font-size: 13px;}
      </style>
                  <script type="text/javascript">
        $(document).ready(function(){
          //khi go phim vao o textbox
          $("#key").keyup(function(){
            //lay gia tri vua nhap vao
            var strKey = $("#key").val();
            //ham trim() loai bo khoang trang
            strKey = strKey.trim();
            if(strKey != ""){
              //hien thi the html co class=smart-search
              $(".smart-search").attr("style","display:block");
              //---
              //ajax de lay du lieu
              $.ajax({
                url: "index.php?controller=products&action=ajax&key="+strKey,
                success: function( result ) {
                  //clear tat ca cac the li
                  $(".smart-search ul").empty();
                  //them ket qua vua tim thay
                  $(".smart-search ul").append(result);
                }
              });
              //---
            }else
              $(".smart-search").attr("style","display:none");
          });
        });
      </script>
                    </div>
                    
                     <?php 
        $numberProduct = 0;
        if(isset($_SESSION["cart"])){
            foreach($_SESSION["cart"] as $product){
              $numberProduct++;
            }
        }
     ?>
                    <div class="col-lg-3 text-right col-md-3" style="margin-left: 860px;margin-top: -80px;">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="index.php?controller=wishlist">
                                    <i class="icon_heart_alt"></i>
                                     
                                </a>
                            </li>
                            
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span ><?php echo $numberProduct; ?></span>
                                </a>
                                 
                                <div class="cart-hover">
                                    <div class="select-items" style="font-size: 13px;">
                                        <table>
                                            <?php if(isset($_SESSION["cart"])): ?>
                                            <?php foreach($_SESSION["cart"] as $product): ?>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic" style="width: 100px;" ><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><img src="assets/upload/products/<?php echo $product['photo']; ?>"  alt="<?php echo $product['name']; ?>"title="<?php echo $product['name']; ?>"></a></td>
                                                    <td class="si-text">
                                                        <div class="product-selected"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>">
                                                            <p><?php echo number_format($product['price']); ?>đ x <?php echo $product['number']; ?></p>
                                                            <h6><?php echo $product['name']; ?></h6></a>
                                                        </div>
                                                    </td>
                                                    <td class="si-close"><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>">
                                                        <i class="ti-close"></i></a>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        
                                    </div>
                                   
                                    <div class="select-button">
                                        <a href="index.php?controller=cart" class="primary-btn view-card">Xem Sản Phẩm</a>
                                        <a href="index.php?controller=cart&action=checkout"  class="primary-btn checkout-btn">Thanh Toán</a>
                                    </div>
                                
                                </div>
                            </li>
                            
                            <li class="cart-price">Sản Phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item" style="margin-top: -30px;">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                          <span >Danh Mục Sản Phẩm</span>

                        <ul class="depart-hover">
                         <?php 
              //load cap 1
              $categories = $this->modelGetCategories();
           ?>
           <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=categories&category_id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
              <?php 
                //load cap 2
                $categoriesSub = $this->modelGetCategoriesSub($rows->id);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=categories&category_id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>  
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>

                        <li class="active"><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?controller=categories">Shop</a></li>
                        </li>
                        <li><a href="index.php?controller=news">Làm Đẹp</a></li>
                        <li><a href="#" >Pages</a>
                            <ul class="dropdown"style="width: 140px;">
                                
                                <li><a href="index.php?controller=cart">Giỏ Hàng</a></li>
                                <li><a href="index.php?controller=account&action=login">Đăng Nhập</a></li>
                                <li><a href="index.php?controller=account&action=register">Đăng Ký</a></li>
                            </ul>
                        </li>
                         <li><a href="index.php?controller=contact">Liên hệ</a>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>