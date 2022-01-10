<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Đăng Nhập</title>
</head>
<?php
session_start();
?>

<body>
    <?php
      $email = $_POST['email'] ??'';
      $password = $_POST['password']??'';
    if (isset($_POST['login'])) {
        $error = '';
      
        $remember = $_POST['remember'] ?? '';
       
        $_SESSION['remember'] = false;
        include '../../config.php';
        $sql = "SELECT * from user s where s.email = '$email' and s.matKhau = '$password'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($num_rows != 0) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            if (isset($_POST['remember'])) {
                $_SESSION['remember'] = true;
                setcookie("remember", $_SESSION['remember'], time() + 60 * 60 * 24 * 100);
                $_COOKIE["remember"];
                setcookie("email", $_SESSION['email'], time() + 60 * 60 * 24 * 100, "/");
                $_COOKIE["email"];
                setcookie("password", $_SESSION['password'], time() + 60 * 60 * 24 * 100, "/");
                $_COOKIE["password"];
            }
            if ($row['maQuyen'] === 'user') {
                header('Location: /onlineQuiz/page/home');
            } else {
                // Phần này hoàn thành sau
                // header('Location: /onlineQuiz/Admin/ad_acccounts/Admins.php');
            }
        } else
            $error = 'Tên Đăng nhập hoặc mật khẩu không đúng';
    }



    ?>

    <div class="container">
        <form class="form__login" action="index.php" method="POST">
            <a href="../register" class="text__register">_Đăng Kí_</a>
            <h4 class="form__Login__title">Đăng Nhập</h4>
            <div class="form__login__username">
                <p class="form__login__username--title">Email của bạn</p>
                <input type="email" class="form__login__username--input" name="email" required
                    value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email'];
                                                                                                        else echo $email ?>" />
            </div>
            <div class="form__login__password">
                <p class="form__login__password--title">Mật khẩu</p>
                <input type="password" class="form__login__password--input" name="password" required
                    value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'];
                                                                                                            else echo $password ?>" />
                <div class="form__login__password__icon">
                    <i class="far fa-eye eyes_password"></i>
                    <i class="far fa-eye-slash disable eyesHidden_password"></i>
                </div>
            </div>
            <?php if (isset($error)) echo "<p class='mess_er'>$error</p>";
            else echo '' ?>
            <input <?php if (isset($_COOKIE['remember'])) echo $_COOKIE['remember'] ? 'checked' : '' ?>
                class="remember-account" type="checkbox" name="remember" />Lưu tài khoản
            <a class='forgotPassword' href="../forgotPassword/">Quên Mật Khẩu</a>

            <button class="form__login__btn" type="submit" name="login" value="">Đăng Nhập</button>
        </form>
    </div>

    <script src="../js/loginForm.js"></script>
</body>

</html>