<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<h1 >XU HƯỚNG LÀM ĐẸP</h1>
        <div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
          <?php foreach($data as $rows): ?>
            <div class="col-md-6 article" style="height: 500px;font-size: 15px;"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" style="width:100%;" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
              <h4><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"  ><?php echo $rows->name; ?></a></h4>
              <p class="date" style="font-size: 14px;"><?php echo $rows->description; ?></p>
            </div>
          <?php endforeach; ?>
          </div>
          <!-- end list news -->
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>