<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Khuyến mãi 50% cho tất cả sản phẩm</h1>
                    <p>Nhân dịp lễ hội mua sắm - Mua ngay để nhận ưu đãi!</p>
                    <a href="#" class="btn btn-warning btn-lg">Mua Ngay</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Giảm giá đặc biệt cuối năm</h1>
                    <p>Hàng ngàn sản phẩm với mức giá không thể bỏ lỡ</p>
                    <a href="#" class="btn btn-warning btn-lg">Khám Phá</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 3">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Ưu đãi dành riêng cho thành viên mới</h1>
                    <p>Đăng ký ngay để nhận quà tặng độc quyền</p>
                    <a href="#" class="btn btn-warning btn-lg">Đăng Ký</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Danh sách sản phẩm -->
    <div class="container py-5">
    <h2 class="text-center mb-4" style="color: #ff6347;">Sản phẩm nổi bật</h2>
    <div class="row">
        <!-- Sản phẩm 1 -->
        <?php
        $active_categories = array();
        foreach ($list_categories as $category) {
            if ($category['status'] != 'Inactive') {
                $active_categories[] = $category['category_id'];
                echo '<input type="hidden" value="' . $category['category_name'] . '">';
            }
        }
        foreach ($list_products as $product) {
            $product_img = $img_path . $product['product_image'];
            if ($product['status'] != 'Inactive') {
        ?>
                <div class="col-md-3 mb-4"> <!-- Thay đổi ở đây -->
                    <div class="card product-card h-100">
                        <img src="<?php echo $product_img ?>" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h5 class="product-title"><?php echo $product['product_name'] ?></h5>
                            <p class="product-price"><?php echo number_format($product['product_price'], 0, ',', '.') ?>đ</p>
                            <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            <?php 
            } 
        } 
        ?>
    </div>
</div>
