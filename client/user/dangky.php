<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - Trang Thương Mại Điện Tử Cao Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .register-title {
            color: #f15a29;
        }
        .register-button {
            background-color: #f15a29;
            border: none;
        }
        .register-button:hover {
            background-color: #f15a29;
        }
        .social-login a {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-container bg-light p-4 rounded shadow-sm">
        <h2 class="text-center register-title mb-4">Đăng Ký</h2>
        <form action="index.php?act=dangky" method="POST" class="form-horizontal">
            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="user" placeholder="Nhập họ và tên" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Địa Chỉ Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số Điện Thoại</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật Khẩu</label>
                <input type="password" class="form-control" id="password" name="pass" placeholder="Tạo mật khẩu" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Xác Nhận Mật Khẩu</label>
                <input type="password" class="form-control" id="confirm-password" name="confirmpass" placeholder="Xác nhận mật khẩu" required>
            </div>

            <input class="btn btn-warning w-100 register-button text-white fw-bold" value="Đăng Ký" name="dangky" type="submit">
            

            <?php if (isset($thongbao)): ?>
                <div class="alert alert-danger mt-2">
                    <?php echo $thongbao; ?>
                </div>
            <?php endif; ?>

            <a href="index.php" class="btn btn-outline-secondary w-100 mt-3 fw-bold">Quay lại trang chủ</a>
            
            <p class="text-center mt-3">Hoặc đăng ký với</p>
            <div class="text-center social-login mb-3">
                <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" class="btn btn-outline-danger"><i class="fab fa-google"></i> Google</a>
            </div>
            <p class="text-center mt-3">Đã có tài khoản? <a href="./login.html">Đăng nhập ngay</a></p>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
