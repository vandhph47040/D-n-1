<?php
$product_image = $img_path . $product['product_image'];
?>

    <!-- Chi Tiết Sản Phẩm -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                        href="<?php echo $product_image ?>">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                            src="<?php echo $product_image ?>" />
                    </a>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <?php foreach ($gallery_img as $img) {
                        $img_g = $img_path . $img['images']; ?>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="<?php echo $img_g ?>">
                            <img width="60" height="60" class="rounded-2" src="<?php echo $img_g ?>" />
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="product-title"><?php echo $product['product_name'] ?></h2>
                <p class="text-muted">Mã sản phẩm: <?php echo $product['product_id'] ?></p>
                <p class="product-price text-danger fw-bold"><?php echo number_format($product['product_price'], 0, ',') ?>đ</p>
                <p class="product-description"><?php echo $product['product_describe'] ?></p>
                <form action="index.php?act=add_cart" method="post">
                    <div class="d-flex align-items-center my-3">
                        <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">
                        <input type="hidden" name="price_sale" value="<?php echo $product['price_sale'] ?>">
                        <input type="number" class="form-control me-3" min="1" max="<?php echo $product['quantity'] ?>" value="1" name="quantity" aria-label="Số lượng" style="width: 80px;">
                        <?php if ($product['quantity'] > 0) { ?>
                            <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-primary shadow-0" name="btn_add">
                        <?php } else { ?>
                            <em style="color: #d0021b;font-size: 32px; font-weight: 600;">Hết hàng</em>
                        <?php } ?>
                    </div>
                    
                    <p><strong>Thương hiệu:</strong> <?php echo $product['brand_name'] ?></p>
                    <p><strong>Đổi trả:</strong> Trong vòng 7 ngày</p>
                    <p><strong>Màu Sắc:</strong> <?php echo $product['color_name'] ?></p>
                </form>
            </div>
        </div>

        <!-- Bình luận -->
        <div class="row my-5">
            <div class="col-lg-8 mb-4">
                <div class="border rounded-2 px-3 py-2 bg-white">
                    <h3>Bình luận</h3>
                    <div id="binhluan"></div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $("#binhluan").load("client/binhluan/formbinhluan.php", {
                            product_id: <?php echo $product['product_id'] ?>
                        });
                    });
                    </script>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-0 border rounded-2 shadow-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm cùng loại</h5>
                            <?php foreach ($listProduct_sameType as $product_sameType) {
                                $img_prst = $img_path . $product_sameType['product_image']; ?>
                                <div class="d-flex mb-3">
                                    <a href="index.php?act=chitietsanpham&product_id=<?php echo $product_sameType['product_id'] ?>" class="me-3">
                                        <img src="<?php echo $img_prst ?>" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="index.php?act=chitietsanpham&product_id=<?php echo $product_sameType['product_id'] ?>" class="nav-link mb-1">
                                            <?php echo $product_sameType['product_name'] ?>
                                        </a>
                                        <strong class="text-dark"><?php echo number_format($product_sameType['product_price'], 0, ',', '.') ?>đ</strong>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

