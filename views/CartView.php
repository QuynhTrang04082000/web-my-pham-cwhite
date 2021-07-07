<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangTrong.php";
 ?>
 	  <!-- Breadcrumb Section Begin -->
      <form action="index.php?controller=cart&action=update" method="post">
    <div class="breacrumb-section" style="margin-top: -10px;">
        
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                     
                        <a href="#">Giỏ hàng</a>
                    </div>
                </div>
            </div>
    
        </form>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad" style="margin-top: -50px;">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình Ảnh</th>
                                    <th class="p-name">Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền
                                    </th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach($_SESSION["cart"] as $product): ?>
                                <tr>
                                    <td class="cart-pic first-row"><img src="assets/upload/products/<?php echo $product['photo']; ?>" alt=""></td>
                                    <td class="cart-title first-row">
                                       <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"> <h5><?php echo $product['name']; ?></h5></a>
                                    </td>
                                    <td class="p-price first-row"><?php echo number_format($product['price']); ?>đ</td>
                                    
                                    <td class="qua-col first-row">
                                        <!-- <div class="quantity"> -->
                                            <div class="pro-qty">
                                                <input  type="number" id="quantity" min="1"  value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống">
                                            </div>
                                        <!-- </div> -->
                                    </td>
                                    <td class="total-price first-row"> <?php echo number_format($product['number']*$product['price']); ?>đ</td>

                                    <td class="close-td first-row"><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" ><i class="ti-close"></i></a></td>
                                </tr>
                               <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                     <?php if($this->cartNumber() > 0): ?>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons" style="margin-top: -10px;">
                               <a href="index.php?controller=cart&action=destroy" class="primary-btn up-cart" >Xóa toàn bộ</a>
                                <a href="index.php" class="primary-btn continue-shop" style="margin-top: 10px;">Tiếp tục mua sắm</a>
                                 <input type="submit" class="primary-btn up-cart" value="Cập nhật giỏ hàng"></td>
                            </div>
                            <div class="discount-coupon">
                                <h6>Mã Giảm Giá</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Áp Dụng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    
                                    <li class="cart-total" style="font-size: ">Tổng Tiền Thanh Toán
                                     <span style="margin-right: 60px;"><?php echo number_format($this->cartTotal()); ?>đ</span></li>
                                </ul>
                                <a href="index.php?controller=cart&action=checkout" class="proceed-btn">Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
       
    </section>
    <!-- Shopping Cart Section End -->
   </form>