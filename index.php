<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="container">
    <div class="heading">Đăng Nhập</div>
    <form action="login_process_for_student.php" class="form" method="post">
        <input required class="input" type="text" name="username" id="username" placeholder="Họ và tên">
        <input required class="input" type="password" name="maSV" id="password" placeholder="Mã sinh viên">
        <span class="forgot-password"><a href="#">Quên mật khẩu?</a></span>
        <input class="login-button" type="submit" value="Đăng Nhập">
    </form>
    <div class="social-account-container">
        <span class="agreement title">
            <a href="dashboard/home.php" target="_blank">Bạn là Admin? Nhấn vào đây!</a>
        </span>
    </div>
    <span class="agreement"><a href="#">Tìm hiểu về thỏa thuận người dùng</a></span>
</div>

</body>
</html>