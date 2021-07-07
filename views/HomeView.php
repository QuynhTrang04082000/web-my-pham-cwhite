<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
<div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="col-lg-10">
                <h1>HOT PRODUCT</h1>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
              	<?php 
              		$products = $this->modelHotProducts();
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                  <div class="heart-icon" style="position: absolute; width: 100px; line-height: 25px; right: 10px;top:10px;margin-left: 70px;"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" ><i class="icon_heart_alt" style="margin-left: 70px;color: #e7ab3b;width: 300px;"></i></a></div>
                  <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name" style="font-size: 16px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                     
                      <p class="price-box"> <span class="special-price"> <span  class="product-price" style="color: #EC870E;font-size: 20px;" > <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> </span>₫ </span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-12"> <img src="assets/frontend/img/trang.jpg" class="img-thumbnail" style="height: 300px;width: 1200px;"></div>
        </div>
        <?php 
        	$categories = $this->modelGetCategories();
         ?>
         <?php foreach($categories as $rowsCategories): ?>
        <!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2><?php echo $rowsCategories->name; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <?php 
              		$products = $this->modelGetProducts($rowsCategories->id);
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                  <div class="heart-icon" style="position: absolute; width: 100px; line-height: 25px; right: 10px;top:10px;margin-left: 70px;"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" ><i class="icon_heart_alt" style="margin-left: 70px;color: #e7ab3b;width: 300px;"></i></a></div>
                  <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name" style="font-size: 16px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                     <!--  <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php //echo number_format($rows->price); ?></span> ₫ </span> </p> -->
                      <p class="price-box"> <span class="special-price"> <span  class="product-price" style="color: #EC870E;font-size: 20px;" > <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> </span>₫ </span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
               
            </div>
          </div>
        </div>
        <!-- /category product --> 
        <?php endforeach; ?>
        
        <!-- adv -->
        <div class="widebanner"> <a href="#"><img src="assets/frontend/img/trang2.jpg" class="img-responsive" style="height: 300px;width: 1200px;"></a> </div>
        <!-- end adv --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title" style="margin-left: 450px;"> <span><h1><b>XU HƯỚNG LÀM ĐẸP </b> </h1></span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-bottompage"> 
            <?php 
            	$hotNews = $this->modelGetHotNews();
             ?>
             <?php foreach($hotNews as $rows): ?>
              <!-- new item -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div>
                </div>
              </div>
              <!-- /news item --> 
             <?php endforeach; ?> 
               
              
            </div>
          </div>
        </div>
        <!-- /hotnews -->