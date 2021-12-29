<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <title>Lấy mã</title>
</head>
<?php
session_start();
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$errPINCode='';
if (isset($_POST['forgotpassword'])) {
  $PIN =$_POST['PIN']??'';
  include '../../config.php';
  if($PIN!='' && $PIN==$_SESSION['PINCode']){
      $sql = "UPDATE user u SET u.matKhau ='$password' where u.email = '$email'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        header('Location: /onlineQuiz/page/login/');
      }
    }
    else{
      $errPINCode ="mã xác nhận ko chính xác";
      echo $errPINCode;
    }
  }
?>

<body>
  <div class="container">
    <video class="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
      <source src="../asset/Luxury Travel Agency - Private Travel Designer - Bespoke Tours.mp4" type="video/mp4"/>
    </video>
    <form class="form__register" action="index.php" method="post">
      <a href="../login/" class="text__login">_Đăng Nhập_</a>
      
      <h4 class="form__register__title">Nhập mã xác nhận</h4>
     
        <div class="form__register__confirm__password">
        <p class="form__register__confirm__password--title">Mã xác nhận</p>
        <input type="text" class="form__register__confirm__password--input" name="PIN" maxlength="4"/> 
      </div>
      <?php if (isset($errPINCode)) echo "<p class='mess_notifer'>$errPINCode</p>";
                              else echo '' ?>
       <p class="mess_time">Vui lòng đợi 30s để nhận mã</p>
     
      <button class="form__register__btn" type="submit" name='forgotpassword'>Xác nhận</button>
    </form>
  </div>
  <script src="../js/forgotPasswordForm.js"></script>
</body>

</html>