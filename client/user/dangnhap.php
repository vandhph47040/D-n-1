<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Trang Thương Mại Điện Tử Cao Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .login-title {
        color: #f15a29;
    }

    .login-button {
        background-color: #f15a29;
        border: none;
    }

    .login-button:hover {
        background-color: #e55337;
    }

    .social-login a {
        margin-right: 10px;
    }
</style>

<body>

    <div class="container">
        <div class="login-container bg-light">
            <h2 class="text-center login-title mb-4">Đăng Nhập</h2>
            <?php if (isset($thongbao) && $thongbao != ""): ?>
                <div class="alert alert-danger">
                    <?php echo $thongbao; ?>
                </div>
            <?php endif; ?>

            <form class="form-horizontal m-t-20" method="POST" id="loginform" action="index.php?act=dangnhap">
                <div class="mb-3">
                    <label for="email" class="form-label">Tên Tài Khoản</label>
                    <input type="text" name="user" class="form-control" id="email" placeholder="Nhập tên tài khoản" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" name="pass" class="form-control" id="password" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
                </div>
                 <input name="dangnhap" value="Đăng Nhập" class="btn btn-warning w-100 login-button text-white" type="submit">
               
                <a href="index.php" class="btn btn-outline-secondary w-100 mt-3 fw-bold">Quay lại trang chủ</a>
                <p class="text-center mt-3">Hoặc đăng nhập với</p>
                <div class="text-center social-login">
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#" class="btn btn-outline-danger"><i class="fab fa-google"></i> Google</a>
                </div>
                <p class="text-center mt-3">Chưa có tài khoản? <a href="./sign.html">Đăng ký ngay</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
