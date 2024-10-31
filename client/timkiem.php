<!-- shop section -->

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Kết quả tìm kiếm
      </h2>
    </div>
    <div class="row">
      <?php
        // Kiểm tra nếu có kết quả tìm kiếm
        if (count($tim_kiem) > 0) {
          foreach ($tim_kiem as $tim) {
            $product_img = $img_path . $tim['product_image'];
      ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="box shadow-sm rounded">
          <a href="index.php?act=chitietsanpham&product_id=<?php echo $tim['product_id']?>">
            <div class="img-box">
              <img src="<?php echo $product_img ?>" class="img-fluid rounded-top" alt="">
            </div>
            <div class="detail-box p-3">
              <h6 class="text-truncate">
                <?php echo $tim['product_name']?>
              </h6>
              <h6 class="text-danger">
                <span>
                  <?php echo number_format($tim['product_price'], 0, ',', '.')?>đ
                </span>
              </h6>
            </div>
            <div class="new text-center">
              <span class="badge badge-success">
                Mới
              </span>
            </div>
          </a>
        </div>
      </div>
      <?php 
          }
        } else {
      ?>
      <div class="col-12">
        <div class="alert alert-warning text-center">
          Không tìm thấy sản phẩm nào phù hợp với tìm kiếm của bạn.
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>


