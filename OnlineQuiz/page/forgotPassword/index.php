<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Đăng Kí</title>
</head>
<?php
session_start();
if (isset($_POST['forgotpassword'])) {
  $errPassword = '';
  $errEmail = '';
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  $confirm_password = $_POST['confirm_password'];
  include '../../config.php';
  if ($password !== $confirm_password) {
    $errPassword = 'Mật khẩu không trùng khớp !';
  }
  $sqlEmail = "SELECT * FROM user s  WHERE s.email ='$email'";
  $resultEmail = mysqli_query($conn, $sqlEmail);
  $num_rowsEmail = mysqli_num_rows($resultEmail);
  if ($num_rowsEmail == 0) {
    $errEmail = "Email chưa tồn tại !";
  }
  if ($num_rowsEmail != 0 && $password === $confirm_password) {
    $randomCODE=rand(1000,9999);
      $_SESSION['PINCode'] =$randomCODE;
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      require '../mail/sendmail.php';
      header('Location: /onlineQuiz/page/confirmPincode');
    // else if($PIN!='' && $PIN==$randomCODE){
    //   echo $randomCODE;
    //   $sql = "UPDATE user u SET u.password ='$password' where u.email = '$email'";
    //   $result = mysqli_query($conn, $sql);
    //   if ($result) {
    //     header('Location: /homestay/login/');
    //   }
    // }
    // else{
    //   echo $randomCODE;
    //   echo "mã xác nhận ko chính xác";
    // }
  }
}
?>

<body>
    <div class="container">

        <form class="form__register" action="index.php" method="post">
            <a href="../login/" class="text__login">_Đăng Nhập_</a>
            <h4 class="form__register__title">Quên mật khẩu</h4>
            <div class="form__register__email">
                <p class="form__register__email--title">Email của bạn</p>
                <input type="email" class="form__register__email--input" name="email" required maxlength="50"
                    value="<?php if (isset($_POST['email'])) echo $_POST['email'];
                                                                                                              else echo '' ?>" />
            </div>
            <?php if (isset($errEmail)) echo "<p class='mess_notifer'>$errEmail </p>";
                              else echo '' ?>
            <div class="form__register__password">
                <p class="form__register__password--title">Mật khẩu mới</p>
                <input type="password" class="form__register__password--input" name="password" required maxlength="20"
                    value="<?php if (isset($_POST['password'])) echo $_POST['password'];
                                                                                                                      else echo '' ?>" />
                <div class="form__register__password__icon">
                    <i class="far fa-eye eyes_password"></i>
                    <i class="far fa-eye-slash disable eyesHidden_password"></i>
                </div>
            </div>
            <div class="form__register__confirm__password">
                <p class="form__register__confirm__password--title">Nhập lại mật khẩu</p>
                <input type="password" class="form__register__confirm__password--input" name="confirm_password" required
                    maxlength="20"
                    value="<?php if (isset($_POST['confirm_password'])) echo $_POST['confirm_password'];
                                                                                                                                        else echo '' ?>" />
                <div class="form__register__confirm__password__icon">
                    <i class="far fa-eye eyes_password_confirm"></i>
                    <i class="far fa-eye-slash disable eyesHidden_password_confirm"></i>
                </div>
            </div>
            <p class="mess_notifer"><?php if (isset($errPassword)) echo $errPassword;
                              else echo '' ?></p>
            <!-- <div class="form__register__confirm__password">
        <p class="form__register__confirm__password--title">Mã xác nhận</p>
        <input type="text" class="form__register__confirm__password--input" name="PIN" maxlength="4"/>

      </div> -->
            <button class="form__register__btn" type="submit" name='forgotpassword'>Lấy Mã</button>
        </form>
    </div>
    <script src="../js/forgotPasswordForm.js"></script>
</body>

</html>