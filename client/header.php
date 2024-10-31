<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVT Shop - Trang Thương Mại Điện Tử Cao Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<div class="container">
    <!-- Header -->
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="index.php" class="navbar-brand">ShopLogo</a>
                <form class="d-flex w-25" action="index.php?act=tim_kiem" method="post">
                    <input class="form-control me-2 search-input" type="search" name="tim_kiem" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                    <button class="btn btn-warning search-button" type="submit">Tìm kiếm</button>
                </form>

                <div class="header-links ms-3">
                    <?php if (isset($_SESSION['account'])): ?>
                        <span class="me-3">Xin chào, <?= $_SESSION['account']['user'] ?></span>
                        <a href="index.php?act=tracuu" class="me-3"><i class="fas fa-search"></i> Tra cứu đơn hàng</a>
                        <a href="index.php?act=update_taikhoan" class="me-3"><i class="fas fa-user-edit"></i> Cập nhật tài khoản</a>
                        <a href="client/user/logout.php" class="me-3"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    <?php else: ?>
                        <a href="index.php?act=dangnhap" class="me-3"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                        <a href="index.php?act=dangky" class="me-3"><i class="fas fa-user-plus"></i> Đăng ký</a>
                    <?php endif; ?>
                    <a href="index.php?act=cart"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                </div>
        </div>
    </header>
    <!-- End Header -->

